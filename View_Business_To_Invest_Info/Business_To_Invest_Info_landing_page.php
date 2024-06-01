<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Business To Invest Info</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to see Business To Invest Info</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="Business_To_Invest_Info">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    if(isset($_POST['Business_To_Invest_Info']))
    {

		//echo $_POST['SSN']."<br>";

		require('config.php');

		 $sql = "SELECT SSN,Month,Year,Ammount_To_Invest,Fixed_Monthly_Interest_Rate FROM Business_To_Invest where SSN ='".$_POST['SSN']."'";

		$users = $mysqli->query($sql);

        echo "<table border=\"3\" style=\"width: 50%; height: 20%\">";
        echo "<tr align=\"center\">";
        echo "<td style=\"border-bottom: 1px black solid;\">"."SSN"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Month"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Year"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Ammount_To_Invest"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Fixed_Monthly_Interest_Rate"."</td>";
        echo "</tr>";

		echo "<br><br>";

		while($user = $users->fetch_assoc())
		{
            echo "<tr align=\"center\">";
            echo "<td style=\"background: 1px black solid;\">".$user['SSN']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Month']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Year']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Ammount_To_Invest']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Fixed_Monthly_Interest_Rate']."</td>";
            echo "</tr>";
		}

        echo "</table>";

		$mysqli -> close();
	}
?>
