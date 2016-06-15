<?php
class Customers{
  function defaultQuery(){
    include('connection.php');

    $sql = "SELECT * FROM customers";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowcustmast(this)';
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

  function searchCustomer($cid){
    include('connection.php');

    $sql = "SELECT * FROM customers WHERE cid=$cid";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowcustmast(this)';
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

  function displayResult($result){
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
  }

  function customerForm(){
    include'../view/customerInput.php';
  }
  function customerTable(){
    $result = $this->defaultQuery();
    $this->displayResult($result);
  }
  function addCustomer($cfname, $clname, $ceid, $ctype){
    $result = $this->allQueries("INSERT INTO customers VALUES('','$cfname','$clname','$ctype','$ceid')");
    $this->displayResult($result);
  }
  function deleteCustomer($cid){
    $result = $this->allQueries("DELETE FROM customers WHERE cid=$cid");
    $this->displayResult($result);

  }
  function updateCustomer($cid, $cfname, $clname, $ceid, $ctype){
    $result = $this->allQueries("UPDATE customers SET cfname='$cfname', clname='$clname', ctype='$ctype', eid='$ceid' WHERE cid=$cid");
    $this->displayResult($result);
  }

  function getCustomer($eid){
    include('connection.php');

    $sql = "SELECT * FROM customers WHERE eid='$eid'";
    $query = mysqli_query($con, $sql);

    $page1 = 'getrowcustmast(this)';
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
