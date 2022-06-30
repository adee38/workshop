		<div class="slide">
			<ul>
<?php
		$dir = 'pages/Flash/';
		$row = scandir($dir);
		for($i=2;$i<count($row);$i++){
			if($row[$i]=="images")
				continue;
 ?>
			      	<li>
					<div class="block">
						<img src="pages/Flash/images/<?php echo $row[$i];?>.jpg">
					</div>
					<!-- div class="block">
						<h3><?php echo $row[$i] ?></h3>
						<?php echo file_get_contents($dir.$row[$i]) ?>
					</div -->
				</li>
<?php
		}
 ?>
			</ul>
		</div>


		<div class="content">
<?php
			$dir = 'pages/Home/';
			$row = scandir($dir);
			for($i=2;$i<count($row);$i++){
				?>
						<div class="block">
							<h3><?php echo preg_replace('/[0-9]+/', '',$row[$i]) ?></h3>
							<?php echo file_get_contents($dir.$row[$i]) ?>
						</div>
				<?php
			}
 ?>

		</div>
		<div class="sponsors">
			<h3>Sponsors</h3>
			<a href="http://www.iciitp.com/"><img src="images/sponsors/csir.jpg" height="80" width="1000"></a>
			<a href="http://www.iciitp.com/"><img src="images/sponsors/drdo1.png"></a>
			<a href="https://www.iitp.ac.in/sgcpes/"><img src="images/sponsors/serb_15.gif">  </a>
			<a href="https://www.iitp.ac.in/sgcpes/"><img src="images/sponsors/dstbihar.png">  </a>
		</div>
