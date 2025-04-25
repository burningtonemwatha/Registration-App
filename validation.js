function validateForm() {
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Check if any field is left blank
    if (name == "" || email == "" || password == "" || confirmPassword == "") {
        alert("All fields must be filled out");
        return false;
    }

    // Validate email format
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.match(emailPattern)) {
        alert("Please enter a valid email address");
        return false;
    }

    // Check if password and confirm password match
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    // Validate password strength
    var passwordPattern = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (!password.match(passwordPattern)) {
        alert("Password must be at least 8 characters long, contain at least one uppercase letter and one number");
        return false;
    }

    // If all validations pass
    return true;
}
