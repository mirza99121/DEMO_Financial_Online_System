<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Account Info Entry form</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter Account Info</p></b></center></td>
        </tr>
        <tr>
		    <td>Customer_id:<input type="text" name="Customer_id" id="Customer_id"><br></td>
        </tr>
         <tr>
 		    <td>Account_type:
 			<select name="Account_type">
                 <option value="Checking">Checking</option>
                 <option value="Saving">Saving</option>
             </select>
         </td>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
 		<tr>
		    <td>Initial_deposit:<input type="text" name="Initial_deposit" id="Initial_deposit"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="account">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['account']))
    {

		echo $_POST['Customer_id']."<br>";
		echo $_POST['Account_type']."<br>";
		echo $_POST['SSN']."<br>";
		echo $_POST['Initial_deposit']."<br>";

        require('config.php');

        $sql = "INSERT INTO Account (Customer_id,Account_type,SSN,Initial_deposit) VALUES ('$_POST[Customer_id]','$_POST[Account_type]','$_POST[SSN]','$_POST[Initial_deposit]')";

        $users = $mysqli->query($sql);

        $mysqli -> close();

        echo "Account Info Inserted ..."."<br>";
    }
?>
