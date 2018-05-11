<?php include "../view/header.php"; ?>
<main>

		<h1> Please edit your due date here </h1>
    
    
		<form action="index.php" method="post">
			<input type="hidden" name="action" value='edit_date'>  
         
      Date: <input type="date" name="date">
      
      <input type="submit" value="Edit">
    </form>

</main>

<?php include '../view/footer.php'; ?>