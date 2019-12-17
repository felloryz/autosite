<?php
	session_start();
	session_destroy();
	echo "Вы разлогинились, перейдите на ";
	echo '<a href = "index.php">главную<a>';

?>
