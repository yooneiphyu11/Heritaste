<?php
require "database_connection.php";
$CRUD=new CRUD();
$lang='en';
$meal=$CRUD->read_desEnmeal();

$dessert=$CRUD->read_desEndessert();
?>
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
        <div class="d-flex align-item-center me-5 order-lg-2">
            <form  action="" method="post"  id="languageForm" class="me-5 mt-1" style="border-radius: 20px; background-color: #f8f9fa; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="button-switch-container" style="display: flex; align-items: center; justify-content: center;">
                    <select name="language" id="languageSelect" class="language" aria-label="Select language" title="Select language between English and Myanmar" 
                    style="border: 1px solid #ced4da; border-radius: 20px; padding: 5px 10px; font-size: 16px; margin-right: 10px;" onchange="this.form.submit();">
                    <option value="en" <?php if (isset($_POST['language']) && $_POST['language'] === 'en') echo 'selected'; ?> selected>EN</option>  
                <option value="my" <?php if (isset($_POST['language']) && $_POST['language'] === 'my') echo 'selected'; ?>>MY</option>  
           </select>
            <input type="hidden" name="languageChange" value="1">
                <!-- !-- <button type="submit" id="submitBtn" style="display: none;" name="languageChange"></button> --> 
            </div>
            </form>
            <?php 
               if (isset($_POST['languageChange'])) {  
                    $random=[];
                    // $lang = isset($_POST['language']) ? $_POST['language'] : 'en';
                    if (isset($_POST['language'])) {  
                        $lang = $_POST['language'];  
                    } else {  
                        $lang = 'en'; // Default to 'en' if not set  
                    } 
                    $lang = htmlspecialchars(trim($lang), ENT_QUOTES, 'UTF-8');
                    // echo "Selected Language: |" . $lang . "| <br>";
                    if($lang==='en'){
                        $meal=$CRUD->read_desEnmeal();
                        $dessert=$CRUD->read_desEndessert();
                       
                    }
                    elseif($lang==='my'){
                        $meal=$CRUD->read_desMymeal();
                        $dessert=$CRUD->read_desMydessert();
                        
                    }
                    else{
                        echo "No Language Supprot.";
                    }
                }
            ?>
        <h1 style="color:  #2b7067;">Meal</h1>
            <!-- Analyses -->
            <div class="analyse">
            <?php if (isset($meal) && !empty($meal)): 
              foreach($meal as $e): ?>
                <div class="sales">
                        <div class="info">
                            <h3><?php echo htmlspecialchars( $e->name); ?></h3>                      
                            <img src="data:image/png;base64,<?php echo base64_encode($e->photo) ?>" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php?eid=<?php echo $e->EN_id?>||mid=<?php $e->MY_id; ?>" style="text-decoration: none;">Edit</a>
                        <a href="delete.php?id=<?php echo $e->EN_id?>||id=<?php echo $e->MY_id?>&type=meal" style="text-decoration: none;">delete</a>
                    </div>     
                </div>
                <?php endforeach; ?>  
              <?php else: ?>  
                  <p>No recipes available for the selected language.</p>  
              <?php endif; ?> 

                <!-- <div class="sales">
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
                </div> -->

                <!-- <div class="sales">
                        <div class="info">
                            <h3>chicken curry </h3>                      
                            <img src="../src/assets/food-removebg-preview.png" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php" style="text-decoration: none;">Edit</a>
                        <a href="edit.php" style="text-decoration: none;">delete</a>
                    </div>     
                </div> -->
            </div>
            <!-- End of Analyses -->

            <h1 style="color:#2b7067;">Dessert</h1>
            <!-- Analyses -->
            <div class="analyse">

            <?php if (isset($dessert) && !empty($dessert)): 
              foreach($dessert as $e): ?>
                <div class="sales">
                        <div class="info">
                            <h3><?php echo htmlspecialchars( $e->name); ?></h3>                      
                            <img src="data:image/png;base64,<?php echo base64_encode($e->photo) ?>" alt="">
                        </div>
                    <div class="status">
                        <a href="edit.php?eid=<?php echo $e->EN_id?>||mid=<?php $e->MY_id; ?>" style="text-decoration: none;">Edit</a>
                        <a href="delete.php?id=<?php echo $e->EN_id ?>||id=<?php $e->MY_id; ?>&type=dessert" style="text-decoration: none;">delete</a>
                    </div>     
                </div>
                <?php endforeach; ?>  
              <?php else: ?>  
                  <p>No recipes available for the selected language.</p>  
              <?php endif; ?> 

                <!-- <div class="sales">
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
                </div> -->
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