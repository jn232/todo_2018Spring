<?php

class UsersDB {
	public static getUsers(){
		SELECT * FROM jn232.accounts;
	}
	public static insertUsers($id,$email,$fname,$lname,$phone,$birthday,$gender,$password){
	INSERT INTO jn232.accounts (id,email,fname,lname,phone,birthday,gender,password) VALUES ($id,$email,$fname,$lname,$phone,$birthday,$gender,$password);
	}
	
	public static updatePassword($id,$password){
	SELECT * FROM jn232.accounts;
	UPDATE accounts SET password = "$password" WHERE id="id";
	}
	
	public static deleteUser($id){
	SELECT * FROM jn232.accounts;
	DELETE FROM accounts WHERE id="$id";
	}

?>
