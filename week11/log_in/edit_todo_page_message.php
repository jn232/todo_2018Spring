<?php include "../view/header.php"; ?>
<main>

		<h1> Please edit your task here </h1>
    
    
		<form action="index.php" method="post">
			<input type="hidden" name="action" value='edit_message'>  
         
      Message: <input type="text" name="message">
      
      <input type="submit" value="Edit">
    </form>

</main>

<?php include '../view/footer.php'; ?>