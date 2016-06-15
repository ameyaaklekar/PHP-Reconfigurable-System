<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Record Management System</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/ajaxScript.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
  </head>
  <style>
      body{
        font-size:14px;
      }
  </style>
  <body>
    <?php include 'view/title.php'; ?>

    <div class="container">
      <?php include 'view/menu.php'; ?>
        <div class="row">
          <div class="col-md-12">
            <div class="well" id="output">

            </div>
          </div>
        </div>

    </div>
    <footer class="well">
      <h5 class="text-center">Site Designed &amp; Developed by Ameya Aklekar, Student ID <strong>150002874 </strong>, MIT Auckland</h5>
    </footer>
  </body>
</html>
<?php session_destroy(); ?>