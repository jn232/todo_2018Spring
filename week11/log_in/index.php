<?php

require('../model/database.php');
require('../model/todos_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'log_in';
    }
}  

if ($action == 'log_in') {
    include('log_in_screen.php');
} else if ($action == 'check_credentials') {

	  $email = filter_input(INPUT_POST, 'email'); 
	  $password = filter_input(INPUT_POST, 'password');
    $valid_password = get_password_valid($email);
    if ($password == $valid_password){
        header("Location: .?action=go_to_todo_list&email=$email");
    } else {
          include('../errors/error.php');
    }
}else if ($action == 'go_to_todo_list') {
    $email = $_GET['email'];
    $nameofuser = get_name($email);
    $entireuseraccountdata = get_user($email);
	  $entiretodolist = get_todo_array($email);
    session_start();
    $_SESSION['alldata'] = $entireuseraccountdata;
    $_SESSION['name'] = $nameofuser;
    $_SESSION['todo'] = $entiretodolist;
  
	  include('todo_list_main_page.php');

} else if ($action == 'delete_todo') {
  session_start();
  $id = $_SESSION['id'];
  delete_todo($id);
  $email = $_SESSION['owneremail'];
  header("Location: .?action=go_to_todo_list&email=$email");
 
}else if ($action == 'complete_todo') {
  session_start();
  $id = $_SESSION['id'];
  complete_todo($id);
  $email = $_SESSION['owneremail']; 
  header("Location: .?action=go_to_todo_list&email=$email");
} 
else if ($action == 'edit_todo') {
  include('edit_todo_page_message.php');
  
} else if ($action == 'edit_message') {
  session_start();
  $id = $_SESSION['id'];
  $message = filter_input(INPUT_POST, 'message'); 
  edit_todo_message($id, $message);
  $email = $_SESSION['owneremail']; 
  header("Location: .?action=go_to_todo_list&email=$email");
}else if ($action == 'edit_todo_date') {
  include('edit_todo_page_date.php');
  
}else if ($action == 'edit_date') {
  session_start();
  $id = $_SESSION['id'];
  $date = filter_input(INPUT_POST, 'date'); 
  edit_todo_message($id, $date);
  $email = $_SESSION['owneremail']; 
  header("Location: .?action=go_to_todo_list&email=$email");
}
else if ($action == 'edit_todo_date') {
  include('edit_todo_page_date.php');
  
}else if ($action == 'edit_date') {
  session_start();
  $id = $_SESSION['id'];
  $date = filter_input(INPUT_POST, 'date'); 
  edit_todo_message($id, $date);
  $email = $_SESSION['owneremail']; 
  header("Location: .?action=go_to_todo_list&email=$email");
}

else if ($action == 'add_todo') {
  include('add_todo_page.php');
  
}else if ($action == 'add') {
  session_start();
  $email = $_SESSION['owneremail'];
  $message = filter_input(INPUT_POST, 'message'); 
  $date = filter_input(INPUT_POST, 'date'); 
  add_todo($email,$message,$date);  
  header("Location: .?action=go_to_todo_list&email=$email");
}



?>