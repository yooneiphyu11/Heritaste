<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/update.css">
     <!-- Material Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body>
<div class="container">
    <!-- Sidebar Section -->
    <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h1 style="color:#B88A44;font-size:25px;">Heritaste</h1>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="admin.php">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="user.php"  >
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Users</h3>
                </a>
                <a href="choose.php" >
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Upload</h3>
                </a>
                <a href="update.php" class="active">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Update</h3>
                </a>
                <a href="newlogin.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>New Login</h3>
                </a>
                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>            
    </aside>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main >
    <div class="nav">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                </span>
            </button>
            <div class="dark-mode">
                <span class="material-icons-sharp active">
                    light_mode
                </span>
                <span class="material-icons-sharp">
                    dark_mode
                </span>
            </div>
        </div>
        <h1 style="color:  #2b7067;">Meal</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>
            </div>
            <!-- End of Analyses -->

            <h1 style="color:#2b7067;">Dessert</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>

                <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div>
            </div>
            <!-- End of Analyses -->
    </main>
    <!-- End of Main Content -->

    <!-- Right Section -->
    <div class="right-section">
       
        <!-- End of Nav -->
    </div>
    <!-- End of Right Section -->

</div>
 <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>const sideMenu = document.querySelector('aside');
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    
    const darkMode = document.querySelector('.dark-mode');
    
    menuBtn.addEventListener('click', () => {
        sideMenu.style.display = 'block';
    });
    
    closeBtn.addEventListener('click', () => {
        sideMenu.style.display = 'none';
    });
    
    darkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode-variables');
        darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
        darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
    })
    
    </script>
</body>
</html>