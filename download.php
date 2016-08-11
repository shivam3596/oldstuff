<?php
	header("Content-Type:Application/apk");
	header("Content-Disposition: attachment;filename=Lite.apk");
	readfile("Lite.apk");
?>