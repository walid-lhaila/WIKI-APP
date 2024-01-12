const form = document.getElementById("form");
if (form) {
    form.addEventListener("submit", (e) => {
        

    const username = document.getElementById("username");
    const pw = document.getElementById("pw");
    const email = document.getElementById("email");

    function verifyUsername(username) {
    const usernameError = document.getElementById("usernameError");
    
    if(username === ""){
        usernameError.textContent = "Please enter a username";
        return false;
    }
    if (!/^[a-zA-Z0-9]+$/.test(username)) {
        usernameError.textContent = "Please enter a valid username with alphanumeric characters";
        return false;
    }
    else {
        usernameError.textContent="";
        return true;
    }
    }

    function verifyPw(pw) {
        const pwError = document.getElementById("pwError");

        if(pw === ""){
            pwError.textContent = "Please enter a password";
        }
        if (!/^(?=.*[a-zA-Z])(?=.*\d).{10,}$/.test(pw)){
            pwError.textContent = "Please enter a valid password with at least 10 characters and numbers";
            return false;
        }
        else{
            pwError.textContent = "";
            return true;
        }
    }

    function verifyEmail(email) {
        const emailError = document.getElementById("emailError");

        if (email === ""){
            emailError.textContent = "Please enter a email address";
        }
        if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
            emailError.textContent = "Please enter a valid email address";
            return false;
        }
        else {
            emailError.textContent = "";
            return true;
        }

    }   


    const usernameValid = verifyUsername(username.value);
    const passwordValid = verifyPw(pw.value);
    const emailValid = verifyEmail(email.value);

    // Check if all fields are valid before submitting
    if (usernameValid && passwordValid && emailValid) {
        // e.preventDefault(); // Submit the form
    }
    });
}


const btn = document.getElementById('btn');
const formulaire = document.getElementById('formulaire');
const rmForm = document.getElementById('rmForm');

btn.addEventListener('click', (e) => {
   
    formulaire.classList.add("scale-100");
    formulaire.classList.remove("scale-0");
})
rmForm.addEventListener('click', (e) => {
    formulaire.classList.remove("scale-100");
    formulaire.classList.add("scale-0");
});