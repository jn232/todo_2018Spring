<?php include "../view/header.php"; ?>
<main>

		<h1> Please Log-in </h1>
    
    
		<form action="index.php" method="post">
			<input type="hidden" name="action" value='check_credentials'>  
         
      E-mail: <input type="email" name="email">
      
      
      Password: <input type="password" name="password">
      
      <input type="submit" value="Log-in!">
    </form>

</main>

<?php include '../view/footer.php'; ?>