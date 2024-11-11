
//check whether all the fields were correctyl field in create.php file
document.addEventListener("DOMContentLoaded", function () {
    var submitBtn = document.getElementById("submitBtn");

    submitBtn.addEventListener("click", function () {
        // Get form inputs
        var subject = document.getElementsByName("field1")[0].value;
        var type = document.getElementsByName("field2")[0].value;
        var examiner_ID = document.getElementsByName("field3")[0].value;
        var examiner = document.getElementsByName("field4")[0].value;
        var department = document.getElementsByName("field5")[0].value;

        // Check if any field is empty
        if (!subject || !type || !examiner_ID || !examiner || !department) {
            alert("All fields are required!");
        } else {
            // If all fields are filled, submit the form
            alert("Exam added successfully!");
            document.forms[0].submit();
        }
    });
});

