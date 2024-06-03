document.addEventListener("DOMContentLoaded", function() {
    var cadastroLink = document.getElementById('cadastroLink');
    var loginLink = document.getElementById('loginLink');
    var sairLink = document.getElementById('sairLink');
    

    
    if (cadastroLink) {
        cadastroLink.addEventListener("click", function(event) {
            event.preventDefault();
            window.location.href = "formulario.php";
        });
    }

    if (loginLink) {
        loginLink.addEventListener("click", function(event) {
            event.preventDefault();
            window.location.href = "login.php";
        });
    }

    if (sairLink) {
        sairLink.addEventListener("click", function(event){
            event.preventDefault();
            window.location.href = "home.php";
        });
    }
    

});
