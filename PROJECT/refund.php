<?php
include 'controllers/refundController.php';
?>

<html>
<title>Refund</title>
<head>
</head>
<Body background="c518b29edc8842ab800a3f5cda4f4b8f.jpg">
<fieldset><legend align="center"><h1>Refund</h1></legend>
<form action="" method="post">
<form border>
	<fieldset>
	<table align = "center">
	<tr>
						<td>Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
				</tr>

				<tr>
						<td>From: </td>
						<td><input type="text" id="from" name="from" value="<?php echo $from;?>" placeholder="From"></td>
						<td><span id="err_from"><?php echo $err_from;?></span></td>
						
				</tr>

				<tr>
						<td>To: </td>
						<td><input type="text" id="to" name="to" value="<?php echo $to;?>" placeholder="To"></td>
						<td><span id="err_to"><?php echo $err_to;?></span></td>
						
				</tr>

				<tr>
						<td>Seat Number: </td>
						<td><input type="text" id="sn" name="sn" value="<?php echo $sn;?>" placeholder="ex:a1,b1"></td>
						<td><span id="err_sn"><?php echo $err_sn;?></span></td>
						
				</tr>
					
					
					<tr>
		<td colspan="3" align="center">
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
							
</table>
	</fieldset>
	</form>
	</fieldset>
	
	</body>
</html> 
<?php
		function insertUserc($fname,$tid,$exp){
        $query = "insert into refund_request values ('$fname','$tid','$exp')";
        return execute($query);
    }
	
	
	
	?>			