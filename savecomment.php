<?php
require_once('config.php');
require_once('model.php');

//если данные пришли
if ( isset($_POST["name"]) && isset($_POST["comment"]) &&  $_POST["name"]!="" &&  $_POST["comment"]!="" ) { 

	$name=$_POST['name']; 
	$comment=$_POST['comment']; 
	
	//если запись произведена успешно
	if( addComment($db_connection, $name, $comment) ){
		
		//получаем последнюю запись из массива
		$comment_res = getLastComment($db_connection);

		// отправляем последнюю запись в формате JSON на фронт
		echo json_encode($comment_res[0]);
		die();
	}
}

http_response_code(500);

?>