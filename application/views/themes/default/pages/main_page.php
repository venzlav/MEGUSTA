<!DOCTYPE >
<html>
	<head>
				<meta charset="UTF-8" />
		<title><?=$title?></title>
		<link href="http://<?=$_SERVER['HTTP_HOST']?>/application/views/themes/default/css/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?=$top_menu?>	
		<?=$search?>
		<?=$header?>
		<div id="left_slide">
			<?=$left_menu?>
			<?=$user_info?>	
			
		</div>

	</body>
</html>