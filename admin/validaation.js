// JavaScript Document
function fnm1(event)
{

	if(!(event.keyCode>=65 && event.keyCode<=90 || event.keyCode>=97 && event.keyCode<=122 || event.keyCode==32 || event.keyCode==32))
	
	{
		
				alert("enter only name")
				event.keyCode=0;
	} 
}
function num1(event)
{

	if(!(event.keyCode>=48 && event.keyCode<=57 || event.keyCode==32 || event.keyCode==8))
	
	{
		
		//alert("enter only number");
		event.keyCode=0;
	} 
}
function validate_reruired(field,alerttxt)
{
	with(field)
	{
		if(value==null || value=="")
		{
			alert(alerttxt);
			return false;
		}
	}

}
function validate_form(frm)
{

	with(frm)
	{
		if(validate_reruired(user_name,"user name must be entered")==false)
		{user_name.focus(); return false;}
		if(validate_reruired(user_pass,"password must be entered")==false)
		{user_pass.focus(); return false;}
		if(validate_reruired(user_passs,"password must be entered")==false)
		{user_passs.focus(); return false;}
		if (user_pass.value != user_passs.value) 
		{ 
       		alert("Your password and confirmation password do not match.");
     			  user_passs.focus();
   			return false; 
			}
		
		if(validate_reruired(address,"user address must be entered")==false)
		{address.focus(); return false;}
		if(validate_reruired(contact,"user contact no must be entered")==false)
		{contact.focus(); return false;}
		if(validate_reruired(email,"user valid email must be entered")==false)
		{email.focus(); return false;}
		if(validate_email()==false)
		{email.focus(); return false;}
		/*(validate_reruired(country,"user country must be entered")==false)
		{country.focus(); return false;}*/
		/*if(validate_reruired(state,"user state must be entered")==false)
		{state.focus(); return false;}
		if(validate_reruired(city,"user city  must be entered")==false)
		{city.focus(); return false;}*/
	}
}
function validate_email()
{
	if(document.forms(0).elements[6].value.indexOf('@',0)==-1 || document.forms(0).elements[6].value.indexOf('.',0)==-1)
	{
	alert("in the email field reqqires an \"@\" and \".\". \n  please  enter  valid  email id..");
		return false;
	}
	else 
	{
		return true;
	}
}
//fuction to return the xml http object
	function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	
	function getsubcategory(countryId) {		
		
		var strURL="findsubcategory.php?cat="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('catdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getState(country_name) {		
		
		var strURL="findstate.php?country="+country_name;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}