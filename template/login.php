<?php include 'head.php'; 

include_once '../function.php/connectiondb.php';
require_once '../function.php/class.php';
?>


<body style="background-color: rgb(244, 244, 244);">
  <div class=" my-5 d-flex justify-content-center flex-wrap align-items-center   rounded-pill  shadow" style="background-color: rgb(237, 187, 200);">
    <div class=" d-flex justify-content-center align-items-center " style="width: 350px ;
   height: 400px;">
      <div>
        <h4 class="pe-4 text-center" style="color:rgb(245, 35, 98) ;">You Welcome</h4>
        <p class="text-white text-center">NM  is a community of developers who come together to discover and explore development news.</p>
      </div>
    </div>

    <div class="     d-flex justify-content-center align-items-center " style="width: 350px ;
   height: 400px;">
  

      <form  action="" method="POST" class="p-4 ">
        <h3 class="pe-4 " style="color:rgb(245, 35, 98) ;">Login</h4>
        <h6 style="color:rgb(245, 35, 90) ;">
        <?php
    $connection = new Db;
    $conn = $connection->connection();
    $login =new login($conn);
    $login->login();
    ?></h6>
        <div class="my-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control shadow" aria-describedby="emailHelp" data-parsley-type="email" >
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control shadow" >
        </div>
        <div class=" d-flex justify-content-center">
          <button type="submit" name="submit" class="btn btn shadow text-white" style="background:rgb(245, 35, 98) ;">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  