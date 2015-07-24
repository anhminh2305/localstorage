<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#btncapnhat').click(function(){
				$.ajax({
					url: "<?php echo base_url().'User/update'?>",
					type: "post",
					dataType: "text",
					data: {
						id: localStorage.getItem('id'),
						email: $('#txtemail').val(),
						facebook: $('#txtfb').val(),
						phone: $('#txtphone').val()
					},
					success: function(result){
						$("#result").html(result);
					}
				});
			});
	});
	</script>
		</head>
		<body>
			<form action="<?php echo base_url().'User/update'?>" method="POST" role="form">
				<legend>Thong Tin</legend>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" id="txtemail" name = 'txtemail' placeholder="Email...">
					<label for="">Facebook</label>
					<input type="text" class="form-control" id="txtfb" name = 'txtfb' placeholder="Link facebook...">
					<label for="">Phone</label>
					<input type="text" class="form-control" id="txtphone" name = 'txtphone' placeholder="Phone number...">
					<button type="button" id="btncapnhat" class="btn btn-primary">Cap Nhat</button>
				</form>
				<div id="result"></div>
				<!-- jQuery -->
				<script src="//code.jquery.com/jquery.js"></script>
				<!-- Bootstrap JavaScript -->
				<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			</body>
			</html>