$(document).ready(function() {
	$("#block6 form").submit(function(e) {
		var error = "";
		var name = $("input[name='name']").val();
		var email = $("input[name='email']").val();
		var phone = $("input[name='phone']").val();
		var smt = $("textarea[name='smt']").val();
		var arr_values = [name, email, phone, smt];
		var arr_field = ["name", "email", "phone", "smt"];
		
		var reEmail =  new RegExp('^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$');
		if(!reEmail.test(email)) {
			$("input[name='email']").css("border-color", "red");
			error = "Некорректный e-mail";
		}
		
		for(var i = 0; i < arr_values.length; i++) {
			if(arr_values[i] == ""){
				$("[name='"+arr_field[i]+"']").css("border-color", "red");
				error = "Заполните все поля!";
			}
		}
		
		if(error) {
			$(".error").text(error);
			return false;
		}
		else{
			$(this).submit(); 
		}
	});
	
	$("input, textarea").focus(function() {
		$("input, textarea").css("border-color", "rgba(247,248,250, 0.2)");
		$(".error").empty();
	});
});