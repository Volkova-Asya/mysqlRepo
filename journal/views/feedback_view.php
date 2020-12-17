<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        	<h1>Оставьте обратную связь о нашем сайте!</h1>
            <form action="/journal/feedback/send" method="POST">
                <div class="form-group">
                    <input _ngcontent-c0="" class="form-control form-control-lg" placeholder="Введите ваше имя" name="user" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Введите вашу электронную почту" name="email" type="text">
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-lg" placeholder="Введите ваш комментарий" name="comment" type="text"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-info btn-lg btn-block" type="button" onclick="sendData()" value="Отправить">
                </div>
                <div class="form-group">
                    <input class="btn btn-info btn-lg btn-block" type="reset" value="Очистить">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
 {
 "use strict";
 function sendData() {
 let xhr = new XMLHttpRequest();
 feedbackForm = document.forms[0];
 formData = new FormData(feedbackForm);
 xhr.open("POST", '/journal/feedback/send');

 xhr.onloadend = function() {
	 if (xhr.status == 200) {
			 if (xhr.response == 1) {
			 	window.alert('Добавлено!'); 
			 } else {
			 	window.alert(xhr.response);
			 }
		 } else {
		 window.alert("Ошибка " + this.status);
		 }
	 };
	 xhr.send(formData);
	 }
 }
 feedbackForm.reset();
</script>