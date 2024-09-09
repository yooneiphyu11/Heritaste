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
                    <img src="images/logo.png">
                    <h2 style="color:#B88A44;">Heritaste</h2>
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
                <a href="user.php"  class="active">
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
            <h1 style="color:#2b7067;">Users</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total </h3>
                            <h1>50</h1>
                        </div>
                        <div class="progresss">
                            <img src="images/all_5579233.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2 style="color:#2b7067;">Uers Details</h2>
                <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Time</th>
                            <th>Favourite</th>
                            <th>Review</th>
                        </tr>
                        <tr>
                            <td>Yoon</td>
                            <td>yoon@gmail.com</td>
                            <td>2023/8/24</td>
                            <td>5</td>
                            <td>2</td>      
                        </tr>
                        <tr>
                            <td>Yoon</td>
                            <td>yoon@gmail.com</td>
                            <td>2023/8/24</td>
                            <td>5</td>
                            <td>2</td>  
                        </tr>
                        <tr>
                            <td>Yoon</td>
                            <td>yoon@gmail.com</td>
                            <td>2023/8/24</td>
                            <td>5</td>
                            <td>2</td>  
                        </tr>
                        <tr>
                            <td>Yoon</td>
                            <td>yoon@gmail.com</td>
                            <td>2023/8/24</td>
                            <td>5</td>
                            <td>2</td>  
                        </tr>
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


            <div class="reminders">
                <div class="header">
                    <h2 style="color:#2b7067;">Reviews</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon</h3>
                            <small class="text_muted">
                                Your recipes are so good for busy people.
                            </small>
                        </div>
                        <div>
                            <h3>12:30</h3>
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon</h3>
                            <small class="text_muted">
                                Your recipes are so good for busy people.
                            </small>
                        </div>
                        <div>
                            <h3>12:30</h3>
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon</h3>
                            <small class="text_muted">
                                Your recipes are so good for busy people.
                            </small>
                        </div>
                        <div>
                            <h3>12:30</h3>
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon</h3>
                            <small class="text_muted">
                                Your recipes are so good for busy people.
                            </small>
                        </div>
                        <div>
                            <h3>12:30</h3>
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="content">
                        <div class="info">
                            <h3>Yoon</h3>
                            <small class="text_muted">
                                Your recipes are so good for busy people.
                            </small>
                        </div>
                        <div>
                            <h3>12:30</h3>
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

        // Get the current path
        const currentPath = window.location.pathname.split("/").pop(); 

        // Get all sidebar links
        const sidebarLinks = document.querySelectorAll('.sidebar a');

        // Loop through each link
        sidebarLinks.forEach(link => {
    // Compare link href with current path
    if (link.getAttribute('href') === currentPath) {
        // Add 'active' class to the matching link
        link.classList.add('active');
    }
});

        </script>
</body>

</html>