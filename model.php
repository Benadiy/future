<?php

//результаты запроса в ассоциативный массив
function toAssoc( $dbresult ) {
	for ($arr = array (); $row = $dbresult->fetch_assoc(); $arr[] = $row);
	return 	$arr;
}

//получить все комменты из БД
function getComments( $con ) {
	$result = $con->query("SELECT *, DATE_FORMAT(`datetime`, '%d.%m.%Y') date, DATE_FORMAT(`datetime`,'%H:%i') time FROM `comments`");

	return toAssoc( $result );
}

//получить последний коммент из БД
function getLastComment( $con ) {
	$result = $con->query("select *, DATE_FORMAT(`datetime`, '%d.%m.%Y') date, DATE_FORMAT(`datetime`,'%H:%i') time from comments ORDER BY id DESC LIMIT 1;");

	return toAssoc( $result );
}

//добавить комментарий в БД
function addComment( $con, $name, $comment ) {
	$query = "INSERT INTO comments(name, comment, datetime) VALUES('".escape($con, $name)."','".escape($con, $comment)."', NOW())";
	
	return $con->query($query);
}

function escape( $con ,$str ) {
	return mysqli_escape_string($con, $str);
}