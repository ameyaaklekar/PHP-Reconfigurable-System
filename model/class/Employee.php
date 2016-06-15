<?php
class Employee{
  function defaultQuery(){
    include('connection.php');

    $sql = "SELECT * FROM employee";
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
    return $result;
    $con->close();

  }

  function allQueries($sql){
    include('connection.php');

    $query = mysqli_query($con, $sql);
    $con->close();
    return $result = $this->defaultQuery();
  }

  function searchEmployee($eid){
    include('connection.php');

    $sql = "SELECT * FROM employee WHERE eid=$eid";
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
							</tr>
						</thead>';
    echo "<tbody>";
    echo $result;
    echo "</tbody>";
		echo '</table>';
  }

  function employeeForm(){
    include'../view/employeeInput.php';
  }

  function employeeTable(){
    $result = $this->defaultQuery();
    $this->displayResult($result);
  }

  function addEmployee($efname, $elname, $etype){
    $result = $this->allQueries("INSERT INTO employee VALUES('','$efname','$elname','$etype')");
    $this->displayResult($result);
  }

  function deleteEmployee($eid){
    $result = $this->allQueries("DELETE FROM employee WHERE eid=$eid");
    $this->displayResult($result);

  }
  function updateEmployee($eid,$efname, $elname, $etype){
    $result = $this->allQueries("UPDATE employee SET efname='$efname', elname='$elname', etype='$etype' WHERE eid=$eid");
    $this->displayResult($result);
  }

}
 ?>
