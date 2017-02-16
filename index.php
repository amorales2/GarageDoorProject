
<?php 
	if(isset($_GET['trigger']) && $_GET['trigger'] == 1) {
		exec("/garageDoor.sh");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Garage Opener</title>
		<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>    
		<script type="text/javascript" src="/js/script.js"></script>    

	</head>
	<body>
		<div class='awrap'>
      <a href='/?trigger=1'></a>
		</div>
	</body>
</html>
