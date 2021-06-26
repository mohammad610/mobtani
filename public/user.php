<?php
include ('../include/setting.php');
include ('../include/functions.php');
$db=new DB();
$table=Register::find();
unset($db);
$alerts=alerts();

include ('../include/views/user.php');
?>