<?php
require_once('config.php');
require_once('model.php');

$comments = getComments($db_connection);

require_once('view.php');

?>