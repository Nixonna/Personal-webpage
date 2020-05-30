window.onload = function() {
  inactivityTime();
}

var inactivityTime = function () {
    var time;
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;

    function logout() {
        alert("You are now logged out.");
        window.location.assign("http://localhost/iwp/signin.php");
    }

    function resetTimer() {
        clearTimeout(time);
        time = setTimeout(logout, 10000);
    }
};