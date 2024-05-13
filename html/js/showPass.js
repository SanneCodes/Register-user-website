var showPass = document.getElementById('showPassword');
var passInput = document.getElementById('passwordInput');

showPass.addEventListener('change', function() {
    if (showPass.checked) {
        passInput.type = 'text';
    } else {
        passInput.type = 'password';
    }
});