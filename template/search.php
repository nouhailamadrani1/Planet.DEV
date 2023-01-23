
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
            <input type="text" class="form-control" placeholder="search by search" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()">
            <span class="input-group-text text-white w-25" id="basic-addon2" style="background:rgb(245, 35, 98);"><span class="material-symbols-outlined">
                    search
               
        </div>
    </div>


<style>



#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>


<h2>Article</h2>


<table id="myTable">
  <tr class="header">
    <th style="width:60%;">title</th>
    <th style="width:40%;">Text</th>
  </tr>
  <?php 
  displayArticlesSearch();
    ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



       
       <?php include 'footer.php';?>
       