<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="card-body">
		<table class="table table-condensed table-hover">
			<tr>
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>Mensaje</th>
			</tr>
			<?php
			include "../db/connection.php";
			$sql = "SELECT * FROM contacts order by id DESC";
			$result = pg_query($connection, $sql);
			$data = pg_fetch_all($result);
			if ($data > 0) {
				foreach ($data as $row) {
					echo "<tr>";
					echo "<td>" . $row['name_contact'] . "</td>";
					echo "<td>" . $row['phone'] . "</td>";
					echo "<td>" . $row['message'] . "</td>";
				}
			}
			?>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
