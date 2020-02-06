function displayinfo() {
    document.getElementById("div-animation_invisible1_id").style.opacity = "1";
    document.getElementById("div-animation_invisible1_id").style.display = "grid";
    document.getElementById("display-none_1").style.display = "none";
}
function displayinfo2() {
    document.getElementById("div-animation_invisible2_id").style.opacity = "1";
    document.getElementById("div-animation_invisible2_id").style.display = "grid";
    document.getElementById("display-none_2").style.display = "none";
}
function displayback() {
    document.getElementById("div-animation_invisible1_id").style.opacity = "0";
    document.getElementById("div-animation_invisible1_id").style.display = "none";
    document.getElementById("display-none_1").style.display = "grid";
}
function displayback2() {
    document.getElementById("div-animation_invisible2_id").style.opacity = "0";
    document.getElementById("div-animation_invisible2_id").style.display = "none";
    document.getElementById("display-none_2").style.display = "grid";
}
