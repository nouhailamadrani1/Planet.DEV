
<?php  include 'head.php';?>
    
    <body class="m-2">
        <div class="d-flex justify-content-between">
            <h2>NM Blog  | <span class="fs-5" style="color:rgb(245, 35, 98)">Statistical</span></h2>
    
    
            <span class="material-symbols-outlined m-2">
                calendar_month
            </span>
        </div>
       
    <?php  include 'sidebar.php';?>
        
    <?php  include 'sidebarProfile.php';?>
      
        </div>
        </div>
    <div class=" d-flex justify-content-center flex-wrap p-3">
        <div class="card m-2 shadow  " style="width: 15rem; background:rgb(232, 147, 170);">
            <div class="p-2" >
                <span class="material-symbols-outlined">
                    article
                    </span>
                <p class="card-title ">Number Of Articles</p>
                <p><?php cuntArticles(); ?></p>
            </div>
        </div>
        <div class="card m-2  shadow bg-body " style="width: 15rem;">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    person
                    </span>
                <p class="card-title">Number Of Users</p>
                <p><?php cuntAdmins(); ?></p>
            </div>
        </div>
        <div class="card m-2  shadow bg-body " style="width: 15rem;">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    history_edu
                    </span>
                <p class="card-title">Number Of Admins</p>
                <p><?php cuntAdmins(); ?></p>
            </div>
        </div>

    </div>
       
  
       <?php include 'footer.php';?>