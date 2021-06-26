<?php
include ('../include/setting.php');
include ('../include/functions.php');
$db=new DB();
$table=Product::find();
unset($db);
$alerts=alerts();

include ('../include/views/catalog.php');
?>