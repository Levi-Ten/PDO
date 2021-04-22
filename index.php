<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>to-do</title>
</head>
<body>
	<div class="container">	
			<h1>to-do list</h1>
			<form action="add.php" method="post">
				<input type="text" name="task" id="task" 
				placeholder="need to do" class="form-control">
				<button type="submit" name="sendTask" class="btn btn-warning">Send</button>
			</form>
			<?php  
			require 'config.php';
			
			echo '<ul>';
			$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
			
			while ($row = $query->fetch(PDO::FETCH_OBJ)) {
				echo '<li>'.$row->task.'<a href="delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
			}
				echo '</ul>';
			?>	
	</div>	
</body>
</html>

