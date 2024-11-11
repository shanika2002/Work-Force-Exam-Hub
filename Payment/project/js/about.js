document.write(Date());

function compform()
{
	const emp = document.getElementById('Eid');
	const mail = document.getElementById('email');
	const dep = document.getElementById('department');
	const textarea = document.getElementById("complaint");
	const textareaValue = textarea.value.trim();
	
	
	if (emp.value == "" || textareaValue.length === 0)
	{
		alert("fill the required fields");
	}
	else
	{
		alert("form submitted successfully");
		
	}
	
}


