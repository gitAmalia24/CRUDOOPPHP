<?php
include("classes/user.php");

$User = new user("localhost", "root", "", "authoop");
var_dump($User->getAll());

echo "sayaa gitaaa";

?>