$(document).ready(function () {
    $("#student-form").submit(function (e) {
        e.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "/students",
            data: $(this).serialize(),
            success: function (response) {
                // Handle success, e.g., display a success message
                console.log(response);
            },
            error: function (error) {
                // Handle errors, e.g., display validation errors
                console.log(error.responseJSON);
            }
        });
    });
});
