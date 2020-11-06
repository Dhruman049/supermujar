// JavaScript Document

var aDivIdName=new Array();

aDivIdName[1]="f-1";
aDivIdName[2]="f-2";

function showdiv_detail(str2)
{
 for (i=1;i<=2;i++)
 {
	 //alert(aDivIdName[i]);
	 //alert(str2);
  if(aDivIdName[i] == str2)
  {
    document.getElementById('f'+i).className='current';   
    document.getElementById(str2).style.display='block';  
	
  }
  else
  {
    document.getElementById('f'+i).className='';   
    document.getElementById(aDivIdName[i]).style.display='none';  
  }
 
 }
}
// ---------------------   //

function showdiv(str)
{
	if (str=='pregnancy_email')
	{
	 	document.getElementById('pregnancy_email').style.display='block';
	}
	
	if (str=='password_show')
	{
	 document.getElementById('password_show').style.display='block';
		 	document.getElementById('password_hide').style.display='none';
	}
	
	if (str=='password_hide')
	{
	 document.getElementById('password_show').style.display='none';
		 	document.getElementById('password_hide').style.display='block';
	}
	
	if (str=='invite1')
	{
	 	document.getElementById('invite1').style.display='block';
			document.getElementById('hide_invite').style.display='none';
	}
	
	if (str=='invite2')
	{
	 	document.getElementById('invite2').style.display='block';
			document.getElementById('hide_invite1').style.display='none';
	}
	
	if (str=='invite3')
	{
	 	document.getElementById('invite3').style.display='block';
			document.getElementById('hide_invite2').style.display='none';
	}
	
	if (str=='invite4')
	{
	 	document.getElementById('invite4').style.display='block';
			document.getElementById('hide_invite3').style.display='none';
	}
	
	if (str=='invite5')
	{
	 	document.getElementById('invite5').style.display='block';
			document.getElementById('hide_invite4').style.display='none';
	}
	
	if (str=='show_more')
	{
	 	document.getElementById('show_more').style.display='none';
			document.getElementById('profile_hide').style.display='block';
				document.getElementById('fewer_question').style.display='block';
	}
	
	if (str=='fewer_question')
	{
	 	document.getElementById('show_more').style.display='block';
			document.getElementById('profile_hide').style.display='none';
				document.getElementById('fewer_question').style.display='none';
	}
}