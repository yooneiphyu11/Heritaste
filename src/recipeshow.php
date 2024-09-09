<?php 
require "database_connection.php";
$CRUD=new CRUD();
$read_catalog=$CRUD->readCatalog();
$eid=$_GET['eid'];
$type=$_GET['type'];
$lang='en';
$random=$CRUD->random_en();
if($type==='meal'){
$read=$CRUD->read_desEn_mealbyEid($eid);
}
else{
    $read=$CRUD->read_desEn_dessertbyEid($eid);

}
$read_desmydessertbyeid=$CRUD->read_desmy_dessertbyeid($eid);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipeshow</title>
 <!-- bootstrap css link -->
 <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
 <!-- css link -->
  <link rel="stylesheet" href="recipeshow.css">
 <!-- fontawesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            <form id="languageForm " class="me-5 mt-1" style="border-radius: 20px;" method="post" action="">
                <div class="button-switch-container">
                <select name="language" id="languageSelect" class="language" aria-label="Select language" title="Select language between English and Myanmar" 
                    style="border: 1px solid #ced4da; border-radius: 20px; padding: 5px 10px; font-size: 16px; margin-right: 10px;" onchange="this.form.submit();">
                    <option value="en" <?php if (isset($_POST['language']) && $_POST['language'] === 'en') echo 'selected'; ?> selected>EN</option>  
                <option value="my" <?php if (isset($_POST['language']) && $_POST['language'] === 'my') echo 'selected'; ?>>MY</option>  
           </select>
            <input type="hidden" name="languageChange" value="1">
                </div>
            </form>
            <?php 
               if (isset($_POST['languageChange'])) {  
                    $read=[];
                    // $type=$_POST['type'];
                    // $cid=$_POST['cid'];
                    // $lang = isset($_POST['language']) ? $_POST['language'] : 'en';
                    if (isset($_POST['language'])) {  
                        $lang = $_POST['language'];  
                    } else {  
                        $lang = 'en'; // Default to 'en' if not set  
                    } 
                    $lang = htmlspecialchars(trim($lang), ENT_QUOTES, 'UTF-8');
                    // echo "Selected Language: |" . $lang . "| <br>";
                    if($lang==='en'){
                        // $read=$CRUD->read_desen();
                        $random=$CRUD->random_en();
                        if($type==='meal'){
                        $read=$CRUD->read_desEn_mealbyEid($eid);
                            
                        }
                        elseif($type==='dessert'){
                            $read=$CRUD->read_desEn_dessertbyEid($eid);
                        }
                    }
                    elseif($lang==='my'){
                        $random=$CRUD->random_my();
                         if($type ==='meal'){
                            $read=$CRUD->read_desmy_mealbyeid($eid);

                         }
                         elseif($type==='dessert'){
                            $read=$CRUD->read_desmy_dessertbyeid($eid);
                         }
                    }
                    else{
                        echo "No Language Supprot.";
                    }
                }
            ?>

                <a class="nav-link me-5" href="#">
                    <img src="assets/images/moon_4139162.png" alt=""  style="width: 30px; height: 30px;" id="icon">
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
                        <?php foreach($read_catalog as $c):  ?>
                             <li><a class="dropdown-item" href="recipe.php?type=meal&cid=<?php echo $c->Cid; ?>"><?php echo htmlspecialchars($c->cname); ?></a></li>
                            <!--<li><a class="dropdown-item" href="recipe.php">Chicken</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Fish</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Pork</a></li>
                            <li><a class="dropdown-item" href="recipe.php">Beef</a></li> -->
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="recipe.html" role="button" aria-expanded="false">Dessert</a>
                        <ul class="dropdown-menu">
                        <?php foreach($read_catalog as $c):  ?>
                            <li><a class="dropdown-item"  href="recipe.php?type=dessert&cid=<?php echo $c->Cid; ?>"><?php echo htmlspecialchars($c->cname); ?></a></li>
                            <!-- <li><a class="dropdown-item"  href="recipe.php">Chicken</a></li>
                            <li><a class="dropdown-item"  href="recipe.php">Fish</a></li> -->
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
    <section class="show" id="show">
        <div class="container-lg py-4 min-vh-100 ">
            <!-- Section Title -->
            <div class="row  mb-5 " style="margin-top: 100px;">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3 text-center" style="font-size: 30px; color: #2b7067;"><?php echo $read['name'] ?></h2>
                    <p style="text-align: justify;">Discover the best vegan Vietnamese recipes that will tantalize your taste buds and leave you craving for more. From fresh spring rolls to spicy pho, we've got you covered!</p>
                    <hr>
                    <p class=" mb-3 fw-bold" style="font-size: 20px;color:#B88A44;">Ingredients</p>
                    <ol>
                        <!-- <li>4 boneless, skinless chicken breasts</li>
                        <li>1 teaspoon salt</li>
                        <li>1/2 teaspoon black pepper</li>
                        <li>1 teaspoon paprika</li>
                        <li>1 tablespoon olive oil</li>
                        <li>3 tablespoons unsalted butter</li>
                        <li>4 cloves garlic, minced</li>
                        <li>1 teaspoon fresh thyme (or 1/2 teaspoon dried thyme)</li>
                        <li>1 teaspoon fresh rosemary (or 1/2 teaspoon dried rosemary)</li>
                        <li>1/2 cup chicken broth</li>
                        <li>1 tablespoon fresh parsley, chopped (optional for garnish)</li> -->
                        <?php echo $read['ingredient'] ?>
                    </ol>
                </div>

                <div class="col-lg-6 text-center ">
                    <img src="data:image/png;base64,<?php echo base64_encode($read['photo']) ?>" alt="">
                </div>
                <div class="col mt-4">
                    <div class="d-flex align-items-center me-4 ">
                        <p class=" mb-3 fw-bold" style="font-size: 20px;color:#B88A44;">Instructions</p>
                    </div>
                    <p style="text-align: justify;"><?php echo $read['instructions'] ?> </p>
                        <!-- Vietnamese cuisine is known for its vibrant flavors and fresh ingredients. It's no wonder that it has become a popular choice for foodies all around the world. However, for vegans, finding authentic Vietnamese recipes can be a challenge. But fear not, we have compiled 
                        a list of the best vegan Vietnamese recipes that will satisfy your cravings and leave you wanting more.
                        Fresh Spring Rolls
                        Fresh spring rolls are a popular appetizer in Vietnamese cuisine. They are light, refreshing, 
                        and packed with flavor. To make vegan spring rolls, use rice paper wrappers, and fill them with fresh vegetables like carrots,
                        cucumber, and lettuce. You can also add tofu or tempeh for some extra protein. Serve with a peanut dipping sauce for a delicious and healthy snack.
                        Vegan Pho
                        Pho is a traditional Vietnamese soup that is typically made with beef or chicken broth. However, you can easily make a vegan version by using vegetable broth 
                        and adding tofu or mushrooms for some extra flavor. Add some rice noodles, bean sprouts, and fresh herbs like basil and cilantro for a hearty and satisfying meal.
                        Banh Mi Sandwich
                        Banh Mi is a Vietnamese sandwich that is typically made with meat and pickled vegetables. However, you can easily make a vegan version by using tofu or tempeh as the protein source. 
                        Fill the sandwich with fresh vegetables like cucumber, carrots, and jalapenos, and top it off with a vegan mayo or aioli for a delicious and filling meal.
                        Vegan Bun Cha
                        Bun Cha is a popular Vietnamese dish that consists of grilled pork, vermicelli noodles, and fresh herbs. To make a vegan version, use marinated tofu or tempeh instead of pork. Serve with a side of pickled 
                        vegetables and a sweet and savory dipping sauce for a flavorful and satisfying meal.
                        Vegan Caramelized Tofu
                        Caramelized tofu is a popular Vietnamese dish that is sweet, savory, and packed with flavor. To make a vegan version, marinate tofu in a
                        mixture of soy sauce, sugar, and garlic, and then pan-fry until crispy. Serve with steamed rice and fresh vegetables for a delicious and healthy meal.</p> -->
                </div>
                </div>
                <hr>
                <div class="d-flex align-items-center me-4 mb-3 justify-content-center">
                        <h6 class="mt-3 me-2">Read more about  </h6>
                        <span style="font-size: 22px;color: #2b7067;">  Recipes</span>
                </div>
                <div class="row" style="margin-top: 120px;position: relative;">
                    <!-- First Project Card -->
                    <?php if (isset($random) && !empty($random)): 
              foreach($random as $e): ?>
                    <div class="col-md-4 col-sm-6 " style="margin-bottom: 100px;">
                        <div class="border-des position-relative p-4" >
                            <a href="recipeshow.php?eid=<?php echo $e->EN_id;?>&type=<?php echo $type?>" style="text-decoration: none;" class="recipe-text">
                                <div class="position-absolute top-0 start-50 translate-middle ">
                                    <img src="data:image/png;base64,<?php echo base64_encode($e->photo) ?>" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
                                </div>
                                <div class="text-center mt-5 pt-3">
                                    <h3 style="color: #B88A44;"><?php  echo htmlspecialchars($e->name)?></h3>
                                    <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                                </div>
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
                                        <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i>
                                    </div>                                
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>  
              <?php else: ?>  
                  <p>No recipes available for the selected language.</p>  
              <?php endif; ?>
                    <!-- Second Project Card -->
                    <div class="col-md-4 col-sm-6" >
                        <div class="border-des position-relative p-4" >
                            <a href="recipeshow.php" style="text-decoration: none;" class="recipe-text">
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
                            <a href="recipeshow.php" style="text-decoration: none;" class="recipe-text">
                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <img src="../src/assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid" style="width: 200px; height: 200px;">
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

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="container-lg py-4">
            <hr>
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