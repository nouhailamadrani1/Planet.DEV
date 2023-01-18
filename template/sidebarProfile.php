    
<?php  include 'head.php';?>
    
    
 
    <?php
    $connection = new Db;
    $conn = $connection->connection();
    $profile =new admin($conn);
    $profile->displayInfoAdmin();

    ?>
    <button class="btn btn-white text-black>" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <span class="material-symbols-outlined">
                account_circle
            </span></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Profile | <span style="color:rgb(245, 35, 98)">Admin</span>
                    </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-center">
                    <img src="../img/profile.jpg" class="img-thumbnail w-25 h-auto" alt="...">
                </div>
                <ul class="list-group list-group-flush">
                    <li class=" my-2 list-group-item">First Name : <?php echo($_SESSION['firstname']); ?></li>
                    <li class=" my-2 list-group-item"> Last Name : <?php echo($_SESSION['lastname']); ?></li>
                    <li class=" my-2 list-group-item">Age : <?php echo($_SESSION['age']); ?></li>
                    <li class=" my-2 list-group-item">E-mail: <?php echo($_SESSION['email']); ?></li>

                </ul>

            </div>
        </div>
  
        </div>
     