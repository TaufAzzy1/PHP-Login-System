<?php 
	
	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once "inc/config.php";
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-compatible" content="IE=edge" />
<meta name="viewport" content="width-device-width, initial-scale=1" />
<meta-name="robots" content-"follow">

<title>Page Title</title>
<base href="/" />

<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.23/css/uikit.min.css" />

</head>

<body>
	
	<div class="uk-section uk-container uk">
			<?php echo "Hello World. Today is: ";
			echo date("Y m d");
			?>
			<p>
				<a href="/login.php">Login</a>
				<a href="/register.php">Register</a>
			</p>
    </div>
			
	
	<?php include_once "inc/footer.php"; ?>
	
	
	
</body>

</html>