<?php include "../view/header.php"; ?>
<main>

		<h1> Please add your task and item here </h1>
    
    
		<form action="index.php" method="post">
			<input type="hidden" name="action" value='add'>  
      
      Message: <input type="text" name="message">   
      Date: <input type="date" name="date">
      
      <input type="submit" value="Add">
    </form>

</main>

<?php include '../view/footer.php'; ?>