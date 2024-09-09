<?php 
require "database_connection.php";
$CRUD=new CRUD();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- css link -->
     <link rel="stylesheet" href="faq.css">
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
   .dark-theme {
    background: #000106;
    color: #fff;
}
    .dark-theme .pretty-form input{

        background-color: #000106;
        border-color: #f9f9f9;
    }
    .dark-theme .pretty-form {
       background-color: black;
       color: white;
    }
    .pretty-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.pretty-form .form-group {
    margin-bottom: 1.5rem;
}

.pretty-form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.pretty-form input[type="text"],
.pretty-form input[type="email"] {
    width: 100%;
    padding: 0.8rem;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.pretty-form input[type="text"]:focus,
.pretty-form input[type="email"]:focus {
    border-color: #007bff;
    outline: none;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light ">
        <div class="container-fluid">
            <!-- Logo and Toggler Button -->
            <div class="d-flex align-items-center me-4">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" alt="Logo" style="height: 30px; margin-right: 10px;">
                </a>
                <!-- Toggler button to keep close to the logo -->
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="nav-icon fas fa-bars"></i>
                </button>
            </div>

            <div class="d-flex align-item-center me-5 order-lg-2">
            <form id="languageForm " class="me-5 mt-1" style="border-radius: 20px;">
                <div class="button-switch-container">
                    <select id="languageSelect" class="language" aria-label="Select language" title="Select language"
                    style="border: 2px solid #2b7067; border-radius: 15px; padding: 5px 10px; font-size: 16px; margin-right: 10px;">
                    <option value="en">EN</option>
                    <option value="my">MY</option>
                    </select>
                    <button type="submit" id="submitBtn" style="display: none;"></button>
                </div>
            </form>
                <a class="nav-link me-5" href="#">
                    <img src="../src/assets/images/moon_4139162.png" alt=""  style="width: 30px; height: 30px;" id="icon">
                </a>
                <a class="nav-link " href="sign.php">Sign In</a>
            </div>

            <!-- Navbar links and action items -->
            <div class="collapse navbar-collapse  custom pe-5 " id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-3 ">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Features</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php#suggested">Suggested</a></li>
                            <li><a class="dropdown-item" href="index.php#about">About</a></li>
                          <li><a class="dropdown-item" href="index.phpl#testimonials">Testimonials</a></li>
                          <li><a class="dropdown-item" href="index.php#contact">Contact</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="recipe.html" role="button" aria-expanded="false">Meal</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="recipe.php">Chicken</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Fish</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Pork</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Beef</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="recipe.html" role="button" aria-expanded="false">Dessert</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href="recipe.php">Chicken</a></li>
                            <li><a class="dropdown-item"  href="recipe.php">Fish</a></li>
                        </ul>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container-lg py-4 ">
        <h1 class="mt-5 text-center">User Profile</h1>
        <form class="pretty-form mt-5" action="" method="post">
            <div class="form-group">
            <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
</form>

            <div class="row" style="margin-top: 100px;">
                 <div class="col-md-4 col-sm-6" >
                    <div class="border-des position-relative p-4" >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img src="../src/assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <h3 style="color: #B88A44;">Chicken Curry</h3>
                                <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                            </div>
                            <div class="mt-5 d-flex justify-content-around px-3" >
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2" >
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Prepare</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Cooking</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center"> 
                                    <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i>
                                </div>                                
                            </div>
                            
                        </a>
                    </div>
                </div>  

                <!-- Third Project Card -->
                 <div class="col-md-4 col-sm-6" style="margin-bottom: 100px;">
                    <div class="border-des position-relative p-4" >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid" style="width: 200px; height: 200px;">
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <h3 style="color: #B88A44;">Chicken Curry</h3>
                                <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                            </div>
                            <div class="mt-5 d-flex justify-content-around px-3" >
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2" >
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Prepare</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Cooking</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center"> 
                                    <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i>
                                </div>                                
                            </div>
                            
                        </a>
                    </div>
                </div> 

                   <!-- fourth Project Card -->
                    <div class="col-md-4 col-sm-6" >
                    <div class="border-des position-relative p-4" >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid" style="width: 200px; height: 200px;">
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <h3 style="color: #B88A44;">Chicken Curry</h3>
                                <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                            </div>
                            <div class="mt-5 d-flex justify-content-around px-3" >
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2" >
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Prepare</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Cooking</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;">25min</span>
                                </div>
                                
                                <div class="text-center"> 
                                    <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i>
                                </div>                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
<!-- Bootstrap JS link -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelectorAll('.toggle-icon').forEach(function(icon) {
    // Get the collapse target element
    let target = document.querySelector(icon.getAttribute('data-bs-target'));

    // Toggle the icon when the collapse is shown or hidden
    target.addEventListener('shown.bs.collapse', function() {
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
    });

    target.addEventListener('hidden.bs.collapse', function() {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
    });

    // Ensure the icon updates when clicking the first time
    icon.addEventListener('click', function() {
        if (target.classList.contains('show')) {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
        } else {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
        }
    });
});
const icon = document.getElementById("icon");
    const body = document.body;
    icon.addEventListener("click", () => {
    body.classList.toggle("dark-theme");
    if (body.classList.contains("dark-theme")) {
    icon.src = "../src/assets/images/sun_3226456.png"; 
     } else {
    icon.src = "../src/assets/images/moon_4139162.png"; 
    }
    console.log('Dark mode:', document.body.classList.contains("dark-theme"));
});

</script>
</body>
</html>