<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Deposit Money form</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter ammount ($) to Deposit money</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
 		<tr>
		    <td>Deposit ammount($): <input type="text" name="Deposit_ammount" id="Deposit_ammount"><br></td>
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
		//echo $_POST['Deposit_ammount']."<br>";

        require('config.php');

        $sql = "SELECT Account_id,Customer_id,Account_type,SSN,Initial_deposit FROM Account where SSN='".$_POST['SSN']."'";
        $users = $mysqli->query($sql);

		$Initial_deposit_value;

        while($user = $users->fetch_assoc())
        {
			//echo "Initial_deposit: ".$user['Initial_deposit']."<br>";

			$Initial_deposit_value = $user['Initial_deposit'];
		}

		echo "Present Balance: ".$Initial_deposit_value."<br>";

		$Deposit = $_POST['Deposit_ammount'] + $Initial_deposit_value;

		//echo "Deposit ammount: ".$Deposit."<br>";

		$sql = "UPDATE Account SET "."Initial_deposit"."='".$Deposit."' WHERE SSN=".$_POST['SSN'];
        $users = $mysqli->query($sql);

        $mysqli->close();

        echo $_POST['Deposit_ammount']. " Deposited ..."."<br>";
        echo $Deposit. " Current Balance ..."."<br>";

    }
?>
