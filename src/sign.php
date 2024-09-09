<?php 
require "database_connection.php";
$CRUD=new CRUD();

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
     <link rel="stylesheet" href="sign.css">
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

    <!-- sign in start -->
        <section class="sign-in/up d-flex justify-content-center align-items-center min-vh-100 p-0 " id="signin">
           
            <div class="container-lg mt-0 ">
                <div class="row ">
                    <div class="col-md-6 offset-md-3 d-flex justify-content-center"> 
                        <div class="card">
                            <div class="card-body border border-0 ">
                                <!-- image  -->
                                <div class="text-center ">
                                    <img src="../src/assets/images/diet_561611.png" alt=""  style="width: 180px; height: 180px;">
                                <div>
                                
                                <!-- form start -->
                                    
                                    <div class="d-flex justify-content-center align-items-center">
                                    <div class="contact-form w-75 ">
                                      
                                    <!-- sign in start -->
                                    <form action="" method="post" class="sign-in row form-container active" id="sign-in" > 
                                        <div class="col">  
                                            <h3 class="fs-4 mt-3 font-georgia">Sign in</h3>
                                        </div> 

                                        <div class="col position-relative py-4"> 
                                            <span class="position-absolute top-50 start-0 translate-middle-y ps-3">                                            
                                                <img src="../src/assets/images/email_6900561.png" alt="Icon" style="width: 30px;height: 30px;">
                                            </span>
                                            <input type="text" class="form-control form-control-lg shadow-sm fs-6 border font-georgia ps-5"  placeholder="Email" required name="email"> 
                                        </div>
                                        
                                        <div class="col position-relative "> 
                                            <span class="position-absolute top-50 start-0 translate-middle-y ps-3">                                            
                                                <img src="../src/assets/images/password_4403224.png" alt="Icon" style="width: 30px;height: 30px;">
                                            </span>
                                            <input type="password" class="form-control form-control-lg shadow-sm fs-6 border font-georgia ps-5"  placeholder="Password" required minlength="8" name="pwd"> 
                                        </div>

                                        <div class="col py-4 d-flex font-georgia">
                                            <div class="form-check">
                                                <input class="form-check-input shadow-sm border-2 " type="checkbox" id="CheckSignIn" required>
                                                <label class="form-check-label " for="CheckSignIn">
                                                  Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-8 mx-auto pb-3 text-center ">
                                            <button type="submit" class="btn 
                                            border border-1 border-secondary btn-custom
                                            shadow-sm font-georgia  w-75" name="singin">Sign in</button>
                                        </div>

                                        <div class="col text-center pb-2">
                                            <img src="../src/assets/images/arrows_545213.png" alt="Icon" id="toggleIconSignIn" style="width: 40px;height: 30px;">
                                        </div>

                                        <div class="col">
                                            <h6 class="tt font-georgia text">Don't have an account?</h6>
                                        </div>
                                    </form>
                                    <?php if(isset($_POST['singin'])){
                                        $email=$_POST['email'];
                                        $pwd=$_POST['pwd'];
                                        $read_user=$CRUD->read_userwithemail($email);
                                        if($read_user){
                                            if($pwd === $read_user['password']){
                                                echo "<script>alert('Login Successfully.');
                                                 window.location.href = 'index.php'; 
                                                </script>";  
                                            }
                                            else{
                                                echo "<script>alert('Invalid Login!Please check Password');
                                                 window.location.href = 'sign.php'; 
                                                </script>";  
                                            }
                                        }
                                        else{
                                            echo "<script>alert('No user found with the email.Please Singup!');
                                             window.location.href = 'sign.php'; 
                                            </script>";  
                                        }
                                        
                                    } ?>
                                    <!-- sign in start -->
                                    
                                    <!-- sign up start -->
                                        <form action="" method="post" class="sign-up row form-container " id="sign-up">
                                            <div class="col">  
                                                <h3 class="fs-4 mt-3 font-georgia mb-2">Sign up</h3>
                                            </div> 

                                            <div class="col position-relative pt-1"> 
                                                <span class="position-absolute top-50 start-0 translate-middle-y ps-3">                                            
                                                    <img src="../src/assets/images/student_2995698.png" alt="Icon" style="width: 30px;height: 30px;">
                                                </span>
                                                <input type="text" class="form-control form-control-lg shadow-sm fs-6 border font-georgia ps-5"  placeholder="Your Name"required name="name"> 
                                            </div>

                                            <div class="col position-relative py-4"> 
                                                <span class="position-absolute top-50 start-0 translate-middle-y ps-3">                                            
                                                    <img src="../src/assets/images/email_6900561.png" alt="Icon" style="width: 30px;height: 30px;">
                                                </span>
                                                <input type="text" class="form-control form-control-lg shadow-sm fs-6 border font-georgia ps-5"  placeholder="Email" required name="email"> 
                                            </div>
                                            
                                            <div class="col position-relative "> 
                                                <span class="position-absolute top-50 start-0 translate-middle-y ps-3">                                            
                                                    <img src="../src/assets/images/password_4403224.png" alt="Icon" style="width: 30px;height: 30px;">
                                                </span>
                                                <input type="password" class="form-control form-control-lg shadow-sm fs-6 border font-georgia ps-5"  placeholder="Password" required minlength="8" name="pwd"> 
                                            </div>

                                            <div class="col py-4 d-flex font-georgia">
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-sm border-2 " type="checkbox" id="CheckSignUp " required>
                                                    <label class="form-check-label " for="CheckSignUp">
                                                      Remember me
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col py-4">
                                            <input type="submit" class="btn border border-1 border-secondary btn-custom shadow-sm font-georgia w-75" 
                                            name="signup" value="Sign Up">
                                            </div>
                                        
                                            <div class="col text-center pb-2">
                                                <img src="../src/assets/images/arrows_545213.png" alt="Icon" id="toggleIconSignUp" style="width: 40px;height: 30px;">
                                            </div>

                                            <div class="col">
                                                <h6 class="tt font-georgia text">Already have an account?</h6>
                                            </div>
                                        </form>
                                        <?php 
                                            if(isset($_POST['signup'])){
                                                $name=$_POST['name'];
                                                $email=$_POST['email'];
                                                $pwd=$_POST['pwd'];
                                                
                                                $existingUser = $CRUD->read_userwithemail($email);  
                                                if ($email === $existingUser['email']) {  
                                                    echo "<script>
                                                            alert('Email already exists. Please choose another.');
                                                            window.location.href = 'index.php'; 
                                                          </script>"; 
                                                } else {  
                                                    $CRUD->insert_user($name, $email, $pwd);  
                                                    echo "<script>alert('Sigup Successfully.');
                                                    window.location.href = 'index.php'; 
                                                   </script>"; 
                                                }  
                                            }
                                        ?>
                                    <!-- sign up end -->
                                    </div>
                                </div>
                                <!-- form end -->

                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    <!-- sign in end -->
    
<!-- Bootstrap JS link -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const icon = document.getElementById("icon");
    const body = document.body;
    const signInForm = document.getElementById("sign-in");
    const signUpForm = document.getElementById("sign-up");
    const toggleIconSignIn = document.getElementById("toggleIconSignIn");
    const toggleIconSignUp = document.getElementById("toggleIconSignUp");

    // Toggle dark mode
    icon.addEventListener("click", () => {
        body.classList.toggle("dark-theme");
        if (body.classList.contains("dark-theme")) {
        icon.src = "../src/assets/images/sun_3226456.png"; 
         } else {
        icon.src = "../src/assets/images/moon_4139162.png"; 
        }
        console.log('Dark mode:', document.body.classList.contains("dark-theme"));
    });

    // Toggle between sign in and sign up forms
    toggleIconSignIn.addEventListener("click", () => {
        signInForm.classList.remove("active");
        signUpForm.classList.add("active");
    });

    toggleIconSignUp.addEventListener("click", () => {
        signUpForm.classList.remove("active");
        signInForm.classList.add("active");
    });
</script>
</body>
</html>