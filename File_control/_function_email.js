function check_email(email_id){ 
        emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;
        var err_mail='Email không hợp lệ';
     	
	 if(emailRegExp.test(email_id.value)){
           
			return true;
			
        }else{
          
		   return false;
		   
        }
		
    }
	
