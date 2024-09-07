<?php 
require "database_connection.php";
$CRUD=new CRUD();
 
?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>User Profile</title>  
    <script src="https://cdn.tailwindcss.com"></script>  
</head>  
<body class="bg-gray-100">  
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">  
        <h2 class="text-2xl font-bold mb-4">User Profile</h2>  
        <form>  
            <div class="mb-4">  
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>  
                <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter your name">  
            </div>  
            <div class="mb-4">  
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>  
                <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter your email">  
            </div>  
            <div class="mb-4">  
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>  
                <input type="password" id="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter your password">  
            </div>  
            <div class="mb-4">  
                <label for="favorite-recipe" class="block text-sm font-medium text-gray-700">Favorite Recipe</label>  
                <textarea id="favorite-recipe" name="favorite-recipe" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Describe your favorite recipe"></textarea>  
            </div>  
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Save Profile</button>  
        </form>  
    </div>  
</body>  
</html>