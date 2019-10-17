<?php 
session_start();
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO task (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: listactivity.php');
		}
	}	

    // ...
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
    
        mysqli_query($db, "DELETE FROM task WHERE id=".$id);
        header('location: listactivity.php');
    }
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="list.css">
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Activity</h2>
		<form method="post" action="listactivity.php" class="input_form">
    <?php if (isset($errors)) { ?>
        <p><?php echo $errors; ?></p>
	<?php } ?>
	<input type="text" name="task" class="task_input" placeholder="Enter your Activity here. . .">
	<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button></br>
	<div class="cat">
	<tr>
	  <li style="width:45%">No</li>
	  <li style="width:49%;">Tasks</li>
	  <li>Action</li>
	</tr>
	</div>
    </div>
	</form>

  <div class="yeet">
    <table>
    	<thead>
    	</thead>
    
    	<tbody>
    		<?php 
    		// select all task if page is visited or refreshed
    		$task = mysqli_query($db, "SELECT * FROM task");
    
    		$i = 1; while ($row = mysqli_fetch_array($task)) { ?>
    			<tr>
    				<td class="nu"> <?php echo $i; ?> </td>
    				<td class="task"> <?php echo $row['task']; ?> </td>
    				<td class="delete"> 
    					<a href="listactivity.php?del_task=<?php echo $row['id'] ?>">x</a> 
    				</td>
    			</tr>
    		<?php $i++; } ?>	
    	</tbody>
	</table>
  </div>
<div class="logout">
    <a href="index.php?logout='1'">logout</a>
</div> 
</body>
</html>