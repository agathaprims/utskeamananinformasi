<?php
// Check a POST is valid.
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
echo "berhasil, ".$_POST["data"];
}
else{
	echo "gagal";
}
?>