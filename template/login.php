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
        <p class="text-white text-center">une application web pour tester les connaissances des candidats au niveau PHP</p>
      </div>
    </div>

    <div class="     d-flex justify-content-center align-items-center " style="width: 350px ;
   height: 400px;">
   <?php
    $connection = new Db;
    $conn = $connection->connection();
    $nm =new login($conn);
    $nm->login();
    ?>

      <form  action="" method="POST" class="  p-4 ">
        <h4 class="pe-4 " style="color:rgb(245, 35, 98) ;">Login</h4>
        <div class="my-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control shadow" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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