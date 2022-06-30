<?php
require_once "header.php";

if(isset($_GET['c'])){
	$cat = $_GET['c'];
}
else{
	header('Location:index.php');
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
else{
	$id = $cat;
}

$dir = 'pages/'.$cat.'/';


if(file_exists($dir.$id)){
?>

		<div class="content">
			<!-- div class="sidebar">
			<h4>Quick Links</h4>
			<?php
			$row = scandir($dir);
			for($i=2;$i<count($row);$i++){
				if($row[$i]=="images" || $row[$i]=="error_log")
					continue;
			?>
				<li><a href="content.php?c=<?php echo $cat; ?>&id=<?php echo $row[$i] ?>"><?php echo  preg_replace('/[0-9]+/', '',$row[$i]) ?></a></li>
			<?php
			}
			?>
			</div -->
			<div class="text">
				<h3><?php echo  preg_replace('/[0-9]+/', '',$id) ?></h3>
				<?php if(file_exists("pages/".$cat."/images/".$id.".jpg")){?><img src='pages/".$cat."/images/".$id.".jpg'><?php } ?>
				<?php
					echo file_get_contents($dir.$id);
				?>
			</div>
		</div>
<?php
}
else{
	$row = scandir($dir);
			for($i=2;$i<count($row);$i++){
				if($row[$i]=="images" || $row[$i]=="error_log")
					continue;
				?>
				<meta http-equiv="refresh" content="0;URL=content.php?c=<?php echo $cat; ?>&id=<?php echo $row[$i] ?>" />
				<?php
				break;
			}
}
require_once "footer.php";
?>
