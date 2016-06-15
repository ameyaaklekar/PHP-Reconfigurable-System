<?php
$db = "repository";
$con = mysqli_connect('localhost','root','',$db) or die('Error Connect to DB');

$sql = "SELECT * FROM application";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

$indexFile = fopen("index.php", "w") or die("Unable to open file!");
$txt = '<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>'.$row['app_name'].'</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
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
        font-size:'.$row['app_font_size'].'px;
      }
  </style>
  <body>
    <?php include \'view/title.php\'; ?>

    <div class="container">
      <?php include \'view/menu.php\'; ?>
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
<?php session_destroy(); ?>';

$success = fwrite($indexFile, $txt);
if ($success) {
  echo "Created index.php <br />";
}else {
  echo "Failed to create index.php <br />";
}
fclose($indexFile);

/*****************************************************************/
/***********************TITLE FILE********************************/
/*****************************************************************/


$titleFile = fopen("View/title.php", "w") or die("Unable to open file!");
$txt = '<div class="well well-sm">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1>'.$row['app_name'].'</h1>
                </div>
              </div>
            </div>
          </div>
        </div>';

$success = fwrite($titleFile, $txt);
if ($success) {
  echo "Created View/title.php <br />";
}else {
  echo "Failed to create View/title.php <br />";
}
fclose($titleFile);
/*****************************************************************/
/***********************MENU FILE*********************************/
/*****************************************************************/
$sql = "SELECT * FROM screen";
$query = mysqli_query($con, $sql);
$menuFile = fopen("View/menu.php", "w") or die("Unable to open file!");
$txt ='<div class="row">
          <div class="col-md-12">
            <div class="btn-group btn-group-justified">
            ';


while ($row =  mysqli_fetch_assoc($query)) {
  $txt .='    <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" value="'.$row['sname'].'" onclick="'.$row['methodcall'].'()">'.$row['sname'].'</button>
              </div>
              ';
}
$txt .=     '</div>
          </div>
        </div>';
$success = fwrite($menuFile, $txt);
if ($success) {
  echo "Created View/menu.php <br />";
}else {
  echo "Failed to create View/menu.php <br />";
}
fclose($menuFile);
/**************************************************************************************/
/***********************EMPLOYEE, CUSTOMER AND ORDERS INPUT FILE***********************/
/**************************************************************************************/

$sql = "SELECT sc.id, sc.scode, sc.code, scr.stitle, scr.sname, scr.sdesc, ctr.cname, ctr.type, ctr.value, ctr.label, ctr.methodcall FROM scrctrl AS sc
          INNER JOIN screen AS scr ON sc.scode = scr.scode
          INNER JOIN ctrl as ctr ON ctr.code = sc.code";
$query = mysqli_query($con, $sql);
$employeeScreen = '';
$employeeInput ='<div class="form-inline" style="margin-bottom: 20px;">';
$employeeTextbox = '';
$employeeRadio = '';
$employeeButton = '
<div class="form-group">
  <div class="btn-group" role="group">';

$customerScreen = '';
$customerInput ='<div class="form-inline" style="margin-bottom: 20px;">';
$customerTextbox = '';
$customerRadio = '
<div class="form-inline" style="margin-bottom: 20px;">';
$customerButton = '
<div class="form-group">
  <div class="btn-group" role="group">';

$ordersScreen = '';
$ordersInput ='<div class="form-inline" style="margin-bottom: 20px;">';
$ordersTextbox = '';
$ordersRadio = '';
$ordersButton = '
<div class="form-group">
  <div class="btn-group" role="group">';

$aboutScreen = '';

while ($row = mysqli_fetch_assoc($query)) {
  switch ($row['scode']) {
    case '1':
      $employeeInputFile = fopen("View/employeeInput.php", "w") or die("Unable to open file!");
      $employeeScreen = '<h2>'.$row['stitle'].'</h2>
      <hr />';
        switch ($row['type']) {
          case 'Textbox':
            $employeeTextbox .='
            <div class="form-group">
              <label for="'.$row['cname'].'">'.$row['label'].'</label>
              <input type="text" class="form-control" name="'.$row['cname'].'" id="'.$row['cname'].'" placeholder="'.$row['label'].'">
            </div>
            ';
            break;
          case 'Radiobutton':
            $employeeRadio .='
            <div class="form-group">
              <label>'.$row['label'].'</label>
              <div class="radio">
                <label>
                  <input type="radio" name="'.$row['cname'].'" id="'.strtolower($row['value']).'" value="'.$row['value'].'"> '.$row['value'].'
                </label>
              </div>
            </div>';
            break;
          case 'Button':
            $employeeButton .= '
            <button type="button" class="btn btn-primary" value="'.$row['value'].'" onclick="'.$row['methodcall'].'">'.$row['value'].'</button>';
            break;
        }
      break;

    case '2':
      $customerInputFile = fopen("View/customerInput.php", "w") or die("Unable to open file!");
      $customerScreen = '<h2>'.$row['stitle'].'</h2>
      <hr />';
      switch ($row['type']) {
        case 'Textbox':
          $customerTextbox .='
          <div class="form-group">
            <label for="'.$row['cname'].'">'.$row['label'].'</label>
            <input type="text" class="form-control" name="'.$row['cname'].'" id="'.$row['cname'].'" placeholder="'.$row['label'].'">
          </div>
          ';
          break;
        case 'Radiobutton':
          $customerRadio .='
          <div class="form-group">
            <label>'.$row['label'].'</label>
            <div class="radio">
              <label>
                <input type="radio" name="'.$row['cname'].'" id="'.strtolower($row['value']).'" value="'.$row['value'].'"> '.$row['value'].'
              </label>
            </div>
          </div>';
          break;
        case 'Button':
          $customerButton .= '
          <button type="button" class="btn btn-primary" value="'.$row['value'].'" onclick="'.$row['methodcall'].'">'.$row['value'].'</button>';
          break;
      }
      break;

    case '3':
      $ordersInputFile = fopen("View/ordersInput.php", "w") or die("Unable to open file!");
      $ordersScreen = '<h2>'.$row['stitle'].'</h2>
      <hr />';
      switch ($row['type']) {
        case 'Textbox':
          $ordersTextbox .='
          <div class="form-group">
            <label for="'.$row['cname'].'">'.$row['label'].'</label>
            <input type="text" class="form-control" name="'.$row['cname'].'" id="'.$row['cname'].'" placeholder="'.$row['label'].'">
          </div>
          ';
          break;
        case 'Radiobutton':
          $ordersRadio .='
          <div class="form-group">
            <label>'.$row['label'].'</label>
            <div class="radio">
              <label>
                <input type="radio" name="'.$row['cname'].'" id="'.strtolower($row['value']).'" value="'.$row['value'].'"> '.$row['value'].'
              </label>
            </div>
          </div>';
          break;
        case 'Button':
          $ordersButton .= '
          <button type="button" class="btn btn-primary" value="'.$row['value'].'" onclick="'.$row['methodcall'].'">'.$row['value'].'</button>';
          break;
      }
      break;

    default:
      # code...
      break;
  }
}

$employeeInput .= $employeeTextbox;
$employeeInput .= $employeeRadio;
$employeeInput .= '
</div>';
$employeeButton .= '
  </div>
</div>';
$employeeInput .= $employeeButton;
$employeeScreen .= $employeeInput;
$success = fwrite($employeeInputFile, $employeeScreen);
if ($success) {
  echo "Created View/employeeInput.php <br />";
}else {
  echo "Failed to create View/employeeInput.php <br />";
}
fclose($employeeInputFile);

$customerInput .= $customerTextbox;
$customerInput .= '
</div>';
$customerRadio .= '
</div>';
$customerInput .= $customerRadio;
$customerButton .= '
  </div>
</div>';
$customerInput .= $customerButton;
$customerScreen .= $customerInput;
$success = fwrite($customerInputFile, $customerScreen);
if ($success) {
  echo "Created View/customerInput.php <br />";
}else {
  echo "Failed to create View/customerInput.php <br />";
}
fclose($customerInputFile);

$ordersInput .= $ordersTextbox;
$ordersInput .= '
</div>';
$ordersRadio .= '
</div>';
$ordersInput .= $ordersRadio;
$ordersButton .= '
  </div>
</div>';
$ordersInput .= $ordersButton;
$ordersScreen .= $ordersInput;
$success = fwrite($ordersInputFile, $ordersScreen);
if ($success) {
  echo "Created View/ordersInput.php <br />";
}else {
  echo "Failed to create View/ordersInput.php <br />";
}
fclose($ordersInputFile);

 ?>
