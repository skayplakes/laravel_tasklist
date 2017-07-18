<!DOCTYPE html>
<html lang="en">
<head>

  <title>ToDo List</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <form class="form-horizontal" method="POST" action="">
  	<div class="panel panel-default">
	  <div class="panel-heading">New Task</div>

	  <div class="panel-body">
	  	<div class="col-sm-10">
	  		<label class="control-label col-sm-2">Task:</label>
		  	<input type="text" class="form-control" name="taskName">
		</div>

		<div class="col-sm-10">
	  		<input type="text" class="form-control" name="taskDesc">
	  	</div>

	  	<div class="container-fluid">
	  		<input type="submit" name="addTask" value="Add Task">
	  	</div>
	  </div>
	</div>

  </form> 
</div>

</body>
</html>