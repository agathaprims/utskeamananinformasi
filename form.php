<?php
session_start();

$_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));

?>
<html>
<head>
<title>Form CSRF</title>
</head>
<body>
<form action="xx.php" method="post">
<input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']?>" />
<input type="text" name="data" />
<input type="submit" name="sub" value="Post" />
</form>
</body>
</html>