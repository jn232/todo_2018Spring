<?php include "../view/header.php"; ?>
<main>

		<h1> Please Sign Up </h1>
		<form action="index.php" method="post">
			<input type="hidden" name="action" value='init_user'>

      E-mail: <input type="email" name="email"><br>
      First Name: <input type="text" name="fname"><br>
      Last Name: <input type="text" name="lname"><br>
      Phone Number: <input type="text" name="phonenumber"><br>
      Birthday: <input type="date" name="birthday_date"><br>
      Password: <input type="password" name="password"><br>
      Gender: <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>

      <input type="submit" value="Sign-up!">
      
    </form>

</main>

<?php include '../view/footer.php'; ?>