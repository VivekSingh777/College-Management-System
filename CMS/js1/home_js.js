
var email;
var password;
var status1;
var status2;
var status3;
var status4;
var status5;
var status6;
var status7;
var status8;
var status9;
var err;
var status;

function checkLogin(){
	
	username = document.getElementById("username");
	password = document.getElementById("login_password");
	user_type = document.getElementById("user_type");
	
	status1 = false;
	status2 = false;
	status3 = false;
	status = false;

	err="";
	
	if(username.value == "" || username.value == "Provide email"){
		username.style.borderColor="red";
		err+="Provide Username \n";
	}else{
		username.style.borderColor="#ccc";
		status1=true;
	}
	
	if(password.value == "" || password.value == "Provide password"){
		password.style.borderColor="red";
		err+="Provide password \n";
	}else{
		password.style.borderColor="#ccc";
		status2=true;
	}

	if(user_type.value == "" || user_type.value == "Provide email"){
		user_type.style.borderColor="red";
		err+="Choose a user type \n";
	}else{
		user_type.style.borderColor="#ccc";
		status3=true;
	}
	
	
	if(status1 == true && status2 == true && status3 == true){

    var xhr = createXHR();
	
    //window.location = "";

	xhr.onreadystatechange = function getInfo(){
	
		if(xhr.readyState == 4 && xhr.status == 200){		
			
			var response = xhr.responseText;

			 
			 if(response == "success" ){

			 		//alert(response + "status : " + status);

			 		document.getElementById("status").style.display = "none";
					
					document.getElementById("status").innerHTML = "";

			 	    window.location = "user.php?t=" + user_type.value;

			 	    status = true;

			 	    //alert(response + "status : " + status);
			
			
			 }
			
			 	else{

			 		//alert("Username or password incorrect");

			 		document.getElementById("status").style.display = "block";

			 		document.getElementById("status").style.color = "red";
					
					document.getElementById("status").innerHTML = "Please provide correct credentials";

					status = false;

					//window.location = "login-error.php";

			 		//alert(response + "status : " + status);

			 	}


		}

	};
	
	//alert("xhr.readystate = " + xhr.readystate + " xhr.status " + xhr.status);
	
	xhr.open("GET","login.php?u="+username.value+"&p="+login_password.value+"&t="+user_type.value,true);
	
	xhr.send();
	
	//return status;
	
	}else{
	
	alert(err);
	
	//return false;
	
	}
	
}

function createXHR(){

	return new XMLHttpRequest();
	
}
