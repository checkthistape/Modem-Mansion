function randomBanner() {
    var rlogosrc = "/assets/icons/r-logo/logo" + (Math.floor(Math.random() * 30) + 1) + ".gif";
    document.getElementById("rlogo").src = rlogosrc;

}
