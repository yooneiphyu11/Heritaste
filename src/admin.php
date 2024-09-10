<?php 
require "database_connection.php";
$CRUD=new CRUD();
$meal_count=$CRUD->count_meal();
$dessert_count=$CRUD->count_dessert();
$total=$meal_count+$dessert_count;
$read_meal=$CRUD->read_desEn_descmeal();
$read_dessert=$CRUD->read_desEn_descdessert();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                <img src="../src/assets/logo.png" alt=""  style="width: 30px; height: 30px;" id="icon">
                    <h2 style="color:#B88A44;">Heritaste</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="admin.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="user.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Users</h3>
                </a>
                <a href="choose.php">
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
        <main>
            <h1 style="color: #2b7067;">Recipe</h1>
            <?php  ?>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total </h3>
                            <h1><?php echo htmlspecialchars($total) ?></h1>
                        </div>
                        <div class="progresss">
                            <img src="../src/assets/images/all_5579233.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Meal</h3>
                            <h1><?php echo htmlspecialchars($meal_count) ?></h1>
                        </div>
                        <div class="progresss">
                            <img src="../src/assets/images/iftar_9989244.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Dessert</h3>
                            <h1><?php echo htmlspecialchars($dessert_count) ?></h1>
                        </div>
                        <div class="progresss">
                            <img src="../src/assets/images/frozen-yogurt_10143117.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2 style="color: #2b7067;;">Recent Upload</h2>
                <table>
                        <tr>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Catagory</th>
                            <th>Type</th>    
                        </tr>

                        <?php foreach($read_meal as $e): ?>
                        <tr>                            
                            <td><img src="data:image/png;base64,<?php echo base64_encode($e['photo']) ?>" alt="" style="height: 50px;width: 50px;margin-left: 30px;"></td>
                            <td><?php  echo htmlspecialchars($e['name']) ?></td>
                            <td>Meal</td>
                            <td><?php echo htmlspecialchars($e['cname']) ?></td>                            
                        </tr>
                        <?php endforeach;?>

                        <?php foreach($read_dessert as $e): ?>
                        <tr>
                        <td><img src="data:image/png;base64,<?php echo base64_encode($e['photo']) ?>" alt="" style="height: 50px;width: 50px;margin-left: 30px;"></td>
                            <td><?php  echo htmlspecialchars($e['name']) ?></td>
                            <td>Dessert</td>
                            <td><?php echo htmlspecialchars($e['cname']) ?></td>  
                        </tr>
                        <?php endforeach; ?>

                        <!-- <tr>
                            <td><img src="images/fruit_13143379.png" alt="" style="height: 50px;width: 50px;margin-left: 30px;"></td>
                            <td>Chicken Curry</td>
                            <td>Meal</td>
                            <td>Chicken</td>
                            <td>2023/8/24</td>
                        </tr>
                        <tr>
                            <td><img src="images/fruit_13143379.png" alt="" style="height: 50px;width: 50px;margin-left: 30px;"></td>
                            <td>Chicken Curry</td>
                            <td>Meal</td>
                            <td>Chicken</td>
                            <td>2023/8/24</td>
                        </tr> -->
                </table>
            </div>
            <!-- End of Recent Orders -->

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

            <div class="user-profile">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                    <h2 style="color:#2b7067;;">Heritaste</h2>
                    <p>Myanmar Traditional Food Recipe</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2 style="color:#2b7067;;">Admin</h2>
                </div>

                <div class="notification">
                        <img src="images/profile-1.jpg" style="height: 50px;width: 50px;border-radius: 30px;" alt="">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon Ei Phyu</h3>
                            <small class="text_muted">
                                yooneiphyu@ucstgi.edu.mm
                            </small>
                        </div>     
                    </div>
                </div>

                <div class="notification">
                    <img src="images/profile-1.jpg" style="height: 50px;width: 50px;border-radius: 30px;" alt="">
                <div class="content">
                    <div class="info">
                        <h3>May Paing Moe</h3>
                        <small class="text_muted">
                            maypaingmoe@ucstgi.edu.mm
                        </small>
                    </div>
                </div>
            </div>

                <div class="notification">
                    <img src="images/profile-1.jpg" style="height: 50px;width: 50px;border-radius: 30px;" alt="">
                <div class="content">
                    <div class="info">
                        <h3>Hnin Htet Htet Naing</h3>
                        <small class="text_muted">
                            hninhtethtetnaing@ucstgi.edu.mm
                        </small>
                    </div>
                </div>
            </div>

            </div>

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