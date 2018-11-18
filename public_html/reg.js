function onlyText(elem,dmsg)
{
	var re=/[A-Za-z0-9]+$/;
	var x=elem.value;
	if(re.test(x))
	{
		//alert("success");
		return true;
	}
	else
	{
	alert(dmsg);
	elem.focus();
	return false;
	}
	
}
function addVal(elem,dmsg)
{
	var re=/[A-Za-z0-9.#@, ]+$/;
	var x=elem.value;
	if(re.test(x))
	{
		//alert("success");
		return true;
	}
	else
	{
	alert(dmsg);
	elem.focus();
	return false;
	}
}
function plainText(elem,dmsg)
{
	var re=/[A-Za-z0-9.]+$/;
	var x=elem.value;
	if(re.test(x))
	{
		//alert("success");
		return true;
	}
	else
	{
	alert(dmsg);
	elem.focus();
	return false;
	}
	
}
function onlyNumeric(elem,dmsg)
{
	var re=/[0-9]+$/;
	var x=elem.value;
	if(re.test(x) && x.length==10)
	{
		//alert("success");
		return true;
	}
	else
	{
	alert(dmsg);
	elem.focus();
	return false;
	}
}
function onlyNumber(elem,dmsg)
{
	var re=/[0-9.]+$/;
	var x=elem.value;
	if(re.test(x))
	{
		//alert("success");
		return true;
	}
	else
	{
	alert(dmsg);
	elem.focus();
	return false;
	}
}
