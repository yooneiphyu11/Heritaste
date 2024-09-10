    
    <?php
    require_once "database_connection.php";
    $catalog = new CRUD();
    $choose = $catalog->readCatalog();
    // var_dump($choose);
    $type=$_GET['type'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meal or Dessert Selection</title>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../src/meal.css">
        <script src="https://cdn.tailwindcss.com"></script>   
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
                <a href="choose.php" class="active">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Upload</h3>
                </a>
                <a href="update.php">
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
        <h1 style="font-weight: bold; font-size: 30px;color:#2b7067;">Category</h1>

    <!-- Analysis Section -->
    <div class="analyse">
     <div class="user-profile">
            <div class="logo">
                <img src="../src/assets/food-removebg-preview.png" alt="" style="width:150px;height: 150px;margin-left:170px">
                <h2 style="color:#2b7067;">Heritaste</h2>
                <p>Myanmar Traditional Food Recipe</p>
            </div>
        </div>
        <div class="sales">
        <h1 class="text-2xl font-bold mb-6 text-center">Choose Your Meal</h1>
            <form action="test.php" method="post">
                <div class="mb-4">
                    <label for="meal" class="block text-sm font-medium text-gray-700">Select a Meal:</label>
                    <select id="meal" name="Cid" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 " style="height:50px">
                        <?php foreach($choose as $c): ?>
                            <option value="<?php echo $c->Cid; ?>&type=<?php echo $type ?>"><?php echo htmlspecialchars($c->cname); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="mt-3 w-full text-white py-2 rounded-md transition" name="submit" value="<?php echo $type; ?>"
                style="background-color:#2b7067;color:#B88A44">Submit</button>
            </form>
        </div>
    </div>
    </main>
    <!-- End of Main Content -->

    <!-- Right Section -->
    <div class="right-section">
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
        <!-- End of Nav -->
    </div>
    <!-- End of Right Section -->

</div>

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
    