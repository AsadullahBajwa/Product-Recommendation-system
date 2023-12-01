
**Product recommendation System**

**--> Steps to setup the project on your machine:**

1-	Clone the Project:
https://github.com/AsadullahBajwa/Product-Recommendation-system.git

2-	composer install

3-	Configure Environment.

4-	Copy .env.example to .env.

5-	Update .env with your database and application settings.

6-	php artisan migrate

7-	Test the Application: Visit http://localhost:8000 in your browser and test your Laravel application.

**--> Summary of Product Recommendation system:**

I have implemented a recommendation system that utilizes four database tables: Users, Products, ProductRating, and ProductRecommendation. When a user creates an account, they are presented with a list of products. If the user likes a particular product, that product, along with its product ID and the user's ID, is stored in the ProductRating table. Additionally, there is a recommendation page where users receive product recommendations based on the categories of products they have liked.
This provides a general overview of the system. If you have any further questions or need additional details, feel free to ask.

**Home Screen**
Where all the products listing will be displayed to user.

![image](https://github.com/AsadullahBajwa/Product-Recommendation-system/assets/86548156/5bcf3603-44a6-43c3-8c18-36265c114b34)


**Recommendation Screen:**
Where user will get recommended products according to the products he liked.

![image](https://github.com/AsadullahBajwa/Product-Recommendation-system/assets/86548156/a5026e66-aa2e-4c41-9c72-099b19d6d793)


**Add Product:**
Where admin can add new product.

![image](https://github.com/AsadullahBajwa/Product-Recommendation-system/assets/86548156/c7a060d8-97d3-4f92-b4b5-9633518e5302)


**List of Products**
List of all products available in the database. Admin user can perform update and delete operations on these available produts.

![image](https://github.com/AsadullahBajwa/Product-Recommendation-system/assets/86548156/587808c3-42b9-4e36-a736-ab8751d97ed0)




