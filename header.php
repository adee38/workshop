<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Passion+One">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alegreya">

	<meta name="viewport" content="width=device-width; maximum-scale=1; minimum-scale=1;" />

	<script src="jquery.min.js"></script>
	<script src="js.js"></script>

	<head>
		<title> 5th International Conference on Data Science and Engineering (ICDSE 2019) |  Indian Institute of Technology Patna  </title>
	</head>
	<body>

	<div class="container">
		<div class="logo">

			<div class="sub">
				<span style="color:rgb(0,180,255)">ICDSE 2019</span>
				<strong>  <style="color:rgb(0,180,255)"> 5th International Conference on Data Science and Engineering (ICDSE 2019) <br></strong>
				 Indian Institute of Technology Patna (26 to 28  September 2019) <br>
			<img src="images/iitp_logo.png" alt="Smiley face" style="float:left;width:90px;height:90px;">
			<img src="images/IEEE.png" alt="Smiley face" style="float:right;width:130px;height:95px;">
			</div>
		</div>


		<div id="menu-wrapper">
			<nav role="navigation">
				 <label for="drop" class="toggle"><i class="fa fa-bars"></i><span>Navigation</span></label>
					<input type="checkbox" id="drop" />
				<ul class="menu">
						<li class="main"><a href="index.php">Home</a></li>
		<?php
		$dir = 'pages';
		$row = scandir($dir);
		for($i=2;$i<count($row);$i++){
			$cat = $row[$i];
			if($cat=="Home" || $cat=="Flash"){
				continue;
			}
		?>
						<li class="main"><a href="content.php?c=<?php echo $cat; ?>"><?php echo	preg_replace('/[0-9]+/', '',$cat); ?></a>
									<ul class="sub-menu">

		<?php
					$dir2 = 'pages/'.$cat;
					$row2 = scandir($dir2);
					for($j=2;$j<count($row2);$j++){
						if($row2[$j]=="images" || $row2[$j]=="error_log" || $row2[$j]==$row[$i])
							continue;
						?>
								<li>
									<a href="content.php?c=<?php echo $cat; ?>&id=<?php echo $row2[$j] ?>"><?php echo	preg_replace('/[0-9]+/', '',$row2[$j]) ?></a>
								</li>
					<?php
					}
		 ?>

									</ul>
						</li>
		<?php
		}
		?>

				</ul>
			</nav>
		</div>
