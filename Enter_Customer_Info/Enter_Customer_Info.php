<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Customer Info Entry form</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter Customer Info</p></b></center></td>
        </tr>
        <tr>
		    <td>Customer_name:<input type="text" name="Customer_name" id="Customer_name"><br></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
		    <td>Gender:<input type="text" name="Gender" id="Gender"><br></td>
        </tr>
        <tr>
        	<td>PIN:<input type="password" name="PIN" id="PIN"><br></td>
        </tr>
        <tr>
        	<td>Show PIN:<input type="checkbox" onclick="myFunction('PIN')"><br></td>
        </tr>
        <tr>
        	<td>Password:<input type="password" name="Password" id="Password"><br></td>
        </tr>
        <tr>
        	<td>Show Password:<input type="checkbox" onclick="myFunction('Password')"><br></td>
        </tr>
        <tr>
        	<td>Date_of_Birth:<input type="text" name="Date_of_Birth" id="Date_of_Birth"><br></td>
        </tr>
        <tr>
		    <td>Address:<input type="text" name="Address" id="Address"><br></td>
        </tr>
        <tr>
		    <td>City:<input type="City" name="City" id="City"><br></td>
        </tr>
        <tr>
		    <td>State:<input type="text" name="State" id=State><br></td>
        </tr>
        <tr>
		    <td>Mobile_Number:<input type="text" name="Mobile_Number" id="Mobile_Number"><br></td>
        </tr>
        <tr>
		    <td>Email:<input type="text" name="Email" id="Email"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="customer">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    echo '<script type="text/javascript">',
    'function myFunction(id) {',
    'var x = document.getElementById(id);',
    'if (x.type === "password") {',
    '      x.type = "text";',
    '   } else {',
    '   x.type = "password";',
    '   }',
    '}',
    '</script>'
            ;

    if(isset($_POST['customer']))
    {

		//echo $_POST['Customer_name']."<br>";
		//echo $_POST['SSN']."<br>";
		//echo $_POST['Gender']."<br>";
		//echo $_POST['PIN']."<br>";
		//echo $_POST['Password']."<br>";
		//echo $_POST['Date_of_Birth']."<br>";
		//echo $_POST['Address']."<br>";
		//echo $_POST['City']."<br>";
		//echo $_POST['State']."<br>";
		//echo $_POST['Mobile_Number']."<br>";
		//echo $_POST['Email']."<br>";

        require('config.php');

        $sql = "INSERT INTO Customer (Customer_name,SSN,Gender,Date_of_Birth,Address,City,State,PIN,Password,Mobile_Number,Email) VALUES ('$_POST[Customer_name]','$_POST[SSN]','$_POST[Gender]','$_POST[Date_of_Birth]','$_POST[Address]','$_POST[City]','$_POST[State]','$_POST[PIN]','$_POST[Password]','$_POST[Mobile_Number]','$_POST[Email]')";

        $users = $mysqli->query($sql);

        $mysqli -> close();

        echo "Customer Info Inserted ..."."<br>";
    }
?>
