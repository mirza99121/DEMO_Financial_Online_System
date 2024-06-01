<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Business To Invest Entry form</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter Business To Invest Info</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
         <tr>
 		    <td>Month:
 			<select name="Month">
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="November">November</option>
                 <option value="December">December</option>
             </select>
         </td>
         <tr>
 		    <td>Year:
 			<select name="Year">
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 <option value="2025">2025</option>
                 <option value="2026">2026</option>
                 <option value="2027">2027</option>
             </select>
         </td>
        <tr>
		    <td>Ammount_To_Invest:<input type="text" name="Ammount_To_Invest" id="Ammount_To_Invest"><br></td>
        </tr>
 		<tr>
		    <td>Fixed_Monthly_Interest_Rate (%):<input type="text" name="Fixed_Monthly_Interest_Rate" id="Fixed_Monthly_Interest_Rate" value="3"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="account">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['account']))
    {

		//echo $_POST['SSN']."<br>";
		//echo $_POST['Month']."<br>";
		//echo $_POST['Year']."<br>";
		//echo $_POST['Ammount_To_Invest']."<br>";
		//echo $_POST['Fixed_Monthly_Interest_Rate']."<br>";

        require('config.php');

        $sql = "INSERT INTO Business_To_Invest (SSN,Month,Year,Ammount_To_Invest,Fixed_Monthly_Interest_Rate) VALUES ('$_POST[SSN]','$_POST[Month]','$_POST[Year]','$_POST[Ammount_To_Invest]','$_POST[Fixed_Monthly_Interest_Rate]')";

        $users = $mysqli->query($sql);

        $mysqli -> close();

        echo "Business To Invest Info Inserted ..."."<br>";
    }
?>
