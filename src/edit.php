<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="eng.css">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
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
        <h1 style="font-weight: bold; font-size: 30px;color:#2b7067;">Add Recipe</h1>
    <!-- Analysis Section -->
    <div class="analyse">
        <div class="sales">
            <form action="test1.php" method="post" enctype="multipart/form-data" style="width: 100%; max-width: 100%;">
            <input type='hidden' value='<?php echo $Cid; ?>' name='Cid'>
            <input type='hidden' value='<?php echo $type; ?>' name='type'>

            <div class="form-group">
                <label for="name">Name:</label>
                <textarea name="name" id="name" required></textarea>
            </div>
    
            <div class="form-group">
                <label for="instructions">Instructions:</label>
                <textarea name="instructions" id="instructions" required style="width: 100%;height: 200px;"></textarea>
            </div>

            <div class="form-group">
                <label for="ingredient">Ingredients:</label>
                <textarea name="ingredient" id="ingredient" required style="width: 100%;"></textarea>
            </div>

            <div class="form-group">
                <label for="pre_time">Preparation Time (minutes):</label>
                <input type="number" name="pre_time" id="pre_time" required style="width: 100%;">
            </div>

            <div class="form-group">
                <label for="cook_time">Cooking Time (minutes):</label>
                <input type="number" name="cook_time" id="cook_time" required style="width: 100%;">
            </div>

            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" name="photo" id="photo" accept="image/*" required style="width: 100%;">
            </div>

            <input type="submit" value="Edit" 
            style="width: 60%; background-color: var(--color-primary);
            margin-left:20%;border-radius: var(--border-radius-1); color: white;">
            </form>
        </div>
    </div>
    </main>


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