<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Balance Enquiry</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to for Balance Enquiry</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="Balance_Enquiry">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    if(isset($_POST['Balance_Enquiry']))
    {
		//echo $_POST['SSN']."<br>";

		require('config.php');

		 $sql = "SELECT Account_id,Customer_id,Account_type,SSN,Initial_deposit FROM Account where SSN ='".$_POST['SSN']."'";

		$users = $mysqli->query($sql);

        echo "<table border=\"3\" style=\"width: 50%; height: 20%\">";
        echo "<tr align=\"center\">";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Account_id"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Customer_id"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Account_type"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."SSN"."</td>";
		echo "<td style=\"border-bottom: 1px black solid;\">"."Initial_deposit"."</td>";
		echo "</tr>";

		echo "<br><br>";

		while($user = $users->fetch_assoc())
		{
            echo "<tr align=\"center\">";
            echo "<td style=\"background: 1px black solid;\">".$user['Account_id']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Customer_id']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Account_type']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['SSN']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Initial_deposit']."</td>";
            echo "</tr>";
		}

        echo "</table>";

		$mysqli -> close();
	}
?>
