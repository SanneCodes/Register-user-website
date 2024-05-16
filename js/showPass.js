var checkbox = document.getElementById('showPassword');
var password = document.getElementById('passwordInput');

checkbox.addEventListener('change', function(){
	if (checkbox.checked){
		password.type = "text";
	} else{
		password.type = "password";
	}
}
