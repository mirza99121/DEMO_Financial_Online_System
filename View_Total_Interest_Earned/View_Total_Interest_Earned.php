<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">View Total Interest Earned from Business</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to see Total Interest Earned</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="Total_Interest_Earned">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['Total_Interest_Earned']))
    {

		//echo "SSN: ".$_POST['SSN']."<br><br><br>";

        require('config.php');

        $sql = "SELECT Row_id,SSN,Month,Year,Ammount_To_Invest,Fixed_Monthly_Interest_Rate FROM Business_To_Invest where SSN='".$_POST['SSN']."'";
        $users = $mysqli->query($sql);

		$Total_Ammount_Invested = 0;
		$Month_Count = 0;
		$Fixed_Monthly_Interest_Rate;


		//echo "****************************************************************"."<br>";
		//echo "<p style=\"color:blue;font-size:100%;\">"."Row_id, SSN, Year, Ammount Invested ($), Fixed Monthly Interest Rate (%)"."</p>";

		echo "<br><br><br>";

	    echo "<table border=\"3\" style=\"width: 50%; height: 20%\">";
        echo "<tr align=\"center\">";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Row_id"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."SSN"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Year"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Ammount Invested ($)"."</td>";
        echo "<td style=\"border-bottom: 1px black solid;\">"."Fixed Monthly Interest Rate (%)"."</td>";
        echo "</tr>";

        while($user = $users->fetch_assoc())
        {
			//echo $user['Row_id'].", ".$user['SSN'].", ".$user['Month'].", ".$user['Year'].", ".$user['Ammount_To_Invest'].", ".$user['Fixed_Monthly_Interest_Rate']."<br>";

            echo "<tr align=\"center\">";
            echo "<td style=\"background: 1px black solid;\">".$user['Row_id']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['SSN']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Year']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Ammount_To_Invest']."</td>";
            echo "<td style=\"background: 1px black solid;\">".$user['Fixed_Monthly_Interest_Rate']."</td>";
            echo "</tr>";

			$Fixed_Monthly_Interest_Rate = $user['Fixed_Monthly_Interest_Rate'];

			$Total_Ammount_Invested = $user['Ammount_To_Invest'] + $Total_Ammount_Invested;

			$Month_Count = $Month_Count + 1;
		}

        echo "</table>";

        $mysqli->close();
		//echo "****************************************************************"."<br>";

		echo "<br><br><br>";
        echo "Total Ammount Invested: ".$Total_Ammount_Invested."<br>";
        echo "Fixed Monthly Interest Rate (%): ".$Fixed_Monthly_Interest_Rate."<br>";
        echo "Total Month Count: ".$Month_Count."<br>";

        $Total_Interest_Earned = ($Total_Ammount_Invested/$Month_Count)*($Fixed_Monthly_Interest_Rate/100)*$Month_Count;

        echo "<br>";
		echo "<p style=\"color:red;font-size:210%;\">"."Total Interest Earned from Business in ".$Month_Count." Months = $".$Total_Interest_Earned."</p>"."<br>";

    }
?>
