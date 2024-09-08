    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meal or Dessert Selection</title>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../src/choose.css">
        <script src="https://cdn.tailwindcss.com"></script>   
    </head>
<body>
<div class="container">
    <!-- Sidebar Section -->
    <aside>
        <div class="toggle">
            <div class="logo">
                <img src="images/logo.png">
                <h2>Heritaste</h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">
                    close
                </span>
            </div>
        </div>

        <div class="sidebar">
            <a href="admin.html">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
            </a>
            <a href="user.html">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Users</h3>
            </a>
            <a href="upload.html" class="active">
                <span class="material-icons-sharp">receipt_long</span>
                <h3>Upload</h3>
            </a>
            <a href="update.html">
                <span class="material-icons-sharp">insights</span>
                <h3>Update</h3>
            </a>
            <a href="newlogin.html">
                <span class="material-icons-sharp">add</span>
                <h3>New Login</h3>
            </a>
            <a href="logout.html">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>            
    </aside>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main >
        <h1 style="font-weight: bold; font-size: 30px;">Category</h1>

    <!-- Analysis Section -->
    <div class="analyse">
     <div class="user-profile">
            <div class="logo">
                <img src="../src/assets/food-removebg-preview.png" alt="" style="width:150px;height: 150px;margin-left:170px">
                <h2>Heritaste</h2>
                <p>Myanmar Traditional Food Recipe</p>
            </div>
        </div>
        <div class="sales">
                    <h1 class="text-3xl font-bold mb-6">Select Meal or Dessert</h1>
                    <div class="status space-x-4" style="display: flex;">
                        <a href="meal.php" class=" text-white px-4 py-2 rounded hover:bg-blue-600 transition">Meal</a>
                        <a href="dessert.php" class="text-white px-4 py-2 rounded hover:bg-green-600 transition">Dessert</a>
                    </div>
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
    
    
    Orders.forEach(order => {
        const tr = document.createElement('tr');
        const trContent = `
            <td>${order.productName}</td>
            <td>${order.productNumber}</td>
            <td>${order.paymentStatus}</td>
            <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
            <td class="primary">Details</td>
        `;
        tr.innerHTML = trContent;
        document.querySelector('table tbody').appendChild(tr);
    });

    </script>
</body>
</html>
    