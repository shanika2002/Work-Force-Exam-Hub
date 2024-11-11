document.write(Date());

function payment()
{
	const Ename = document.getElementById('name');
	const amt = document.getElementById("amt");
	const date = document.getElementById("date");
	
	
	
	if (Ename.value == "" || amt.value == "" || date.value == "")
	{
		alert("fill the required fields");
	}
	else 
	{
        if (confirm("Are you sure you want to make this payment?")) 
		{
            window.location.href = 'readpayment.php';
        }
    }
	
}