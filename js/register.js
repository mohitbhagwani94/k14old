function createAjaxObj()
{
	if(window.XMLHttpRequest)
		return new XMLHttpRequest();
	else
		return new ActiveXObject("Microsoft.XMLHTTP");
}


function loadCategories()
{
	var xml=createAjaxObj();
	var text="<option value=''>Select Category....</option>";
	xml.open("get","../xml/themes.xml",false);
	xml.send();
	var catalog=xml.responseXML.documentElement.getElementsByTagName("category");
	for(var i=0;i<catalog.length;i++)
	{
		var theme=catalog[i].getElementsByTagName("name");
		text+="<option value='"+i+"'>"+theme[0].firstChild.nodeValue+"</option>";
	}
	document.getElementById("category_drop").innerHTML=text;
}

function loadSubCategory()
{
	if(document.forms['register_form'].elements['category'].value!="")
	{
		var xml=createAjaxObj();
		var index=document.forms['register_form'].elements['category'].value;
		var text="<option value=''>Select Sub Category....</option>";
		xml.open("get","../xml/themes.xml",false);
		xml.send();
		var catalog=xml.responseXML.documentElement.getElementsByTagName("category");
			catalog=catalog[index].getElementsByTagName("subcategory");
		for(var i=0;i<catalog.length;i++)
		{
			text+="<option value='"+catalog[i].firstChild.nodeValue+"'>"+catalog[i].firstChild.nodeValue+"</option>";
		}
		document.getElementById("subcategory_drop").innerHTML=text;

	}
	else
		document.getElementById("subcategory_drop").innerHTML="<option value=''>Select Sub Category....</option>"

}