<?php
namespace App\Http\Controllers;

use App\Models\ProductRecommendation;
use App\Models\ProductRating;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductRecommendationController extends Controller
{
    public function recommend()
    {
        // Get user's liked product IDs
        $likedProductIds = ProductRating::where('user_id', Auth::id())
            ->where('rating', 1) // Assuming 1 represents a like
            ->pluck('product_id');

        // Get products with the same category as liked products
        $recommendations = Product::whereIn('category', function ($query) use ($likedProductIds) {
            $query->select('category')
                ->from('products')
                ->whereIn('id', $likedProductIds);
        })
        ->whereNotIn('id', $likedProductIds) // Exclude already liked products
        ->inRandomOrder() // Randomize the order
        ->limit(5) // Limit the number of recommendations
        ->get();

        // Save the recommended products in the ProductRecommendation table
        foreach ($recommendations as $recommendation) {
            ProductRecommendation::create([
                'user_id' => Auth::id(),
                'product_id' => $recommendation->id,
            ]);
        }

        return view('recommendations.index', compact('recommendations'));
    }
}
