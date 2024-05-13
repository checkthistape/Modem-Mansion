function randomBanner() {
    var rlogosrc = "/assets/icons/r-logo/logo" + (Math.floor(Math.random() * 30) + 1) + ".gif";
    document.getElementById("rlogo").src = rlogosrc;

}

function setFontSize(fontsizev) {
    document.querySelector("*").style.fontSize = fontsizev;
    //setCookie("fontSizePercents", fontsizep+'%');
}

function setFontSizeCookie(fontsizev) {
    document.querySelector("*").style.fontSize = fontsizev;
    setCookie("fontSizePercents", fontsizev);
}

function setCookie(name, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var re = new RegExp(cname + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;


    // let name = cname + "=";
    // const decodedCookie = decodeURIComponent(document.cookie);

    // let ca = decodedCookie.split(';');
    // for (let i = 0; i < ca.length; i++) {
    //     let c = ca[i];
    //     while (c.charAt(0) == ' ') {
    //         c = c.substring(1);
    //     }
    //     if (c.indexOf(name) == 0) {
    //         return c.substring(name.length, c.length);
    //     }
    // }
    // return "";
}

function ReadingFromCookie() {
    let fontsizecookie = getCookie("fontSizePercents");
    console.log(fontsizecookie);

    if (fontsizecookie != "") {
        setFontSize(fontsizecookie);
    } else {
        setCookie("fontSizePercents", "100%", 14);
        // there is no
    }

}
