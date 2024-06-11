var showPass = document.getElementById('showPassword'); //henter id til checkbox
var passInput = document.getElementById('passwordInput'); //henter id til passord input boks

showPass.addEventListener('change', function() { //lager event listner som skjekker om checkboxen ble rørt
    if (showPass.checked) {//hvis ckeckbox er checked
        passInput.type = 'text'; //endre input type til klar tekst
    } else { //hvis checkbox ikke er checked
        passInput.type = 'password'; //endre input type tilbake til passord
    }
});
