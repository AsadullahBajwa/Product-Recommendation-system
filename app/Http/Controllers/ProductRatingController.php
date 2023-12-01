<?php

namespace App\Http\Controllers;

use App\Models\ProductRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductRatingController extends Controller
{
    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        // echo "<script>alert('Product Rating store function');</script>";
        // Validate the request
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        // Check if the user has already rated the product
        $existingRating = ProductRating::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($existingRating) {
            // If the user has already rated, you might want to handle this case (e.g., show a message)
            return redirect()->back()->with('error', 'You have already liked this product.');
        }

        // Create a new ProductRating instance with a rating of 1
        $productRating = new ProductRating([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'rating' => 1, // Set the rating to 1 for a like
        ]);

        $productRating->save();

        return redirect()->back()->with('success', 'Product liked successfully.');
    }
}
