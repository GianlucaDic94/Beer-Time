function getCookie() {              // Funzione che restituisce il valore di un cookie specificato.
        var name = "PHPSESSID=";
        var decodedCookie = decodeURIComponent(document.cookie);  // Decodifica la stringa del cookie.
        var ca = decodedCookie.split(';');  // Divide il document.cookie con dei "punti e virgola".
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);    // Se viene trovato il cookie, restituisce il valore del cookie stesso.
            }
        }
        return "";  // Se il cookie non viene trovato, restituisce "".
    }

function checkCookie() {            // Funzione per controllare il cookie.
    var user=getCookie("PHPSESSID");
    if (user != "") {

    }
     else {
        document.getElementById("cookie").hidden = false;
        if (navigator.cookieEnabled == false)
            document.getElementById("cookie2").hidden = false;
    }
}

function hide() {
    document.getElementById("cookie").hidden=true;
}