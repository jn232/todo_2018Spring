<?php

class User {
	private $id;
	private $email;
	private $fname;
	private $lname;
	private $phone;
	private $birthday;
	private $gender;
	private $password;
	
	public function getId(){
		return $this->id;
		
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getEmail(){
		return $this->email;
		
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getFname(){
		return $this->fname;
		
	}
	
	public function setFname($fname){
		$this->fname = $fname;
	}
	
	public function getLname(){
		return $this->lname;
		
	}
	
	public function setLname($lname){
		$this->lname = $lname;
	}
	
	public function getPhone(){
		return $this->phone;
		
	}
	
	public function setPhone($phone){
		$this->phone = $phone;
	}
	
	public function getBirthday(){
		return $this->birthday;
		
	}
	
	public function setBirthday($birthday){
		$this->birthday = $birthday;
	}
	
	public function getGender(){
		return $this->gender;
		
	}
	
	public function setGender($gender){
		$this->gender = $gender;
	}
	
	public function getPassword(){
		return $this->password;
		
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function displayUserRow($id,$email,$fname,$lname,$phone,$birthday,$gender,$password){
		<html>
		<head>
		<style>
		table, th, td {
			border: 1px solid black;
		}
		</style>
		</head>
		<body>

		<table>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
				<th>Birthday</th>
				<th>Gender</th>
				<th>Password</th>
			</tr>
			<tr>
				<td>$id</td>
				<td>$email</td>
				<td>$fname</td>
				<td>$lname</td>
				<td>$phone</td>
				<td>$birthday</td>
				<td>$gender</td>
				<td>$password</td>
			</tr>
		</table>

		</body>
		</html>
		
?>
