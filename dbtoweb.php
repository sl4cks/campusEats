<?php
	$db_host = 'campuseatsdb.cbbdidcdihbq.us-east-1.rds.amazonaws.com'; //server name
	$db_username = 'campuseats';
	$db_password = 'campuseats1';
	$db_name = 'campuseats';
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
	}
	
	$sql = 'SELECT * FROM FormsDatabase';
	$query = mysqli_query($conn, $sql);
	
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
?>

<html>
<head> 
	<title> INSERT TITLE HERE </title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1> ACTIVE REQUESTS TO DO: </h1>
	<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
				<th>Number</th>
				<th>Order Name</th>
				<th>Order Location</th>
				<th>Delivery Location</th>
				
			</tr>
		</thead>
		<tbody>
		<?php //PHP
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['orderLocation'].'</td>
					<td>'.$row['delivLocation'].'</td>
					<td>'.$row['dateID'].'</td>
				</tr>';
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4"></th>
				<th></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>	