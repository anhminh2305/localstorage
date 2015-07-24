<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		if(localStorage.getItem('id')!= null){
   		window.location.href = "<?php echo base_url().'User/index/'?>";
		}
  });
</script>
</head>
<body>


<form action="<?php echo base_url().'Welcome/loginaction'?>" method="post" id="loginform">
	<label for="name">Type Password</label>
	<input type="password" name="password">
	<input type="submit" name="Enter">
</form>
</body>
</html>
