function validateForm(event) {
    event.preventDefault();

    const nameFirst = document.getElementById("first_name").value.trim();
    const nameLast = document.getElementById("last_name").value.trim();
    const email = document.getElementById("email").value.trim();
    const contactNumber = document.getElementById("contact_number").value.trim();
    const password = document.getElementById("password").value;
    const passwordConfirm = document.getElementById("password_confirmation").value;
    const agreement = document.getElementById("terms").checked;

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    const phonePattern = /^\d{10}$/;

    let errors = [];

    if (nameFirst === "" || nameLast === "") {
        errors.push("First and Last name are required.");
    }

    if (!email.match(emailPattern)) {
        errors.push("Please enter a valid email address.");
    }

    if (!contactNumber.match(phonePattern)) {
        errors.push("Please enter a valid 10-digit phone number.");
    }

    const minPasswordLength = 8;
    if (password.length < minPasswordLength) {
        errors.push("Password must be at least 8 characters.");
    }

    if (password !== passwordConfirm) {
        errors.push("Passwords do not match.");
    }

    if (!agreement) {
        errors.push("You must agree to the terms and conditions.");
    }

    if (errors.length > 0) {
        alert(errors.join("\n"));
    } else {
        document.getElementById("registration-form").submit();
    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registration-form").addEventListener("submit", validateForm);
});
