<!DOCTYPE html>
<html>
<body>

<?php
mysql_connect('localhost', 'root', '');

mysql_select_db('admin');

$sql="SELECT * FROM useraccount";

$users= mysql_query($sql);


?> 
    <head>
        <title>Administrator page</title>
    </head>
    <body>

        <fieldset>
            <legend>Welcome <?php echo $admin->get_name(); ?></legend>
                <p>
                    Here are some of the basic informations
                </p>
				
				<table width= "600" border="1" cellpaddin="1" cellspacing="1">
				<tr>
				
				<th>Userid</th>
				<th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Role</th>
				<th>Email</th>
				<th>Address1</th>
				<th>Address2</th>
				<th>City</th>
				<th>State</th>
				<th>Postal Code</th>
				<tr>
				
				<?php
				
				while($useraccount=mysql_fetch_assoc($users))[
				
					echo "<tr>";
					
					echo "<td>".$useraccount['userid']."</td>";
					
					echo "<td>".$useraccount['username']."</td>";
					
					echo "<td>".$useraccount['password']."</td>";
					
					echo "<td>".$useraccount['name']."</td>";
					
					echo "<td>".$useraccount['contact']."</td>";
					
					echo "<td>".$useraccount['role']."</td>";
					
					echo "<td>".$useraccount['email']."</td>";
					
					echo "<td>".$useraccount['address1']."</td>";
					
					echo "<td>".$useraccount['address2']."</td>";
					
					echo "<td>".$useraccount['city']."</td>";
					
					echo "<td>".$useraccount['state']."</td>";
					
					echo "<td>".$useraccount['postalcode']."</td>";
					
					echo "</tr>";
				
				]
				?>
				</table>
				
        </fieldset>
        <p>
            <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" />
        </p>
    </body>
</html>
