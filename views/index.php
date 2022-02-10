<?php
include '../public/nav.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP w PHP OOP</title>
    <!-- Latest compiled and minified CSS | BS4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css"/>
    
    <!-- jQuery library & Latest compiled JavaScript | BS4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Font Awesome --> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

      //DataTables Function
      $(document).ready(function(){
        $("#users-table").DataTable();
      });

      //Open Modal
      $("#newUserBtn").click(function() {
        $("#newUserModal").modal('show');
      });


    </script>

</head>
<body>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <h4 class="text-center text-danger font-weght-normal my-3">CRUD Application OOP PHP</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h4 class="mt-2 text-primary">All users in database!</h4>
    </div>
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary m-1 float-right" id="newUserBtn"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;Add New User</button>
      <button type="button" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Export to CSV</button>
    </div>
  </div>
  <hr class="">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive" id="showUser">
        <table class="table table-striped table-sm table-bordered" id="users-table">
          <thead>
            <tr class="text-center">
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center text-secondary">
              <!-- use Js to populate rows -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- The New User Modal -->
<div class="modal" id="newUserModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


</body>
</html>