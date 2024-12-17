document
    .getElementById("registration-form")
    .addEventListener("submit", function(event) {
        event.preventDefault();

        const firstName = document.getElementById("attorney_first_name");
        const lastName = document.getElementById("attorney_last_name");
        const controlNumber = document.getElementById("attorney_control_number");
        const email = document.getElementById("atttorney_email");
        const password = document.getElementById("attorney_password");
        const confirmPassword = document.getElementById("confirm_password");
        const terms = document.getElementById("terms");

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let isValid = true;
        let messages = [];

        if (!firstName.value.trim()) {document
            .getElementById("registration-form")
            .addEventListener("submit", function(event) {
                event.preventDefault();

                const firstName = document.getElementById("attorney_first_name");
                const lastName = document.getElementById("attorney_last_name");
                const controlNumber = document.getElementById("attorney_control_number");
                const email = document.getElementById("attorney_email"); // Fix typo here
                const password = document.getElementById("attorney_password");
                const confirmPassword = document.getElementById("confirm_password");
                const terms = document.getElementById("terms");

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                let isValid = true;
                let messages = [];

                if (!firstName.value.trim()) {
                    isValid = false;
                    messages.push("First Name is required.");
                }
                if (!lastName.value.trim()) {
                    isValid = false;
                    messages.push("Last Name is required.");
                }

                if (!emailPattern.test(email.value.trim())) {
                    isValid = false;
                    messages.push("Please enter a valid email address.");
                }

                if (password.value.length < 8) {
                    isValid = false;
                    messages.push("Password must be at least 8 characters long.");
                } else if (password.value !== confirmPassword.value) {
                    isValid = false;
                    messages.push("Passwords do not match.");
                }

                if (!terms.checked) {
                    isValid = false;
                    messages.push("You must agree to the terms.");
                }

                if (isValid) {
                    document.getElementById("registration-form").submit();
                } else {
                    alert(messages.join("\n"));
                }
            });

            isValid = false;
            messages.push("First Name is required.");
        }
        if (!lastName.value.trim()) {
            isValid = false;
            messages.push("Last Name is required.");
        }

        // FIX: should be a string
        //if (!controlNumber.value.trim() || isNaN(controlNumber.value)) {
        //  isValid = false;
        //  messages.push("Control number is required and should be numeric.");
        //}

        if (!emailPattern.test(email.value.trim())) {
            isValid = false;
            messages.push("Please enter a valid email address.");
        }

        if (password.value.length < 8) {
            isValid = false;
            messages.push("Password must be at least 8 characters long.");
        } else if (password.value !== confirmPassword.value) {
            isValid = false;
            messages.push("Passwords do not match.");
        }

        if (!terms.checked) {
            isValid = false;
            messages.push("You must agree to the terms.");
        }

        if (isValid) {
            document.getElementById("registration-form").submit();
        } else {
            alert(messages.join("\n"));
        }
    });
