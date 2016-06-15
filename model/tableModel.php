<?php
session_start();
include 'class/Table.php';

if ($_SESSION['menu'] == 'emptable') {
  $obj = new Table();
  $obj->getCustOrder($_SESSION['eid']);
}
 ?>
