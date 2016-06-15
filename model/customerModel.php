<?php
session_start();
include 'class/Customers.php';

if ($_SESSION['menu'] == 'customer' || $_SESSION['menu'] == 'viewAllCustomers') {
  $obj = new Customers();
  $obj->customerForm();
  
  if (isset($_SESSION['empEid'])) {
    $obj->getCustomer($_SESSION['empEid']);
  }
  elseif (isset($_SESSION['ordCid'])) {
    $obj->searchCustomer($_SESSION['ordCid']);
  }else {
    $obj->customerTable();
  }
}

if ($_SESSION['menu'] == 'addCustomer') {
  $obj = new Customers();
  $obj->customerForm();
  $obj->addCustomer($_SESSION['cfname'], $_SESSION['clname'],$_SESSION['ceid'], $_SESSION['ctype']);
}
if ($_SESSION['menu'] == 'deleteCustomer') {
  $obj = new Customers();
  $obj->customerForm();
  $obj->deleteCustomer($_SESSION['cid']);
}
if ($_SESSION['menu'] == 'updateCustomer') {
  $obj = new Customers();
  $obj->customerForm();
  $obj->updateCustomer($_SESSION['cid'], $_SESSION['cfname'], $_SESSION['clname'],$_SESSION['ceid'], $_SESSION['ctype']);
}
if ($_SESSION['menu'] == 'searchCustomer') {
  $obj = new Customers();
  $obj->customerForm();
  $obj->searchCustomer($_SESSION['cid']);
}


?>
