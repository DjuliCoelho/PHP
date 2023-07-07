<?php 
    require_once("./functions.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>
		<?php
		    load_title();
		?>
	
	</title>
	<link rel="stylesheet"
	type="text/css" href="style.css">
    
  </style>
</head>

<body>

	<?php
		require_once("./header.php");
		    load_page();
		require_once("./footer.php");
	?>
</body>

</html>