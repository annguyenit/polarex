// JavaScript Document

xmlhttp=ajaxFunction();
	    
		function Ajax_(filename,object,parent,kind)
		{
			
			xmlhttp.onreadystatechange=function()
			{
				
				Ajax_info(object,parent);
			}
			var para='keys='+object.id+'&kind='+kind;
			
			xmlhttp.open('GET',filename+para,true);
			xmlhttp.send(null);
			
			
		}
	
	  function Ajax_info(object,parent)
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{
				
					parent.removeChild(object,parent);
		}
	
	  }
	  
function remove_object(object,kind)
{
	var parent = object.parentNode;
	
	Ajax_('khach_hang_status.php?',object,parent,kind);
}