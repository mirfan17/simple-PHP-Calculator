<?php 
extract($_POST);
if(isset($save))
{
	switch ($ch) {
		case '+':
			$res=$fn+$sn;
			break;

		case '-':
		$res=$fn-$sn;
		break;

		case '*':
		$res=$fn*$sn;
		break;

		case '/':
		if ($sn == 0) {
			echo "Cannot Divide by Zero. Please Try Again.";
		} else{
			$res=$fn/$sn;
		}


	}
}




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Basic PHP Calculator</title>
</head>
<body>
	<form method="post">
		<table border="1px" align="center">
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php echo @$res; ?>">
				</th>
			</tr>
			<tr>
				<th>Enter Your First Number</th>
				<th><input type="number" name="fn" value="<?php echo @$fn ?>"></th>
			</tr>
			<tr>
				<th>Enter Your Second Number</th>
				<th><input type="number" name="sn" value="<?php echo @$sn ?>"></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
					<select name="ch">
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
					</select>
				</th>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="save" value="Show Result">
				</th>
			</tr>
		</table>
	</form>


</body>
</html>