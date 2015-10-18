# Web-Program
<html>
<head>
<title>Student Registration Form</title>	
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<form method = "POST" action = "registration.php">
<center><table border = '1'>
	<h1>Student Registration Form</h1>
<tr>
	<td>First Name </td> 
	<td>Middle Name </td>
	<td>Last Name </td>
</tr>
<tr>
	<td> <input type = "textbox" size = "20" name = "first"></td>
	<td> <input type = "textbox" size = "20" name = "middle"></td>
	<td> <input type = "textbox" size = "20" name = "last"></td>
</tr>
<tr>
	<td>Gender</td>
	<td><input type= "radio" name = "gender" value = "Male">Male</td>
	<td><input type= "radio" name = "gender" value = "Female">Female</td>
</tr>
<tr>
	<td colspan="3">Birthday</td>
</tr>
<tr>
	<td>Month<select name="Month">
		<option value = "">January</option>		
		<option value = "">February</option>
		<option value = "">March</option>
		<option value = "">April</option>
		<option value = "">May</option>
		<option value = "">June</option>
		<option value = "">July</option>
		<option value = "">August</option>
		<option value = "">September</option>
		<option value = "">October</option>
		<option value = "">November</option>
		<option value = "">December</option>
		</select>
	</td>
		<td>Day<select name="Day">
		<option>-----</option>
		<?php
			for($i =1; $i<32; $i++): ?>
				<option value = "<?php echo $i; ?>"> <?php echo $i; ?> </option>
				<?php endfor; ?> 
		</select>
	</td>
		<td>Year<select name="Year">
		<option>-----</option>
		<?php
			for($i =2015; $i>1990; $i--): ?>
				<option value = "<?php echo $i; ?>"> <?php echo $i; ?> </option>
				<?php endfor; ?> 
		</select>
	</td>
</tr>
<tr>
<td colspan = "3">
	Program<select name = programs>
	<option value = "BS Social Works">BS Social Works </option>
	<option value = "BS Accountancy">BS Accountancy</option>
	<option value = "BS Accounting Technology">BS Accounting Technology</option>
	<option value = "BS Information Technology">BS Inforamtion System</option>
	<option value = "AB Broadcasting">AB Broadcasting</option>
	<option value = "Office Management">Office Management</option>
	<option value = "Mass Communication Technology">Mass Communication Technology</option>	
	<option value = "Associate In Computer Technology">Associate In Computer Technology</option>
	<option value = "Nursing Assistant">Nursing Assistant</option>
	<option value = "International Cookery">International Cookery</option>
	</select>
	</td>
</tr>
<tr>
	<td colspan="3">Student Type</td>
</tr>
<tr>
	<td colspan="3">
	<input type="radio" name = "Type" value = "Full Scholar"> Full-scholar <br>
	<input type="radio" name = "Type" value = "Partial Scholar"> Partial-scholar <br>
	<input type="radio" name = "Type" value = "Payee"> Payee
	</td>
</tr>
<tr>
	<td colspan="3">Address</td>
</tr>
<tr>
	<td colspan="3">
	<textarea cols="100" rows="4" name = "address"></textarea>
	</td>
</tr>
<tr>
	<td colspan = "3">
	<input type = "submit" value = "Submit Registration" />
	</td>
</tr>
</table>
</form>
</center>
</body>
</html>
