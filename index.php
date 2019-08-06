<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro.com">eliasngumbipro</a>
" rel="nofollow">https://eliasngumbipro.com">eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Count A Word In Specific String</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="POST" action="">
				<label>Enter a String</label>
				<div class="form-group">
					<textarea class="form-control" required="required" style="resize:none; height:100px;" name="words"></textarea>
				</div>
				<center><button class="btn btn-primary" name="count">Count Words</button></center>
			</form>
 
			<?php include'count.php'?>
		</div>
	</div>
</body>
</html>
