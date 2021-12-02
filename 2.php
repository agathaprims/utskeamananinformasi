
<?php

$options = [
    'cost' => 12,
];
echo password_hash("Lov3you", PASSWORD_BCRYPT, $options);
?>
