<?php
class Orders{
  function defaultQuery(){
    include('connection.php');

    $sql = "SELECT * FROM orders";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowordmast(this)';
    $result = '';
    $col = mysqli_num_fields($query);

    while ($row=mysqli_fetch_row($query)) {
      $result .= '<tr onclick="'.$page1.'">';
      for ($i=0; $i < $col ; $i++) {
        $result .='<td>'.$row[$i].'</td>';
      }
      $result .= '</tr>';
    }
    return $result;
    $con->close();
  }

  function allQueries($sql){
    include('connection.php');

    $query = mysqli_query($con, $sql);
    $con->close();
    return $result = $this->defaultQuery();
  }

  function displayResult($result){
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
  }
  function ordersForm(){
    include'../view/ordersInput.php';
  }
  function ordersTable(){
    $result = $this->defaultQuery();
    $this->displayResult($result);
  }
  function addOrder($ocid, $oeid){
    $result = $this->allQueries("INSERT INTO orders VALUES('','$ocid','$oeid')");
    $this->displayResult($result);
  }
  function deleteOrder($onum){
    $result = $this->allQueries("DELETE FROM orders WHERE onum=$onum");
    $this->displayResult($result);
  }
  function updateOrder($onum, $ocid, $oeid){
    $result = $this->allQueries("UPDATE orders SET cid='$ocid', eid='$oeid' WHERE onum=$onum");
    $this->displayResult($result);
  }
  function searchOrder($onum){
    include('connection.php');

    $sql = "SELECT * FROM orders WHERE onum=$onum";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowordmast(this)';
    $result = '';
    $col = mysqli_num_fields($query);

    while ($row=mysqli_fetch_row($query)) {
      $result .= '<tr onclick="'.$page1.'">';
      for ($i=0; $i < $col ; $i++) {
        $result .='<td>'.$row[$i].'</td>';
      }
      $result .= '</tr>';
    }
    $this->displayResult($result);
    $con->close();
  }

  function getOrder($eid){
    include('connection.php');

    $sql = "SELECT * FROM orders WHERE eid=$eid";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowordmast(this)';
    $result = '';
    $col = mysqli_num_fields($query);

    while ($row=mysqli_fetch_row($query)) {
      $result .= '<tr onclick="'.$page1.'">';
      for ($i=0; $i < $col ; $i++) {
        $result .='<td>'.$row[$i].'</td>';
      }
      $result .= '</tr>';
    }
    $this->displayResult($result);
    $con->close();
  }

}
 ?>
