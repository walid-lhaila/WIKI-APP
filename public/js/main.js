const form = document.getElementById('form');
if (form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();

    const username = document.getElementById('username');
    const pw = document.getElementById('password');
    const email = document.getElementById('email');

    function verifyUsername(username) {
    const usernameError = document.getElementById('usernameError');
    
    if(username === ""){
        usernameError.textContent = "Please enter a username";
    }
    if () {
        usernameError.textContent = "Please enter a valid username with alphanumeric characters";
        return false;
    }
    else {
        usernameError.textContent="";
        return true;
    }
    }

    function verifyPw(pw) {
        const pwError = document.getElementById('pwError');

        if(pw === ""){
            pwError.textContent = "Please enter a password";
        }
        if (){
            pwError.textContent = "please enter a valid password with numbers";
        }
        else{
            pwError.textContent = "";
        }
    }

    function verifyEmail(email) {
        const emailError = document.getElementById('emailError');

        if (email === ""){
            emailError.textContent = "Please enter a email address";
        }
        if () {
            emailError.textContent = "Please enter a valid email address";
        }
        else {
            pwError.textContent = "";
        }

    }   



    })
}