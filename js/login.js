function createAjaxObj()
{
	if(window.XMLHttpRequest)
		return new XMLHttpRequest();
	else
		return new ActiveXObject("Microsoft.XMLHTTP");
}

function login_verify()
{
	var usr=document.forms["admin_login_form"].elements['usr_name'].value;
	var star007=document.forms["admin_login_form"].elements['star007'].value;
	var xml=createAjaxObj();

	var data="usr_name="+encodeURIComponent(usr)+"&star007="+encodeURIComponent(star007)+"&admin_login_submit="+encodeURIComponent("true");
	xml.open("post","./lgin_verify.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(data);
	if(xml.responseText=="invalid")
	{
		alert("Incorrect User Name and password");
		return false;
	}


}