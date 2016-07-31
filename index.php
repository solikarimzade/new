<?php
include("../function.php")
define('host','soli.hostei.com');
define('username','a4082540');
define('pass','soli1234');
define('dbname','gru');
mysql_connect(host,username,pass) or die('could not connect');
mysql_select_db(dbname) or die('could not connect data base');
$select=sel('',array('*'),'user','','','');
echo 'kkk';




?>