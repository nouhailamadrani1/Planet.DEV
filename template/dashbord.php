

<?php 
include 'head.php';
// if(isset($_POST[ $_SESSION['id']])) {
    
 ?>


    
<body class="m-2">
    <div class="d-flex justify-content-between">
        
        <h2 style="color: rgb(27, 33, 54);">NM Blog  | <span class="fs-5" style="color:rgb(245, 35, 98)">Home</span></h2>


        <span class="material-symbols-outlined m-2">
      
favorite
</span>
        </span>
    </div>
   
<?php  include 'sidebar.php';?>
    
<?php  include 'sidebarProfile.php';?>
       
    <div class=" d-flex justify-content-center">
        <div class="input-group mb-3 w-75 ">
            <input type="text" class="form-control" placeholder="search" aria-describedby="basic-addon2">
            <span class="input-group-text text-white w-25" id="basic-addon2" style="background:rgb(245, 35, 98);"><span class="material-symbols-outlined">
                    search
                </span>Search</span>
        </div>
    </div>
    <div class=" d-flex justify-content-center">

        <h5> Add article</h5>
    </div>

        <div  class=" d-flex justify-content-center  ">
        <button type="button" class="btn btn-close-white btn " ><br>

        <a href="add.php" style="width:30px" ><span class="material-symbols-outlined text-success w-100 " >
              add_circle
                </span></a>
        </button>

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
        <div class="card m-2  shadow  " style="width: 15rem; background: rgb(190, 150, 242);">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    person
                    </span>
                <p class="card-title">Number Of Users</p>
                <p><?php cuntAdmins(); ?></p>
            </div>
        </div>
        <div class="card m-2  shadow  " style="width: 15rem;background:rgb(157, 215, 235)">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    history_edu
                    </span>
                <p class="card-title">Number Of Admins</p>
                <p><?php cuntAdmins(); ?></p>
            </div>
        </div>

    </div>
    <h4 class="p-3"> Article </h4>
    <div class="p-3" style="overflow-x:auto;">
    <table class="table shadow">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      
      <th scope="col">Text </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  displayArticles();
    ?>
    
  </tbody>
</table>
    </div>
   
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../script/script.php" method="post">
      <div class="modal-body">
      <input type="hidden" id="id" name="id"/>
      <div class="input-group mb-3">
  <span class="input-group-text" >title</span>
  <input type="text" class="form-control"  name="title" id="title" placeholder="title" >
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >text</span>
  <textarea type="text" class="form-control" name="text" id="text" placeholder="text" ></textarea>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
   
   <?php include 'footer.php';?>
<script src="../script/fullUpdate.js"></script>
<?php 