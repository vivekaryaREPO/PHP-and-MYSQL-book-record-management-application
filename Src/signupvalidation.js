function CheckCity(state)
{	
	var req=new XMLHttpRequest();
	req.open("get","http://localhost:2233/BRM/signupstatus.php?stateselected=" +state,true);
	req.send();
	req.onreadystatechange=function()
	{
		if(req.readyState==4 && req.status==200)
		{
			document.getElementById("feild4").innerHTML=req.responseText;
		}
	};
	console.log(state);
}