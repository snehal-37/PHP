<?php 

include("config.php");

$id=$_GET["id"];

$sql = "SELECT * FROM `enquiry` WHERE `enquiry`.`id` = $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
        
    <main class="main" id="top" >
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
        data-navbar-on-scroll="data-navbar-on-scroll"
      >
        <div class="container">
          <a class="navbar-brand" href="admin.php"
            ><img src="assets/img/logo1.svg" height="54" alt="logo"
          />
          <span class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">MyTravel</span>
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
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="admin.php#users"
                  >Users</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="admin.php#queries"
                  >Queries</a
                >
              </li>
              
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="admin.php#request"
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


      <section>
      <div class="container">
        <div class="row g-2 my-5">
          <div class="col">
            <div class="card w-100">
              <div class="card-header text-center"><h4 class="p-2">Tourist Details</h4></div>
              <div class="card-body">
                <p class="card-title text-center">Name: <?php echo "{$row['name']}"; ?></p>
                <p class="card-title text-center">Description: <?php echo "{$row['text']}"; ?></p>
                <p class="card-title text-center">Date: <?php echo "{$row['date']}"; ?></p>
                <p class="card-title text-center">Number of Days: <?php echo "{$row['day']}"; ?></p>
                <p class="card-title text-center">Email: <?php echo "{$row['email']}"; ?></p>
                <p class="card-title text-center">Mobile no: <?php echo "{$row['number']}"; ?></p>
                <form action="booking.php" method="post">
                
                    <label for="" class="form-label" style="color:black">Send to:</label>
                    <div class="mb-3">
                      <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        value="<?php echo "{$row['email']}";?>"
                      />
                    </div>
                    <label for="" class="form-label" style="color:black">Response:</label>
                    <div class="mb-3">
                    <textarea class="form-control form-little-squirrel-control border border" required name="tarea" 
                     id="" rows="5" placeholder="Enter your response here..."></textarea>
                    </div>
                    <div class="text-center"><button class="btn btn-success mb-3 fs-1 border-radius">
                      Send
                    </button></div>
                  </form>
              </div>
            </div>
          </div>
        </div>          
     </div>
        

      </section>
      
<hr>
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
