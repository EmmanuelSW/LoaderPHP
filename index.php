<?php

	function run(){
		$list = null;
		$name = null;
		$url = "../htdocs/";
		$dir = scandir($url);

		foreach ($dir as  $element) {
			if($element != "." && $element != ".." && is_dir($element)){
		
				echo "<div class='content'>";
				echo "<a href='". $element ."'>";
				echo "<div class='folder'><i class='fa fa-code'></i></div>";
				echo "<h5>". $element ."</h5>";	
				echo "</a>";
				echo "</div>";
						
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projects</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
		.folder {
		  position: relative;
		  top: 0;
		  left: 0;
		  background: #eee;
		  width: 100px;
		  height: 80px;
		  box-sizing: border-box;
		  border: 8px solid #82befa;
		  border-top-width: 32px;
		  border-radius: 0 3.25px 3.25px;
		  transition: border-top-width 0.3s, transform 0.2s;
		  transform-origin: 0% 100%;
		  cursor: pointer;
		}
		.folder:before,
		.folder:after {
		  content: '';
		  background: #82befa;
		}
		.folder:before,
		.folder:after,
		.folder i {
		  position: absolute;
		}
		.folder:before {
		  width: 35px;
		  height: 5px;
		  bottom: 72px;
		  left: -8px;
		  border-radius: 3.25px 3.25px 0 0;
		}
		.folder i,
		.folder:after {
		  width: 100px;
		  height: 72px;
		  line-height: 72px;
		  text-align: center;
		  bottom: -8px;
		  left: -8px;
		  transition: transform 0.2s, background 0.2s;
		  transform-origin: 0% 100%;
		}
		.folder:after {
		  background: #63a7eb;
		  border-bottom: 1px solid rgba(0, 0, 0, 0.15);
		  border-radius: 3.25px;
		}
		.folder i {
		  z-index: 2;
		  color: #437eba;
		  font-size: 45px;
		  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
		}
		.folder:hover {
		  border-top-width: 8px;
		}
		.folder:hover:after,
		.folder:hover i {
		  transform: scaleY(0.85) skewX(-15deg);
		}
		.folder:hover:after {
		  background: #5f9fe0;
		}
		.folder:hover:i {
		  color: #4171a2;
		}
		html {
		  height: 100%;
		}
		.folder {
			margin: auto;
			margin-top: 30px;
		}
		h5 {
		  color: #777;
		  letter-spacing: 0.125em;
		  line-height: 1.5em;
		}
		a{
			text-decoration: none;
		}
		.content{
			width: 200px;
			height: 200px;
			float: left;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php run() ?>
</body>
</html>
