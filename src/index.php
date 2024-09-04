i<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="../css/index.css">
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
                <a class="nav-link mx-5" href="#">
                    <button class="button-switch" id="languageButton" aria-label="Switch language" title="Switch language between English and Myanmar">
                        <span class="switch-text text-en">EN</span>
                        <span class="switch-text text-my">MY</span>
                    </button>
                </a>
                <a class="nav-link me-5" href="#">
                    <img src="../assets/images/moon_4139162.png" alt=""  style="width: 30px; height: 30px;" id="icon">
                </a>
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

    <!-- home section start -->
    <section class="home " id="home" >
        <div class="container-lg py-4 ">

            <div class="row min-vh-100 align-items-center align-content-center position-relative">
             
                <!-- protfolio image -->
                <div class="col-md-6 tex-center mb-lg-0  mt-0" style="height: 600px;">
                    <img src="../assets/layer3-removebg-preview.png" alt=""
                    style="position:absolute;width: 550px;z-index: 1; margin-left: 6%;">
                    <img src="../assets/food-removebg-preview.png" alt="food-image" class="food-image position-relative"
                     style="width: 320px; height: 320px;margin-left: 30%;z-index: 2;margin-top: 17%;">
                </div>
                <!-- protfolio text -->
                <div class="col-md-6 mt-5 mt-md-0 order-md-first position-relative  " style="z-index: 3;">
                    <p class=" mb-1">Let Meet</p>
                    <h1 class="text-uppercase fw-bold fs-md-1" style="font-size: 80px; color: #B88A44; line-height: .8; margin: 0;">
                        Myanmar 
                        <span style="color: #2b7067; font-size: 150px; margin: 0; padding: 0; display: inline; line-height: .8;">
                            Heritaste
                        </span>
                    </h1>
                    
                    <h1 style="font-size: 40px;">Discover Authentic Flavors</h1>
                    <p class="">Dive into the rich and diverse culinary heritage of Myanmar. From aromatic curries 
                    to delightful street food, explore traditional recipes that have been passed down through generations. 
                    </p>
                    <a href="sign.html" class="btn px-3 mt-3 btn-custom" style="border-color: #2b7067;color: #B88A44;">Explore Recipes</a>
                </div>                
        </div>
    </section>
    <!-- home section end -->

     <!-- about section start -->
     <section class="about" id="about">
        <div class="container-lg py-4 min-vh-100">
            <!-- Section Title -->
            <div class="row text-center mb-5 mt-5">
                <div class="col">
                    <h1 class="fw-bold ">About Us</h1>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start mb-0">
                            <img class="img-fluid rounded w-100 zoomIn" src="../assets/food1.jpg" alt="">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 zoomIn" src="../assets/food3.jpg" style="margin-top: 16%;" alt="">
                        </div>
                        <div class="col-6 text-end mt-0">
                            <img class="img-fluid rounded w-75 zoomIn" src="../assets/food4.jpg" style="margin-top: 26%;" alt="">
                        </div>
                        <div class="col-6 text-end mt-0">
                            <img class="img-fluid rounded w-100 zoomIn" src="../assets/food2.jpg" style="margin-top: 10%;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="mb-4">Welcome to <span class="text-uppercase" style="font-size: 50px;color: #B88A44;"><i class="fas fa-utensils me-2 fs-3"></i>Heritaste</span></h5>
                    <p class="mb-2" style="text-align: justify;">Welcome to <span style="color: #a86b11;">HERITASTE</span> your ultimate destination for exploring the rich flavors of traditional Myanmar cuisine!</p>
                    <p class="mb-2" style="text-align: justify;">Our platform is dedicated to sharing authentic Myanmar recipes, from delectable meals to delightful desserts. Whether you’re a culinary enthusiast or just looking to try something new, our comprehensive catalog offers a diverse range of recipes to suit every taste.</p>
                    <p class="mb-4" style="text-align: justify;">At <span style="color: #906423;">HERITASTE</span> , we’re committed to making Myanmar's culinary heritage accessible to everyone. Our recipes are available in both Myanmar and English, ensuring that you can enjoy and understand each dish, no matter your language preference.</p>
                    <p class="mb-4" style="text-align: justify;">We believe in making our resources freely available to all users. You can browse and search through our extensive collection of recipes without any cost. However, if you wish to save your favorite recipes, you’ll need to sign in.</p>
                    <p class="mb-4" style="text-align: justify;">To enhance your browsing experience, our website features both dark and light modes, so you can choose the display that’s most comfortable for you. Dive into the world of Myanmar cuisine and discover new favorites today!</p>
                    <div class="row g-4 mb-4">
                        <div class="col-6">
                           <div class="d-flex align-items-center px-3">
                            <h1 class="flex-shrink-0 display-5 border-start border-5 px-2" style="color: #2b7067;">40</h1>
                            <div class="ps-4">
                                <p class="mb-2">Recipes of</p>
                                <h6 class="text-uppercase mb-0" style="color: #B88A44;">Meal</h6>
                            </div>
                         </div>
                        </div>

                        <div class="col-6">
                           <div class="d-flex align-items-center px-3">
                            <h1 class="flex-shrink-0 display-5 border-start border-5 px-2" style="color: #2b7067;">40</h1>
                            <div class="ps-4">
                                <p class="mb-2">Recipes of</p>
                                <h6 class="text-uppercase mb-0" style="color: #a86b11;">Desert</h6>
                            </div>
                         </div>
                        </div>

                    </div>
                </div>
            </div>
           
        </div>
    </section>
     <!-- about section end -->


    <!-- suggested section start -->
    <section class="suggested" id="suggested">
        <div class="container-lg py-4 min-vh-100">
            <!-- Section Title -->
            <div class="row text-center mb-5 mt-5">
                <div class="col">
                    <h1 class="fw-bold">Suggested Recipe</h1>
                </div>
            </div>

            <!-- Project Cards Row -->
            <div class="row" style="margin-top: 100px;">
                <!-- First Project Card -->
                <div class="col-md-4 col-sm-6 " style="margin-bottom: 100px;">
                    <div class="border-des position-relative p-4" >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle ">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
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

                <!-- Second Project Card -->
                <div class="col-md-4 col-sm-6" >
                    <div class="border-des position-relative p-4" >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
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

                 <!-- five Project Card -->
                 <div class="col-md-4 col-sm-6" >
                    <div class="border-des position-relative p-4 " >
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle ">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
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

                 <!-- six Project Card -->
                 <div class="col-md-4 col-sm-6" >
                    <div class="border-des position-relative p-4">
                        <a href="#" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle ">
                                <img src="../assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
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
        </div>
    </section>
    <!-- suggested section end -->

 <!-- Testimonials start -->
 <section class="testimonials" id="testimonials">
    <div class="container-lg py-4">
        <!-- testimonials title -->
        <div class=" row justify-content-center text-center mb-md-5 mb-lg-3 mb-3 mt-lg-5">
            <div>
                <h2 class="fw-bold">Testimonials</h2>
                <div class="col text-center  ">
                    <p class="mb-4" style="color: #B88A44;font-size: 20px;">What People say about <span style="font-size: 30px; color: #2b7067;">HERITASTE</span></p>
                </div>
            </div>
        </div>

        <div class="review-box mb-4" >
            <form class="ms-lg-4" >
                <div class="row mb-4 w-75 ms-4">
                    <div class="form-container col-6">
                        <textarea rows="1" class="form-control form-control-lg shadow-sm fs-6 border-1" style="border-color: #B88A44;" placeholder="Anything message you want to leave us"></textarea>
                    </div>
                    <div class="col-6 ">
                        <button type="submit" class="btn btn-custom" style="height: 45px;border-color: #2b7067;color: #B88A44;">Send Message</button>
                    </div>
                </div> 
            </form>
        </div>
       
        <!-- review  1 start -->
        <div class="slider m-auto ">
            <div class="slide-track flex scroll-left">
                <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon Ei phyu</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>
                <!-- 2 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 3 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 4 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

               <!-- 5 item -->
               <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                <div class=" d-flex mt-2">
                    <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                    <h5 style="color: #B88A44;">Yoon</h5>
                </div>
                <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
            </div>

                <!-- 6 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon Ei phyu</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>
                <!-- 2 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 3 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 4 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                <!-- 5 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                <!-- 6 item -->
                <div class="sliderounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

            </div>
        </div>

         <!-- review  2 start -->
         <div class="slider m-auto ">
            <div class="slide-track flex scroll-right">
                <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon Ei phyu</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>
                <!-- 2 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 3 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 4 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div>

               <!-- 5 item -->
               <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                <div class=" d-flex mt-2">
                    <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                    <h5 style="color: #B88A44;">Yoon</h5>
                </div>
                <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
            </div>

                <!-- 6 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon Ei phyu</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>
                <!-- 2 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 3 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                 <!-- 4 item -->
                 <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                <!-- 5 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

                <!-- 6 item -->
                <div class="sliderounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div>

            </div>
        </div>


    </div>
    </section>
 <!-- teatmonial section end -->

 <!-- contact section start -->
 <section class="contact" id="contact">
    <div class="container-lg py-4">

        <!-- contact tilte -->
        <div class=" row justify-content-center text-center mb-md-5 mb-lg-5 mb-3 mt-lg-5">
            <div class="col-8">
                <h1 class="fw-bold">Contact Us</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="d-flex align-items-center mb-2">
                        <img src="logo.png" alt="Logo" style="height: 30px; margin-right: 10px;">
                        <h2 style="font-size: 50px;color: #B88A44;">Heritaste</h2>
                </div>
                <div class="w-75">
                    <p style="text-align: justify;">We will always try to give you the best recipe about myanmar tradition food.</p>
                </div>
                <div class="social-links mb-3 mb-lg-5">
                    <a href="" class=" me-2"><i class="fa-brands fa-facebook linkicon"></i></a>

                    <a href="" class=" me-2"><i class="fa-brands fa-twitter linkicon"></i></a>

                    <a href="" class=" me-2"><i class="fa-brands fa-instagram linkicon"></i></a>
                </div>

                <div class="copyright mt-lg-4">
                    <p class="">Copyright &copy; Heritaste 2024 All Rights Reversed</p>
                </div>
            </div>
            
           

            <!-- info -->
             <div class="col-lg-6">
                <div class="row">
                    <div class="col-4">
                        <h5 class="text-uppercase" style="color: #2b7067;">community</h5>
                        <p>About</p>
                        <p>Features</p>
                        <p>FAQ</p>
                        <p>Catalog</p>
                        <p>Favorite</p>
                        <p>GitHub Repo</p>
                        <p>Our Team</p>
                    </div>

                    <div class="col-4">
                        <h5 class="text-uppercase" style="color: #2b7067;">Products</h5>
                        <p>Recipe</p>
                        <p>Terms of use </p>
                        <p>Privary Poilcy</p>
                        <p>Sign in</p>
                    </div>

                    <div class="col-4">
                        <h5 class="text-uppercase" style="color: #2b7067;">Contacts</h5>
                        <!-- email -->
                       <div class="d-flex">
                           <!-- icon -->
                           <div class="fs-4 " style="color: #e1c190;">
                            <i class="fa-solid fa-envelope mt-1" style="font-size: 1.3rem;"></i>
                           </div>
                           <!-- text -->
                           <div class="ms-2">
                               <p class="">heritaste24@gmail.com</p>
                           </div>
                       </div>
                       <!-- phone -->
                       <div class="d-flex">
                        <!-- icon -->
                        <div class="fs-2" style="color: #e1c190;">
                            <i class="fa-solid fa-phone phone"  style="font-size: 1.3rem;"></i>
                        </div>
                        <!-- text -->
                        <div class="ms-2">
                            <p class="">+95-995628364</p>
                        </div>
                    </div>
                    <!-- address -->
                    <div class="d-flex">
                        <!-- icon -->
                        <div class="fs-4"  style="color: #e1c190;">
                            <i class="fa-solid fa-location-dot "></i>
                        </div>
                        <!-- text -->
                        <div class="ms-3">
                            <p class="">UCSTGI,Myanmar</p>
                        </div>
                    </div>
                    
                </div>
             </div>
        </div>
 </section>

    <!-- Bootstrap JS link -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const icon = document.getElementById("icon");
        const body = document.body;
        icon.addEventListener("click", () => {
        body.classList.toggle("dark-theme");
        if (body.classList.contains("dark-theme")) {
        icon.src = "../assets/images/sun_3226456.png"; 
         } else {
        icon.src = "../assets/images/moon_4139162.png"; 
        }
        console.log('Dark mode:', document.body.classList.contains("dark-theme"));
    });

    document.getElementById('languageButton').addEventListener('click', function() {
            this.classList.toggle('active');
            // Add your language switching logic here
        });
    
       // the bookmark toggle
       document.addEventListener("DOMContentLoaded", function () {
            const bookmarkIcon = document.getElementById("bookmark-icon");

            // Add click event listener to the bookmark icon
            bookmarkIcon.addEventListener("click", function () {
                // Redirect to sign-in page
                window.location.href = "sign.php?redirect=" + encodeURIComponent(window.location.href);
            });
        });
    </script>
</body>
</html>
