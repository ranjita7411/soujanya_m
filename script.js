$(document).ready(function() {

    $("#regForm").submit(function(event) {

        let phone = $("#phone").val();

        // Validate phone number (only digits & 10–15 characters)
        if (!/^[0-9]{10,15}$/.test(phone)) {
            alert("Phone number must contain 10-15 digits only.");
            event.preventDefault();
        }

        if ($("#gender").val() === "") {
            alert("Please select a gender.");
            event.preventDefault();
        }

    });
});
