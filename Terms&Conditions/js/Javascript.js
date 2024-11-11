//Home page notification department
function loadData(name){
	if(name=="myButton1"){
	document.getElementById("para1").innerHTML="All students can upload their assignment on 11th Tuesday; through the given link";
	document.getElementById("para2").innerHTML="We are pleased to inform you that the Human Resources Training Assessment for the current quarter is now available. Kindly log in to the Online Examination System to participate and evaluate your knowledge in the latest HR policies and procedures.";
	
}
else if(name=="myButton2"){
	document.getElementById("para1").innerHTML="Subject: IT Security Certification Exam";
	document.getElementById("para2").innerHTML="The Information Technology Security Certification Exam is now open for all IT department members. This assessment covers the latest cybersecurity protocols and best practices. Please log in to the Online Examination System at your earliest convenience to complete the exam.";

}
else if(name=="myButton3"){
	document.getElementById("para1").innerHTML="Subject: Financial Literacy Quiz";
	document.getElementById("para2").innerHTML="As part of our ongoing efforts to enhance financial literacy within the organization, we invite all members of the Financial Department to participate in the Financial Literacy Quiz. This assessment is designed to test your understanding of financial principles and industry regulations.";
}
else if(name=="myButton4"){
	document.getElementById("para1").innerHTML="Subject: Marketing Trends Assessment";
	document.getElementById("para2").innerHTML="The Marketing Department is excited to announce the availability of the Marketing Trends Assessment. This exam covers the latest industry trends, digital marketing strategies, and consumer behavior insights. Please take the time to complete the assessment on the Online Examination System.";

}
else {
	alert("invalid");
}
}

//create.php page JS functions
// validation.js

document.addEventListener("DOMContentLoaded", function () {
    var submitBtn = document.getElementById("submitBtn");

    submitBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the form from submitting

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
            // If all fields are filled, submit the form or show success message
            alert("Exam added successfully!");
            // Uncomment the following line to submit the form
            document.forms[0].submit();
        }
    });
});
