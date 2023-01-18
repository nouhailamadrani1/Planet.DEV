
<?php  include 'head.php';?>
    
    <body class="m-2">
        <div class="d-flex justify-content-between">
            <h2>NM Blog  | <span class="fs-5"  style="color:rgb(245, 35, 98)">Search</span></h2>
    
    
            <span class="material-symbols-outlined m-2">
                calendar_month
            </span>
        </div>
       
    <?php  include 'sidebar.php';?>
        
    <?php  include 'sidebarProfile.php';?>
           
        <div class=" d-flex justify-content-center">
            <div class="input-group mb-3 w-75 ">
                <input type="text" class="form-control" placeholder="search" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><span class="material-symbols-outlined">
                        search
                    </span></span>
            </div>
        </div>
       
       <?php include 'footer.php';?>