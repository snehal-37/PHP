<?php 
session_start();

      if (!isset($_SESSION["uname"])&&!isset($_SESSION["upass"])) {
        header("Location:alog.html#login");
      }
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MyTravel</title>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
  </head>
 
  <body style="background-image: url(assets/img/bg6.jpg)">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
        data-navbar-on-scroll="data-navbar-on-scroll"
      >
        <div class="container">
          <a class="navbar-brand" href="admin.php"
            ><img src="assets/img/logo1.svg" height="54" alt="logo" />
            <span
              class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4"
              >MyTravel</span
            >
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div
            class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0"
            id="navbarSupportedContent"
          >
            <ul
              class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start"
            >
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="admin.php"
                  >Dashboard</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a class="nav-link fw-medium" aria-current="page" href="#users"
                  >Users</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="#queries"
                  >Queries</a
                >
              </li>

              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="#request"
                  >Requests</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="logout.php"
                  >Log Out</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="s1">
      <div class="container">
        <div class="row g-2 my-5">
          <div class="col">
            <div class="card w-100">
              <div class="card-header p-3 text-center" id="users">Registered Users</div>
              <div class="card-body">
              <?php 

include("config.php");

$sql="SELECT * FROM `tourist`";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
 
echo "<div class='container'>
<div class='table-responsive'>
<table class='table table-muted'>
 <thead>
     <tr>
         <th scope='col'>Id</th>
         <th scope='col'>Name</th>
         <th scope='col'>Email</th>
         <th scope='col'>Username</th>
         <th scope='col'>Action</th>
     </tr>
 </thead>
 <tbody>
";
 while ($rows=mysqli_fetch_assoc($result)) {

   echo "<tr class=''>
 <td scope='row'>{$rows['id']}</td>
 <td>{$rows['name']}</td>
 <td>{$rows['email']}</td>
 <td>{$rows['username']}</td>
 <td><a name='' id='' class='btn btn-warning' href='edituser.php?id={$rows['id']}' role='button'>Edit</a>
 <a name='' id='' class='btn btn-danger' href='delete.php?id={$rows['id']}' role='button'>Delete</a></td>
</tr>";
 }
 echo "</tbody></table></div></div>";
}else {
 echo "0 Records found".mysqli_error($conn);
}


?>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-2 mb-5">
          <div class="col">
            <div class="card w-100">
              <div class="card-header p-3 text-center"id="queries">Queries</div>
              <div class="card-body">
              <?php 
       include("config.php");

       $sql="SELECT * FROM `queries`";
       $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){
        
      echo "<div class='container'>
      <div class='table-responsive'>
      <table class='table table-muted'>
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Queries</th>
                <th scope='col'>Action</th>
               
            </tr>
        </thead>
        <tbody>
";
        while ($rows=mysqli_fetch_assoc($result)) {

          echo "<tr class=''>
        <td scope='row'>{$rows['id']}</td>
        <td>{$rows['name']}</td>
        <td>{$rows['email']}</td>
        <td>{$rows['query']}</td>
        <td><a name='' id='' class='btn btn-warning' href='queryEdit.php?id={$rows['id']}' role='button'>Send Response</a>
        <a name='' id='' class='btn btn-success' href='delete_Q.php?id={$rows['id']}' role='button'>Done</a></td>
        
      </tr>";
        }
        echo "</tbody></table></div></div>";
      }else {
        echo "0 Records found".mysqli_error($conn);
      }
      
      
      ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col">
            <div class="card w-100">
              <div class="card-header p-3 text-center"id="request">Requests</div>
              <div class="card-body">
              <?php 
       include("config.php");

       $sql="SELECT * FROM `enquiry`";
       $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){
        
      echo "<div class='container'>
      <div class='table-responsive'>
      <table class='table table-muted'>
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Name</th>
                <th scope='col'>Description</th>
                <th scope='col'>Date</th>
                <th scope='col'>Days</th>
                <th scope='col'>Email</th>
                <th scope='col'>Mobile no</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
";
        while ($rows=mysqli_fetch_assoc($result)) {

          echo "<tr class=''>
        <td scope='row'>{$rows['id']}</td>
        <td>{$rows['name']}</td>
        <td>{$rows['text']}</td>
        <td>{$rows['date']}</td>
        <td>{$rows['day']}</td>
        <td>{$rows['email']}</td>
        <td>{$rows['number']}</td>
        <td><a name='' id='' class='btn btn-warning' href='editTourist.php?id={$rows['id']}' role='button'>Check</a>
        <a name='' id='' class='btn btn-success' href='delete_T.php?id={$rows['id']}' role='button'>Done</a></td>
        
      </tr>";
        }
        echo "</tbody></table></div></div>";
      }else {
        echo "0 Records found".mysqli_error($conn);
      }
      
      
      ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        </section>
      <hr />
      <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium text-light">
          All rights reserved@2024
        </p>
      </div>
    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
      rel="stylesheet"
    />
  </body>
</html>
