<!DOCTYPE html>
<html>
<head>
	<title>insert data using codigniter</title>

</head>
<body>
	
	<div class="container">
	<br/><br/><br/>
	<h3 align="center">insert data using ci</h3><br/>
	<form method="post" action="<?php echo base_url();?>main/form_validation">
	<div class="form_group" align="center">
		<label>first name</label>
		<input type="text" name="first_name" class="form-control">
		
    </div>
	<div class="form_group" align="center">
		<label>last name</label>
		<input type="text" name="last_name" class="form-control">
		
    </div>
    <div class="form-group" align="center">
		
		<input type="submit" name="insert" value="insert" class="btn btn-info">
    </div>	
	</form>
		
	</div>
	

</body>
</html>