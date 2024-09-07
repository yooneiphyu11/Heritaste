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


    <section class="FAQ" id="FAQ">
        <div class="container-lg py-4 mb-5">
            <!-- Section Title -->
            <div class="row mb-5 mt-5">
                <div class="col">
                    <h2 class="fw-bold" style="color: #2b7067;">FAQ</h2>
                    <p>Frequently Asked Questions</p>
                </div>
            </div>

            <!-- First FAQ Item -->
         <div class="row justify-content-center mx-auto" style="max-width: 600px;">
            <div class="col-12 d-flex align-items-center justify-content-between mb-2">
                <h6 style="color: #357f76; font-size: 18px;">Can I access recipes without creating an account?</h6>
                <i class="fa-solid fa-plus toggle-icon border rounded text-center d-flex align-items-center justify-content-center" style="width: 25px;height:25px;" 
                   data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1"></i>
            </div>
            <div id="answer1" class="collapse col-12">
                <p style="text-align: justify;">Yes, all our recipes are freely accessible without an account. However, signing in allows you to save your favorite recipes for quick access.</p>
            </div>
            <hr>
         </div>

        <!-- Second FAQ Item -->
        <div class="row justify-content-center mx-auto" style="max-width: 600px;">
            <div class="col-12 d-flex align-items-center justify-content-between mb-2">
                <h6  style="color: #357f76; font-size: 18px;">How do I switch between dark and light modes?</h6>
                <i class="fa-solid fa-plus toggle-icon border rounded text-center d-flex align-items-center justify-content-center" style="width: 25px;height:25px;" 
                   data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2"></i>
            </div>
            <div id="answer2" class="collapse col-12">
                <p style="text-align: justify;">You can easily switch between dark and light modes from the settings icon at the top of the page. Your preference will be saved for future visits.</p>
            </div>
            <hr>
        </div>

        <!-- Third FAQ Item -->
        <div class="row justify-content-center mx-auto" style="max-width: 600px;">
            <div class="col-12 d-flex align-items-center justify-content-between mb-2">
                <h6  style="color: #357f76; font-size: 18px;"> Are the recipes available in both Myanmar and English?</h6>
                <i class="fa-solid fa-plus toggle-icon border rounded text-center d-flex align-items-center justify-content-center" style="width: 25px;height:25px;" 
                   data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3"></i>
            </div>
            <div id="answer3" class="collapse col-12">
                <p style="text-align: justify;">Yes, our recipes are available in both Myanmar and English. You can toggle between languages using the language switcher at the top of the page.</p>
            </div>
            <hr>
        </div>

        <!-- Fourth FAQ Item -->
        <div class="row justify-content-center mx-auto" style="max-width: 600px;">
            <div class="col-12 d-flex align-items-center justify-content-between mb-2">
                <h6 style="color: #357f76; font-size: 18px;">Can I submit my own traditional Myanmar recipes?</h6>
                <i class="fa-solid fa-plus toggle-icon border rounded text-center d-flex align-items-center justify-content-center" style="width: 25px;height:25px;" 
                   data-bs-toggle="collapse" data-bs-target="#answer4" aria-expanded="false" aria-controls="answer4"></i>
            </div>
            <div id="answer4" class="collapse col-12">
                <p style="text-align: justify;">Currently, we do not support user submissions, but we’re always looking to expand our catalog with authentic recipes. Stay tuned for future updates!</p>
            </div>
            <hr>
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