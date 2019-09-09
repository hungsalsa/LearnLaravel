<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
				<?= $thongtin ?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Ten mon hoc</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Lap trinh Laravel</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Lap trinh Android</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Lap trinh Mysql</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Lap trinh PHP</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Lap trinh IOS</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>