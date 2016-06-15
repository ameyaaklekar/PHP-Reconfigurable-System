<?php
class Table{
  function getCustomer($eid){
    include('connection.php');

    $sql = "SELECT * FROM customers WHERE eid='$eid'";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowempmast(this)';
    $result = '';
    $col = mysqli_num_fields($query);

    while ($row=mysqli_fetch_row($query)) {
      $result .= '<tr onclick="'.$page1.'">';
      for ($i=0; $i < $col ; $i++) {
        $result .='<td>'.$row[$i].'</td>';
      }
      $result .= '</tr>';
    }
    echo '<table class="table table-hover" id="outputTable">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Employee Id</th>
              </tr>
            </thead>';
    echo "<tbody>";
    echo $result;
    echo "</tbody>";
    echo '</table>';
    $con->close();
  }

  function getOrders($eid){
    include('connection.php');

    $sql = "SELECT * FROM orders WHERE eid='$eid'";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowempmast(this)';
    $result = '';
    $col = mysqli_num_fields($query);

    while ($row=mysqli_fetch_row($query)) {
      $result .= '<tr onclick="'.$page1.'">';
      for ($i=0; $i < $col ; $i++) {
        $result .='<td>'.$row[$i].'</td>';
      }
      $result .= '</tr>';
    }
    echo '<table class="table table-hover" id="outputTable">
            <thead>
              <tr>
                <th>Order Number</th>
                <th>Customer ID</th>
                <th>Employee ID</th>
              </tr>
            </thead>';
    echo "<tbody>";
    echo $result;
    echo "</tbody>";
    echo '</table>';
    $con->close();
  }
}
 ?>
