<?php
session_start();
$_SESSION['menu'] = $_POST['menu'];

switch ($_SESSION['menu']) {
	case 'employee':
		header("Location:../model/employeeModel.php");
		break;
	case 'viewAllEmployees':
		unset($_SESSION['custEid']);
		unset($_SESSION['ordEid']);
		unset($_SESSION['empEid']);
		header("Location:../model/employeeModel.php");
		break;
	case 'customer':
		header("Location:../model/customerModel.php");
		break;
	case 'viewAllCustomers':
		unset($_SESSION['custEid']);
		unset($_SESSION['ordEid']);
		unset($_SESSION['empEid']);
		header("Location:../model/customerModel.php");
		break;
	case 'orders':
		header("Location:../model/ordersModel.php");
		break;
	case 'viewAllOrders':
		unset($_SESSION['custEid']);
		unset($_SESSION['ordEid']);
		unset($_SESSION['empEid']);
		header("Location:../model/ordersModel.php");
		break;
	case 'about':
		header("Location:../model/aboutModel.php");
		break;
	case 'addEmployee':
		$_SESSION['efname'] = $_POST['efname'] ;
		$_SESSION['elname'] = $_POST['elname'] ;
		$_SESSION['etype'] = $_POST['etype'] ;
		header("Location:../model/employeeModel.php");
		break;
	case 'deleteEmployee':
		$_SESSION['eid'] = $_POST['eid'];
		header("Location:../model/employeeModel.php");
		break;
	case 'updateEmployee':
		$_SESSION['eid'] = $_POST['eid'];
		$_SESSION['efname'] = $_POST['efname'] ;
		$_SESSION['elname'] = $_POST['elname'] ;
		$_SESSION['etype'] = $_POST['etype'] ;
		header("Location:../model/employeeModel.php");
		break;
	case 'searchEmployee':
		$_SESSION['eid'] = $_POST['eid'];
		header("Location:../model/employeeModel.php");
		break;

	case 'addCustomer':
		$_SESSION['cfname'] = $_POST['cfname'] ;
		$_SESSION['clname'] = $_POST['clname'] ;
		$_SESSION['ceid'] = $_POST['ceid'] ;
		$_SESSION['ctype'] = $_POST['ctype'] ;
		header("Location:../model/customerModel.php");
		break;
	case 'deleteCustomer':
		$_SESSION['cid'] = $_POST['cid'];
		header("Location:../model/customerModel.php");
		break;
	case 'updateCustomer':
		$_SESSION['cid'] = $_POST['cid'];
		$_SESSION['cfname'] = $_POST['cfname'] ;
		$_SESSION['clname'] = $_POST['clname'] ;
		$_SESSION['ceid'] = $_POST['ceid'] ;
		$_SESSION['ctype'] = $_POST['ctype'] ;
		header("Location:../model/customerModel.php");
		break;
	case 'searchCustomer':
		$_SESSION['cid'] = $_POST['cid'];
		header("Location:../model/customerModel.php");
		break;

	case 'addOrder':
		$_SESSION['ocid'] = $_POST['ocid'];
		$_SESSION['oeid'] = $_POST['oeid'];
		header("Location:../model/ordersModel.php");
		break;
	case 'deleteOrder':
		$_SESSION['onum'] = $_POST['onum'];
		header("Location:../model/ordersModel.php");
		break;
	case 'updateOrder':
		$_SESSION['onum'] = $_POST['onum'];
		$_SESSION['ocid'] = $_POST['ocid'];
		$_SESSION['oeid'] = $_POST['oeid'];
		header("Location:../model/ordersModel.php");
		break;
	case 'searchOrder':
		$_SESSION['onum'] = $_POST['onum'];
		header("Location:../model/ordersModel.php");
		break;

	case 'empTable':
		$_SESSION['empEid'] = $_POST['eid'];
		break;
	case 'custTable':
		$_SESSION['custEid'] = $_POST['eid'];
		break;
	case 'orderTable':
		$_SESSION['ordEid'] = $_POST['eid'];
		$_SESSION['ordCid'] = $_POST['cid'];
		break;
}

?>
