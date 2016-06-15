<?php
session_start();
include 'class/Employee.php';
include 'class/Table.php';

if ($_SESSION['menu'] == 'employee' || $_SESSION['menu'] == 'viewAllEmployees') {
  $obj = new Employee();
  $obj->employeeForm();

  if (isset($_SESSION['custEid'] )) {
    $obj->searchEmployee($_SESSION['custEid']);
  }
  elseif (isset($_SESSION['ordEid'])) {
    $obj->searchEmployee($_SESSION['ordEid']);
  }else {
    $obj->employeeTable();
  }
}

if ($_SESSION['menu'] == 'addEmployee') {
    $obj = new Employee();
    $obj->employeeForm();
    $obj->addEmployee($_SESSION['efname'], $_SESSION['elname'], $_SESSION['etype']);

}
if ($_SESSION['menu'] == 'deleteEmployee') {
  $obj = new Employee();
  $obj->employeeForm();
  $obj->deleteEmployee($_SESSION['eid']);
}
if ($_SESSION['menu'] == 'updateEmployee') {
  $obj = new Employee();
  $obj->employeeForm();
  $obj->updateEmployee($_SESSION['eid'],$_SESSION['efname'], $_SESSION['elname'], $_SESSION['etype']);
}
if ($_SESSION['menu'] == 'searchEmployee') {
  $obj = new Employee();
  $obj->employeeForm();
  $obj->searchEmployee($_SESSION['eid']);
}

?>
