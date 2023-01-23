
<?php  include 'head.php';?>
    
    <body class="m-2">
    <?php
    
    $connection = new Db;
    $conn = $connection->connection();
    $profile =new admin($conn);
    $profile->displayInfoAdmin();

    ?>
        <div class="d-flex justify-content-between">
            <h2>NM Blog  | <span class="fs-5" style="color:rgb(245, 35, 98)">Profile</span></h2>
    
    
            <span class="material-symbols-outlined m-2">
                calendar_month
            </span>
        </div>
       
    <?php  include 'sidebar.php';?>
        
    <?php  include 'sidebarProfile.php';?>
           
    <div class="offcanvas-body">
                <div class="d-flex justify-content-center flex-wrap ">
                    <img src="../img/profile.jpg" class="img-thumbnail w-25 h-auto mx-3 shadow" alt="...">
                    <ul class="list-group list-group-flush " >
                    <li class=" my-2 list-group-item">First Name : <?php echo($_SESSION['firstname']); ?></li>
                    <li class=" my-2 list-group-item"> Last Name : <?php echo($_SESSION['lastname']); ?></li>
                    <li class=" my-2 list-group-item">Age : <?php echo($_SESSION['age']); ?></li>
                    <li class=" my-2 list-group-item">E-mail: <?php echo($_SESSION['email']); ?></li>
                    <div class="btn-group my-5" role="group" aria-label="Basic example">
                    <button type="button" class=" shadow btn btn-white">Edit</button>
                    <button type="button" class=" shadow btn "  style=" background:rgb(245, 35, 98)">Delete</button>
                    </div>
                </ul>
                </div>
                

            </div>
       <?php include 'footer.php';?>