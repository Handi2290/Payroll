<!DOCTYPE html>
<html>
<head>
	<title>Scan Kartu</title>

	<!-- scanning membaca kartu RFID -->
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function(){
				$("#cekkartu").load('bacakartu.php')
			}, 2000);
		});	
	</script>

</head>
<body>

	<!-- isi -->
	<div class="container-fluid" style="padding-top: 10%">
		<div id="cekkartu"></div>
	</div>
	<br>

</body>
</html>