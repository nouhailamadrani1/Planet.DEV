
<?php  include 'head.php';?>
    
    <body class="m-2">
        <div class="d-flex justify-content-between">
            <h2>NM Blog  | <span class="fs-5">Profile</span></h2>
    
    
            <span class="material-symbols-outlined m-2">
                calendar_month
            </span>
        </div>
       
    <?php  include 'sidebar.php';?>
        
    <?php  include 'sidebarProfile.php';?>
           
    <div class="offcanvas-body">
                <div class="d-flex justify-content-center flex-wrap ">
                    <img src="../img/profile.jpg" class="img-thumbnail w-25 h-auto mx-3 shadow" alt="...">
                    <ul class="list-group list-group-flush">
                    <li class=" my-2 list-group-item">First Name : NOUAILA</li>
                    <li class=" my-2 list-group-item"> Last Name : MADRANI</li>
                    <li class=" my-2 list-group-item">Age : 22 ans</li>
                    <li class=" my-2 list-group-item">E-mail: nouhailamadrani@gmail.com</li>
                    <div class="btn-group my-5" role="group" aria-label="Basic example">
                    <button type="button" class=" shadow btn btn-white">Edit</button>
                    <button type="button" class=" shadow btn btn-danger">Delete</button>
                    </div>
                </ul>
                </div>
                

            </div>
       <?php include 'footer.php';?>