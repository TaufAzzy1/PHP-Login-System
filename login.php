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
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" [uk-grid]="">
				<form class="uk-form-stacked" "js-login">
				
				<h2>Login</h2>
				
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
			        </div>
			    </div>
			    
			     <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="Password" required="required" placeholder="Your Password">
			        </div>
			        
				<div class="uk-margin">
					<button class="uk-button uk-button-default" type="submit">
						LOGIN
					</button>
					
					
				</div>

			        
			    </div>
    </div>

</form>
			
			
			
			</div>
	</div>
	
	<?php include_once "inc/footer.php"; ?>
	
	
	
</body>

</html>