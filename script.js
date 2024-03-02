function checkPasswordPattern(password) {
    var uppercaseRegex = /[A-Z]/;
    var lowercaseRegex = /[a-z]/;
    var numberRegex = /[0-9]/;
    var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

    var isUppercase = uppercaseRegex.test(password);
    var isLowercase = lowercaseRegex.test(password);
    var isNumber = numberRegex.test(password);
    var isSpecialChar = specialCharRegex.test(password);

    return isUppercase && isLowercase && isNumber && isSpecialChar;
}

document.getElementById("registerForm").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (!checkPasswordPattern(password)) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
        event.preventDefault();
    } else if (password !== confirmPassword) {
        alert("Passwords do not match.");
        event.preventDefault();
    }
    else{
        alert("Registation Succesfull!");
    }
});
