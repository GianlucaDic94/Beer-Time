function checkUsername(input) {
    var value = new XMLHttpRequest();  // Crea un oggetto XMLHttpRequest.
    value.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {    // 4 = richiesta terminata e la risposta è pronta.    200 = la richiesta è andata a buon fine.
            if (this.responseText.length == 45) {   // Verifica la lunghezza della stringa.
                document.getElementById("label1").innerHTML = "Username già in uso!" ;
                document.getElementById("label1").style.color = 'red';
                document.getElementById("label1").hidden = false;
            }
            else ;


       }

    }


        value.open("GET", "/Beer-Time/Utente/checkUsername?"+input ,true);
        value.send();
    //}
}

function checkEmail(input) {
    var value = new XMLHttpRequest();
    value.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.length == 45) {
                document.getElementById("label2").innerHTML = "Email già in uso!";
                document.getElementById("label2").style.color = 'red';
                document.getElementById("label2").hidden = false;
            } else ;

        }

    }

    value.open("GET", "/Beer-Time/Utente/checkEmail?" + input, true);
    value.send();
}



