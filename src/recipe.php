<?php
require "database_connection.php";
$CRUD=new CRUD();
$read_catalog=$CRUD->readCatalog();

$uid=$_GET['uid'];
$type=$_GET['type'];
$cid=$_GET['cid'];

$lang='en';
if($type==='meal'){
    $read=$CRUD->read_desen_mealbyCid($cid);
}
else{
    $read=$CRUD->read_desen_dessertbyCid($cid);
}
// echo $type,$cid;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooking Recipe</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- css link -->
     <link rel="stylesheet" href="recipe.css">
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
            <form id="languageForm " class="me-5 mt-1" style="border-radius: 20px;" method="post" action=" ">
                <!-- <input type="hidden" value="$type" name="type">
                <input type="hidden" value="$cid" name="cid"> -->
                <div class="button-switch-container">
                <select name="language" id="languageSelect" class="language" aria-label="Select language" title="Select language between English and Myanmar" 
                    style="border: 1px solid #ced4da; border-radius: 20px; padding: 5px 10px; font-size: 16px; margin-right: 10px;" onchange="this.form.submit();">
                    <!-- <input type="hidden" name="uid" value="<?php $uid; ?>"> -->
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
                       
                        if($type==='meal'){
                            $read=$CRUD->read_desen_mealbyCid($cid);
                            $type="meal";
                        }
                        elseif($type==='dessert'){
                            $read=$CRUD->read_desen_dessertbyCid($cid);
                            $type="dessert"; 
                        }
                    }
                    elseif($lang==='my'){
                         if($type ==='meal'){
                        $read=$CRUD->read_desMy_mealbyCid($cid);$type="meal";
                         }
                         elseif($type==='dessert'){
                            $read=$CRUD->read_desMy_dessertbyCid($cid);$type="dessert";
                         }
                    }
                    else{
                        echo "No Language Supprot.";
                    }
                }
            ?>
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
                        <?php foreach($read_catalog as $c):  ?>
                            <li><a class="dropdown-item" href="recipe.php?type=meal&cid=<?php echo $c->Cid; ?>&uid=<?php echo $uid; ?>"><?php echo htmlspecialchars($c->cname); ?></a></li>
                            <!-- <li><a class="dropdown-item" href="recipe.php">Chicken</a></li>
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

    <section class="recipe" id="recipe">
        <div class="container-lg py-4 min-vh-100">

             <!-- Section Title -->
             <div class="row text-center mb-5 mt-5">
                <div class="col">
                    <h1 class="fw-bold" style="color: #2b7067;">Meal or Dessert</h1>
                </div>
            </div>
           
            <!-- Project Cards Row -->
            <div class="row" style="margin-top: 120px;position: relative;">
                <!-- First Project Card -->
                <?php if (isset($read) && !empty($read)): 
              foreach($read as $e): ?>
                <div class="col-md-4 col-sm-6 " style="margin-bottom: 100px;">
                    <div class="border-des position-relative p-4" >
                        <a href="recipeshow.php?eid=<?php echo $e->EN_id;?>&type=<?php echo $type?>&uid=<?php echo $uid; ?>" style="text-decoration: none;" class="recipe-text">
                            <div class="position-absolute top-0 start-50 translate-middle ">
                            <img src="data:image/png;base64,<?php echo base64_encode($e->photo) ?>" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;">
                            <!-- <img src="../src/assets/chicken-removebg-preview.png" alt="profile image" class="img-fluid " style="width: 200px; height: 200px;"> -->
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <h3 style="color: #B88A44;"><?php  echo htmlspecialchars($e->name)  ?></h3>
                                <p style="text-align: justify;">Let's try the best of Myanmar chicken curry. I hope you will enjoy. Let's try the best of Myanmar chicken curry. I hope you will enjoy.</p>
                            </div>
                            </a>
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
                                <input type="hidden" name="uid" value="<?php echo htmlspecialchars($uid); ?>">  
    <?php if ($e->Mid): ?>  
        <input type="hidden" name="mid" value="<?php echo htmlspecialchars($e->Mid); ?>">  
    <?php else: ?>  
        <input type="hidden" name="did" value="<?php echo htmlspecialchars($e->Did); ?>">  
    <?php endif; ?>  
    <button type="submit" name="favourite">   
        <i class="fa-regular fa-bookmark fa-2x mt-2 bookmark" id="bookmark-icon"></i>  
    </button>  </form>
                                    <?php 
            
           if (isset($_POST['favourite'])) {  
               $uid = $_POST['uid'];  
               $mid = isset($_POST['mid']) ? $_POST['mid'] : null; // Use null if mid is not set  
               $did = isset($_POST['did']) ? $_POST['did'] : '0'; // Default '0' if did is not set  
           
               if ($uid === '0') {  
                   echo "<script>  
                           alert('Please Create Account!');  
                           window.location.href = 'index.php'; // Fixed missing quotes  
                         </script>";  
               } else {  
                   if ($did === '0') {  
                       $review = $CRUD->insert_favouritemid($uid, $mid);  
                       echo "<script>  
                               alert('Favourite added successfully.');  
                               window.location.href = 'index.php'; // Fixed missing quotes  
                             </script>";  
                   } else {  
                       $review = $CRUD->insert_favouritedid($uid, $did);  
                       echo "<script>  
                               alert('Favourite added successfully.');  
                               window.location.href = 'index.php'; // Fixed missing quotes  
                             </script>";  
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
                </div> -->
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

document.getElementById('languageButton').addEventListener('click', function() {
        this.classList.toggle('active');
        // Add your language switching logic here
    });
</script>
</body>
</html>