

<div class="well" style="height: 395px; overflow: scroll;">
		<table class="table table-condensed" >
			<tr>
                <th>Nombre</th>
                <th>Teléfono</th> 
                <th>Mensaje</th> 
				<th>
					<a class="btn btn-success" href="../Categories/register.php" class="submenu1" ><span class="glyphicon glyphicon-plus"></span></a>
					<a class="btn btn-info" href="../Categories" class="submenu1"><span class="glyphicon glyphicon-refresh"></span></a>
				</th>
			</tr>
            <?php
            include "../db/connection.php";
            $sql = "SELECT * FROM contacts";
            $result = pg_query($connection, $sql);
            $data = pg_fetch_all($result);
			if ($data > 0) {
				foreach ($data as $row) {
					echo "<tr>";
                    echo "<td>" . $row['name_contact'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
					echo "<td>" .
					"<a class='btn btn-warning' href='/Categories/edit.php?id=" . $row['id'] . "'>"."<span class='glyphicon glyphicon-pencil'>"."</span>"."</a>"." ".
					"<a class='btn btn-danger' href='/Categories/delete.php?id=" . $row['id'] . "'> "." <span class='glyphicon glyphicon-remove'>"."</span>"."</a>".
					"</td>";
					echo "</tr>";
				}
			}
			?>
		</table>
	</div>