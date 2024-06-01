<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">View Customer Info</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to view Customer Details</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="customer">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    if(isset($_POST['customer']))
    {

		//echo $_POST['SSN']."<br>";

		require('config.php');

		 $sql = "SELECT Customer_name,SSN,Gender,Date_of_Birth,Address,City,State,PIN,Password,Mobile_Number,Email FROM Customer where SSN ='".$_POST['SSN']."'";

		$users = $mysqli->query($sql);

		echo "<br><br>";

		echo "<table border=\"3\" style=\"width: 50%; height: 20%\">";
		echo "<tr align=\"center\">";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Customer_name"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."SSN"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Gender"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Date_of_Birth"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Address"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."City"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."PIN"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Password"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Mobile_Number"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Email"."</td>";
		echo "</tr>";

		while($user = $users->fetch_assoc())
		{
			echo "<tr align=\"center\">";
			echo "<td style=\"background: 1px black solid;\">".$user['Customer_name']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['SSN']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Gender']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Date_of_Birth']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Address']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['City']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['PIN']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Password']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Mobile_Number']."</td>";
			echo "<td style=\"background: 1px black solid;\">".$user['Email']."</td>";
			echo "</tr>";
		}

		echo "</table>";

		$mysqli -> close();
	}
?>
