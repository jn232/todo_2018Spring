<?php 

session_start();

include "../view/header.php"; 

?>

<main>
		<h1> Welcome to your personal todo list, 
    
    <?php echo $_SESSION['name']; ?> 
       
    </h1>
    
   <?php $arrays = $_SESSION['todo']; ?>
   <?php foreach ($arrays as $array): ?>
   <table style="width:50%">
   <tr>
      <th> ID </th>
			<td><?php echo $array['id'];
      $_SESSION['id'] = $array['id'];
      $_SESSION['owneremail'] = $array['owneremail'];
       ?></td>
      <th> Task </th>
			<td><?php echo $array['message'];
      $_SESSION['message'] = $array['message']; ?></td>
      <th> Create Date </th>
			<td><?php echo $array['createddate']; 
      $_SESSION['createddate'] = $array['createddate']; ?></td>
      <th> Due Date </th>
			<td><?php echo $array['duedate']; 
      $_SESSION['duedate'] = $array['duedate']; ?></td>
      <th> Complete</th>
			<td><?php echo $array['isdone']; 
      $_SESSION['isdone'] = $array['isdone']; ?></td>
    
      <td>
      <form action="index.php" method="post">
			<input type="hidden" name="action" value='edit_todo'>  
  
      
      <input type="submit" value="Edit Message">
    </form>
    </td>
    
    <td>
      <form action="index.php" method="post">
			<input type="hidden" name="action" value='edit_todo_date'>  
  
      
      <input type="submit" value="Edit Due Date">
    </form>
    </td>
    
    <td>
      <form action="index.php" method="post">
			<input type="hidden" name="action" value='complete_todo'>  
  
      
      <input type="submit" value="Completed!">
    </form>
    </td>
    
    
    <td>
      <form action="index.php" method="post">
			<input type="hidden" name="action" value='delete_todo'>  
  
      
      <input type="submit" value="Delete">
    </form>
    </td>
    
    
    
    </tr>  
    <?php endforeach; ?>


	</table>


      <form action="index.php" method="post">
			<input type="hidden" name="action" value='add_todo'>  
  
      
      <input type="submit" value="Add Item">
    </form>
    
    

</main>

<?php include '../view/footer.php'; ?>