		<div id="footer">
			<h3>Gallery</h3>

<?php
$dir = 'gallery';
$row = scandir($dir, 1);
for($i=0;$i<count($row)-2;$i++){
?>
			<a href="#<?php echo $row[$i]; ?>">
				<img src="gallery/<?php echo $row[$i]; ?>" class="thumbnail">
			</a>

			<a href="#_" class="lightbox" id="<?php echo $row[$i]; ?>">
				<img src="gallery/<?php echo $row[$i]; ?>">
			</a>

<?php
}
?>
		</div>
		<div id="copy">
			Copyright &copy 2016. Department of Computer Science and Engineering, IIT Patna.
			<span><!--  Designed by <a href="http://fb.com/zenineasa">Zenin Easa P</a>. -->All Rights Reserved.</span>
		</div>
	</div>



	</body>
</html>
