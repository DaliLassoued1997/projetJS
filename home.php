<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Dashboard - Home</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/sidenav.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="js/restrict.js"></script>
</head>

<body>
  <?php include "sections/sidenav.html"; ?>
  <div class="container-fluid">
    <div class="container">
      <!-- header section -->
      <?php
      require "header.php";
      createHeader('home', 'Dashboard', 'Home');
      ?>

      <div class="row">
        <div class="row col col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats">
              <a class="text-dark text-decoration-none">
                <span class="h4"></span>

                <div class="small font-weight-bold"></div>
              </a>
            </div>
          </div>
        </div>

        <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 7px 0; margin-left: 15px;">
          <div class="todays-report">
            <div class="h5">Todays Report</div>
            <table class="table table-bordered table-striped table-hover">
              <tbody>

                <th>Total Purchase</th>
                <th class="text-danger">Rs.</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>

      <hr style="border-top: 2px solid #ff5252;">
      <!--  Tableau yet7at houniiiiiiiiiiiii     -->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;">
            <div class="text-center">
              <span class="h1"><i class="fa fa-' . $icon . ' p-2"></i></span>
              <div class="h5"></div>
            </div>
          </div>
        </div>

      </div>
      <!-- form content end -->

      <hr style="border-top: 2px solid #ff5252;">

    </div>
  </div>
</body>

</html>