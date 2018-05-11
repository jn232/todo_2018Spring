<?php 
require("../model/database.php");
require("../model/todos_db.php");

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'create_account';
	}
}
    
    
if ($action == 'create_account') {
  include('create_account.php');
}else if ($action == 'init_user') {
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
	$phonenumber = filter_input(INPUT_POST, 'phonenumber');
	$birthday_date = filter_input(INPUT_POST, 'birthday_date');
	$password = filter_input(INPUT_POST, 'password');
	$gender = filter_input(INPUT_POST, 'gender');
	add_a_user($email, $fname, $lname, $phonenumber, $birthday_date, $gender, $password);
  header("Location: .?action=todo_list&email=$email");  
  
} else if ($action == 'todo_list') {
  $email = $_GET['email'];
  $nameofuser = get_name($email);
  $entireuseraccountdata = get_user($email);
  $entiretodolist = get_todos($email);
  session_start();
  $_SESSION['alldata'] = $entireuseraccountdata;
  $_SESSION['name'] = $nameofuser;
  $_SESSION['todo'] = $entiretodolist;
  include('../log_in/todo_list_main_page.php');
}

?>