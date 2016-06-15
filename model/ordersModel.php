<?php
session_start();
include 'class/Orders.php';
include 'class/Table.php';

if ($_SESSION['menu'] == 'orders' || $_SESSION['menu'] == 'viewAllOrders') {
  $obj = new Orders();
  $obj->ordersForm();
  if (isset($_SESSION['empEid'])) {
    $obj->getOrder($_SESSION['empEid']);
  }
  elseif(isset($_SESSION['custEid'])) {
    $obj->getOrder($_SESSION['custEid']);
  }else {
    $obj->ordersTable();
  }
}
if ($_SESSION['menu'] == 'addOrder') {
    $obj = new Orders();
    $obj->ordersForm();
    $obj->addOrder($_SESSION['ocid'], $_SESSION['oeid']);
}
if ($_SESSION['menu'] == 'deleteOrder') {
  $obj = new Orders();
  $obj->ordersForm();
  $obj->deleteOrder($_SESSION['onum']);
}
if ($_SESSION['menu'] == 'updateOrder') {
  $obj = new Orders();
  $obj->ordersForm();
  $obj->updateOrder($_SESSION['onum'],$_SESSION['ocid'], $_SESSION['oeid']);
}
if ($_SESSION['menu'] == 'searchOrder') {
  $obj = new Orders();
  $obj->ordersForm();
  $obj->searchOrder($_SESSION['onum']);
}
if ($_SESSION['menu'] == 'getOrder') {
  $obj = new Orders();
  $obj->ordersForm();
  $table = new Table();
  $table->getOrders($_SESSION['orderEid']);


}


?>
