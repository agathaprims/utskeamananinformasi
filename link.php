
<?php

$hashed_password = crypt('Agathaprims');

if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
   echo "Password verified!";
}
?>
