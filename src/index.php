<?php
require "database_connection.php";
$CRUD=new CRUD();
$read_catalog=$CRUD->readCatalog();

$meal_count=$CRUD->count_meal();
$dessert_count=$CRUD->count_dessert();
// $read_userwithemail=$CRUD->read_userwithemail($email);
$read_user=$CRUD->read_user();
$lang='en';
$random=$CRUD->random_en();

$user=$CRUD->read_user();
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
}
else{
    $uid=0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="index.css">
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
            <form  action="" method="post"  id="languageForm" class="me-5 mt-1" style="border-radius: 20px;">
            <div class="button-switch-container" style="display: flex; align-items: center; justify-content: center;">
                    <select name="language" id="languageSelect" class="language" aria-label="Select language" title="Select language between English and Myanmar" 
                    style="border: 2px solid #2b7067; border-radius: 15px; padding: 5px 10px; font-size: 16px; margin-right: 10px;" onchange="this.form.submit();">
                    <option value="en" <?php if (isset($_POST['language']) && $_POST['language'] === 'en') echo 'selected'; ?> selected>EN</option>  
                <option value="my" <?php if (isset($_POST['language']) && $_POST['language'] === 'my') echo 'selected'; ?>>MY</option>  
           </select>
            <input type="hidden" name="languageChange" value="1">
                <!-- !-- <button type="submit" id="submitBtn" style="display: none;" name="languageChange"></button> --> 
            </div>
            </form>
            <?php 
               if (isset($_POST['languageChange'])) {  
                    $random=[];
                    // $lang = isset($_POST['language']) ? $_POST['language'] : 'en';
                    if (isset($_POST['language'])) {  
                        $lang = $_POST['language'];  
                    } else {  
                        $lang = 'en'; // Default to 'en' if not set  
                    } 
                    $lang = htmlspecialchars(trim($lang), ENT_QUOTES, 'UTF-8');
                    // echo "Selected Language: |" . $lang . "| <br>";
                    if($lang==='en'){
                        $random=$CRUD->random_en();
                       
                    }
                    elseif($lang==='my'){
                        $random=$CRUD->random_my();
                        
                    }
                    else{
                        echo "No Language Supprot.";
                    }
                }
            ?>

                <a class="nav-link me-5" href="#">
                    <img src="../src/assets/images/moon_4139162.png" alt=""  style="width: 30px; height: 30px;" id="icon">
                </a>
                <a class="nav-link " href="sign.php?uid=<?php echo $uid;?>">Sign In</a>
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
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="recipe.php" role="button" aria-expanded="false">Meal</a>
                        <ul class="dropdown-menu">
                            <?php foreach($read_catalog as $c):  ?>
                            <li><a class="dropdown-item" href="recipe.php?type=meal&cid=<?php echo $c->Cid; ?>&uid=<?php echo $uid; ?>"><?php echo htmlspecialchars($c->cname); ?></a></li>
                             <!-- <li><a class="dropdown-item" href="recipe.php">Fish</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Pork</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Beef</a></li>  -->
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="recipe.html" role="button" aria-expanded="false">Dessert</a>
                        <ul class="dropdown-menu">
                        <?php foreach($read_catalog as $c):  ?>
                            <li><a class="dropdown-item"  href="recipe.php?type=dessert&cid=<?php echo $c->Cid; ?>&uid=<?php echo $uid; ?>"><?php echo htmlspecialchars($c->cname); ?></a></li>
                             <!-- <li><a class="dropdown-item"  href="recipe.php">Fish</a></li> -->
                            <?php endforeach; ?>
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
                    <img src="assets/layer3-removebg-preview.png" alt=""
                    style="position:absolute;width: 550px;z-index: 1; margin-left: 6%;">
                    <img src="assets/food-removebg-preview.png" alt="food-image" class="food-image position-relative"
                     style="width: 320px; height: 320px;margin-left: 30%;z-index: 2;margin-top: 17%;">
                </div>
                <!-- protfolio text -->
                <div class="col-md-6 mt-5 mt-md-0 order-md-first position-relative  " style="z-index: 3;">
                    <p class=" mb-1">Let's Meet</p>
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
                    <a href="sign.php" class="btn px-3 mt-3 btn-custom" style="border-color: #2b7067;color: #B88A44;">Explore Recipes</a>
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
                            <img class="img-fluid rounded w-100 zoomIn" src="assets/food1.jpg" alt="">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 zoomIn" src="assets/food3.jpg" style="margin-top: 16%;" alt="">
                        </div>
                        <div class="col-6 text-end mt-0">
                            <img class="img-fluid rounded w-75 zoomIn" src="assets/food4.jpg" style="margin-top: 26%;" alt="">
                        </div>
                        <div class="col-6 text-end mt-0">
                            <img class="img-fluid rounded w-100 zoomIn" src="assets/food2.jpg" style="margin-top: 10%;" alt="">
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
                            <h1 class="flex-shrink-0 display-5 border-start border-5 px-2" style="color: #2b7067;"><?php echo htmlspecialchars($meal_count) ?></h1>
                            <div class="ps-4">
                                <p class="mb-2">Recipes of</p>
                                <h6 class="text-uppercase mb-0" style="color: #B88A44;">Meal</h6>
                            </div>
                         </div>
                        </div>

                        <div class="col-6">
                           <div class="d-flex align-items-center px-3">
                            <h1 class="flex-shrink-0 display-5 border-start border-5 px-2" style="color: #2b7067;"><?php echo htmlspecialchars($dessert_count) ?></h1>
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
            <?php if (isset($random) && !empty($random)): 
              foreach($random as $e): ?>

            <!-- First Project Card -->
                <div class="col-md-4 col-sm-6 " style="margin-bottom: 100px;">
                    <div class="border-des position-relative p-4" >
                        <a href="recipeshow.php?eid=<?php echo $e->EN_id;?>&type=meal&uid=<?php echo $uid; ?>" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle ">
                                 <img src="data:image/png;base64,<?php echo base64_encode($e->photo) ?>" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <h3 style="color: #B88A44;"><?php  echo htmlspecialchars($e->name)  ?></h3>
                                <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                            </div> </a>
                            <div class="mt-5 d-flex justify-content-around px-3" >
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2" >
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Prepare</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;"><?php echo $e->pre_time ?>min</span>
                                </div>
                                
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center me-2">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <p class="fs-6 m-0">Cooking</p>
                                    </div>
                                    <span class="fs-6" style="color: #2b7067;"><?php echo $e->cook_time ?>min</span>
                                </div>
                                
                                <div class="text-center"> 
                                    <form action="" method="post">
                                        <input type="hidden" name="uid" value="<?php echo $uid; ?>">
                                    <button type="submit" name="favourite"> <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i></button> 
                                    </form>
                                    <?php 
            if(isset($_POST['favourite'])){
                $uid=$_POST['uid'];
                $mid= $e->Mid;
                $did='0';
                     if($uid === '0'){
                        echo "<script>alert('Please Create Account!');</script>";
                     }
                else{
                        if($did==='0'){
                            $review=$CRUD->insert_favouritemid($uid,$mid);
                            echo "<script>alert('Favourite add successfully.');
                             window.location.href = 'index.php;</script>";
                        }
                        else{
                            $review=$CRUD->insert_favouritedid($uid,$did);
                            echo "<script>alert('Favourite add successfully.')</script>";
                        }

                    }

                }

            
            ?>
                                </div>                                
                            </div>
                       
                     </div>
            </div>
            <?php endforeach; ?>  
              <?php else: ?>  
                  <p>No recipes available for the selected language.</p>  
              <?php endif; ?> 


                <!-- Second Project Card -->
                 <!-- <div class="col-md-4 col-sm-6" >
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
                </div>  -->

                <!-- Third Project Card -->
                <!-- <div class="col-md-4 col-sm-6" style="margin-bottom: 100px;">
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
                </div> -->

                   <!-- fourth Project Card -->
                   <!-- <div class="col-md-4 col-sm-6" >
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
                </div> -->

                 <!-- five Project Card -->
                 <!-- <div class="col-md-4 col-sm-6" >
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
                </div> -->

                 <!-- six Project Card -->
                 <!-- <div class="col-md-4 col-sm-6" >
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
                </div> -->

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
            <form class="ms-lg-4" method="post" action=""> 
                <div class="row mb-4 w-75 ms-4">
                    <div class="form-container col-6">
                        <input type="hidden" name="uid" value="<?php echo $uid; ?>">
                        <textarea name="message" rows="1" class="form-control form-control-lg shadow-sm fs-6 border-1" style="border-color: #B88A44;" placeholder="Anything message you want to leave us"></textarea>
                    </div>
                    <div class="col-6 ">
                        <button name="sendmessage" type="submit" class="btn btn-custom" style="height: 45px;border-color: #2b7067;color: #B88A44;">Send Message</button>
                    </div>
                </div> 
            </form>
            <?php 
            if(isset($_POST['sendmessage'])){
                $uid=$_POST['uid'];
                $message=$_POST['message'];
                if($uid === '0'){
                    echo "<script>alert('Please Create Account!')</script>";
                }
                else{
                    $review=$CRUD->insert_review($uid,$message);
                    echo "<script>alert('Message sent Successfully.')</script>";
                }

            }
            ?>
        </div>
       
        <!-- review  1 start -->
        <div class="slider m-auto ">
            <div class="slide-track flex scroll-left">
                <?php 
                $review=$CRUD->read_review();
                foreach($review as $v): ?>
                <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;"><?php echo $v['name'] ?></h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just"><?php echo $v['review'] ?>.</p>
                </div>
                <?php endforeach;?>
                <!-- 2 item -->
                <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div> -->

                 <!-- 3 item -->
                 <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div> -->

                 <!-- 4 item -->
                 <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just">I've so impressed all my friends with new dishs.</p>
                </div> -->

               <!-- 5 item -->
               <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                <div class=" d-flex mt-2">
                    <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                    <h5 style="color: #B88A44;">Yoon</h5>
                </div>
                <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
            </div> -->

                <!-- 6 item -->
                <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

                 <!-- 1 item -->
              
                 <?php 
                $review=$CRUD->read_review();
                foreach($review as $v): ?>
                <!-- 1 item -->
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;"><?php echo $v['name'] ?></h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just"><?php echo $v['review'] ?>.</p>
                </div>
                <?php endforeach;?>
                
                <!-- 2 item -->
                <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

                 <!-- 3 item -->
                 <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

                 <!-- 4 item -->
                 <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="slide mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

                <!-- 5 item -->
                <!-- <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

                <!-- 6 item -->
                <!-- <div class="sliderounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../src/assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;">Yoon</h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just ">I've so impressed all my friends with new dishs.</p>
                </div> -->

            </div>
        </div>

         <!-- review  2 start -->
         <div class="slider m-auto ">
            <div class="slide-track flex scroll-right">
                <!-- 1 item -->
                   <!-- 1 item -->
                   <?php 
                $review=$CRUD->read_review();
                foreach($review as $v): ?>
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;"><?php echo $v['name'] ?></h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just"><?php echo $v['review'] ?></p>
                </div>
                <?php endforeach;?>
                <!-- 2 item -->
                <?php 
                $review=$CRUD->read_review();
                foreach($review as $v): ?>
                <div class="slide rounded shadow-sm" style="height: 100px;width: 250px;border:2px solid #419489;">
                    <div class=" d-flex mt-2">
                        <img src="../assets/images/client_1541511.png" alt=""  class="rounded-circle img-thumbnail me-3 ms-2" style="width: 35px; height: 35px;">
                        <h5 style="color: #B88A44;"><?php echo $v['name'] ?></h5>
                    </div>
                    <p class="mb-2 mx-2 p-0 text-just"><?php echo $v['review'] ?></p>
                </div>
                <?php endforeach;?>

                 

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
        icon.src = "../src/assets/images/sun_3226456.png"; 
         } else {
        icon.src = "../src/assets/images/moon_4139162.png"; 
        }
        console.log('Dark mode:', document.body.classList.contains("dark-theme"));
    });
    </script>
</body>
</html>