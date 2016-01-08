/**
 * Composed by Jishnu
 * started on 21-10-2015
 */


var newPass = document.getElementById("new_password");
var confirmPass = document.getElementById("confirm_new_password");
var status6;
var status7;
var status8;
var err;

function resetPassword(){
	status6 = false;
	status7 = false;
	status8 = false;
	err="";
	
	if(newPass.value == ""){
		newPass.style.borderColor="red";
		err+="Provide new password \n";
	}else{
		newPass.style.borderColor="#ccc";
		status6=true;
	}
	
	if(confirmPass.value == ""){
		confirmPass.style.borderColor="red";
		err+="Confirm password field empty \n";
	}else{
		confirmPass.style.borderColor="#ccc";
		status7=true;
	}
	
	if(status6 == true && status7 == true && newPass.value != confirmPass.value){
		newPass.style.borderColor="red";
		confirmPass.style.borderColor="red";
		err+="New password and confirm password are not equal\n";
	}else{
		newPass.style.borderColor="#ccc";
		confirmPass.style.borderColor="#ccc";
		status8=true;
	}
	
	if(status6 == true && status7 == true && status8 == true){
		
		return true;
		
	}else{
	
		alert(err);
		return false;
		
	}
	
}