$( document ).ready(function() {
	$("#send").click(function(){
		//если поля заполнены, слхраним коммент
		if( $("#name").val() != "" && $("#comment").val() != "")
			sendAjaxForm('result_form', 'form', 'savecomment.php');
		else
			alert("Заполните поля Имя и Комментарий");
		return false; 
	});
});
 
function sendAjaxForm(result_form, ajax_form, url) {
	$.ajax({
		url:     url,
		type:     "POST",
		dataType: "html",
		data: $("#"+ajax_form).serialize(),
		success: function(response) {
			result = $.parseJSON(response);
			//если комментарий добавлен в БД, выводим его к остальным комментам
			comment_tpl = $(".comment:first").clone( true );
			comment_tpl.find(".comment_name strong").html(result.name);
			comment_tpl.find(".comment_content").html(result.comment);
			comment_tpl.find(".comment_time small").html(result.time);
			comment_tpl.find(".comment_data small").html(result.data);
			comment_tpl.appendTo("#comments");
		},
		error: function(response) {
			alert("Что-то пошло не так!");
		}
	});
}