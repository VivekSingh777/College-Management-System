
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
var status10;
var status11;
var status12;
var status13;
var status14;
var status15;
var status16;
var status17;
var status18;
var status19;
var status20;
var status21;
var status22;
var status23;


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

function checkOnStudentAdd(){

	status1 = false;
	status2 = false;
	status3 = false;
	status4 = false;
	status5 = false;
	status6 = false;
	status7 = false;
	status8 = false;
	status9 = false;
	status10 = false;
	status11 = false;
	status12 = false;
	status13 = false;
	status14 = false;
	status15 = false;
	status16 = false;
	status17 = false;
	status18 = false;
	status19 = false;
	status20 = false;
	status21 = false;
	status22 = false;
	status23 = false;

	sid = document.getElementById("sid");
	first_name = document.getElementById("first_name");
	last_name = document.getElementById("last_name");
	father_name = document.getElementById("father_name");
	mother_name = document.getElementById("mother_name");
	gender = document.getElementById("gender");
	s_mob_no = document.getElementById("s_mob_no");
	guardian_email = document.getElementById("guardian_email");
	guardian_mob_no = document.getElementById("guardian_mob_no");
	dob = document.getElementById("dob");
	address = document.getElementById("address");
	city = document.getElementById("city");
	pin_code = document.getElementById("pin_code");
	state = document.getElementById("state");
	blood_group = document.getElementById("blood_group");
	category = document.getElementById("category");
	jee_rank = document.getElementById("jee_rank");
	jee_roll_no = document.getElementById("jee_roll_no");
	board = document.getElementById("board");
	branch = document.getElementById("branch");
	batch = document.getElementById("batch");
	mc = document.getElementById("mc");
	arc = document.getElementById("arc");
	
	err="";
	
	if(sid.value == ""){
		sid.style.borderColor="red";
		err+="Provide id \n";
	}else{
		sid.style.borderColor="#ccc";
		status1=true;
	}

	if(first_name.value == ""){
		first_name.style.borderColor="red";
		err+="Provide first_name \n";
	}else{
		first_name.style.borderColor="#ccc";
		status2=true;
	}

	if(last_name.value == ""){
		last_name.style.borderColor="red";
		err+="Provide last_name \n";
	}else{
		last_name.style.borderColor="#ccc";
		status3=true;
	}

	if(father_name.value == ""){
		father_name.style.borderColor="red";
		err+="Provide father_name \n";
	}else{
		father_name.style.borderColor="#ccc";
		status4=true;
	}

//Made By P Jishnu Jaykumar

	if(mother_name.value == ""){
		mother_name.style.borderColor="red";
		err+="Provide mother_name \n";
	}else{
		mother_name.style.borderColor="#ccc";
		status5=true;
	}


	if(gender.value == ""){
		gender.style.borderColor="red";
		err+="Provide gender \n";
	}else{
		gender.style.borderColor="#ccc";
		status6=true;
	}


if(s_mob_no.value == ""){
		s_mob_no.style.borderColor="red";
		err+="Provide Mobile number \n";
	}else{
		
		if(s_mob_no.value.length != 10){
			s_mob_no.style.borderColor="red";
			err+="Mobile number should have 10 digits \n";
		}else
		{
		s_mob_no.style.borderColor="#ccc";
		status7=true;
	    }
	}



	if(guardian_email.value == ""){
		guardian_email.style.borderColor="red";
		err+="Provide guardian_email \n";
	}else{
		guardian_email.style.borderColor="#ccc";
		status8=true;
	}

	
	if(guardian_mob_no.value == ""){
		s_mob_no.style.borderColor="red";
		err+="Provide Mobile number \n";
	}else{
		
		if(guardian_mob_no.value.length != 10){
			guardian_mob_no.style.borderColor="red";
			err+="Mobile number should have 10 digits \n";
		}else
		{
		guardian_mob_no.style.borderColor="#ccc";
		status9=true;
	    }
	}


	if(dob.value == ""){
		dob.style.borderColor="red";
		err+="Provide birthdate \n";
	}else{
		dob.style.borderColor="#ccc";
		status10=true;
	}

	if(address.value == ""){
		address.style.borderColor="red";
		err+="Provide address \n";
	}else{
		address.style.borderColor="#ccc";
		status11=true;
	}

	if(city.value == ""){
		city.style.borderColor="red";
		err+="Provide city \n";
	}else{
		city.style.borderColor="#ccc";
		status12=true;
	}

	if(pin_code.value == ""){
		pin_code.style.borderColor="red";
		err+="Provide pin_code \n";
	}else{
		pin_code.style.borderColor="#ccc";
		status13=true;
	}

	if(state.value == ""){
		state.style.borderColor="red";
		err+="Provide state \n";
	}else{
		state.style.borderColor="#ccc";
		status14=true;
	}

	if(blood_group.value == ""){
		blood_group.style.borderColor="red";
		err+="Provide blood_group \n";
	}else{
		blood_group.style.borderColor="#ccc";
		status15=true;
	}

	if(category.value == ""){
		category.style.borderColor="red";
		err+="Provide category \n";
	}else{
		category.style.borderColor="#ccc";
		status16=true;
	}

	if(jee_rank.value == ""){
		jee_rank.style.borderColor="red";
		err+="Provide jee_rank \n";
	}else{
		jee_rank.style.borderColor="#ccc";
		status17=true;
	}

	if(jee_roll_no.value == ""){
		jee_roll_no.style.borderColor="red";
		err+="Provide jee_roll_no \n";
	}else{
		jee_roll_no.style.borderColor="#ccc";
		status18=true;
	}

	if(board.value == ""){
		board.style.borderColor="red";
		err+="Provide board \n";
	}else{
		board.style.borderColor="#ccc";
		status19=true;
	}
	if(branch.value == ""){
		branch.style.borderColor="red";
		err+="Provide branch \n";
	}else{
		branch.style.borderColor="#ccc";
		status20=true;
	}
	if(batch.value == ""){
		batch.style.borderColor="red";
		err+="Provide batch \n";
	}else{
		batch.style.borderColor="#ccc";
		status21=true;
	}

	if(mc.value == ""){
		mc.style.borderColor="red";
		err+="Provide medical certificate status \n";
	}else{
		mc.style.borderColor="#ccc";
		status22=true;
	}

	if(arc.value == ""){
		arc.style.borderColor="red";
		err+="Provide anti-ragging affidavit status \n";
	}else{
		arc.style.borderColor="#ccc";
		status23=true;
	}


	if(status1 == true && status2 == true && status3 == true && status4 == true && status5 == true && status6 == true && status7 == true && status8 == true && status9 == true
		 && status10 == true && status11 == true && status12 == true && status13 == true && status14 == true && status15 == true && status16 == true && status17 == true && status18 == true
		  && status19 == true && status20 == true && status21 == true && status22 == true && status23 == true){
		//alert("TRUE");
		//return true;


		var xhr = createXHR();
	
    //window.location = "";

	xhr.onreadystatechange = function getInfo(){
	
		if(xhr.readyState == 4 && xhr.status == 200){		
			
			var response = parseInt(xhr.responseText);

			 
			 if(response == 1 ){

			 		alert("Entered successfully");
			 	    window.location = "admin_acad_Slist.php";
			
			
			 }
			
			 	else{

			 		//alert(response);

					alert("Please provide correct credentials.");

			 	}


		}

	};
	
	//alert("xhr.readystate = " + xhr.readystate + " xhr.status " + xhr.status);
	
	xhr.open("GET","addStudent.php?sid="+sid.value+"&first_name="+first_name.value+"&last_name="+last_name.value
			 +"&father_name="+father_name.value+"&mother_name="+mother_name.value+"&gender="+gender.value
			 +"&s_mob_no="+s_mob_no.value+"&guardian_email="+guardian_email.value+"&guardian_mob_no="+guardian_mob_no.value
			 +"&dob="+dob.value+"&address="+address.value+"&city="+city.value+"&pin_code="+pin_code.value+"&state="+state.value
			 +"&blood_group="+blood_group.value+"&category="+category.value+"&jee_rank="+jee_rank.value+"&jee_roll_no="+jee_roll_no.value+"&batch="+batch.value
			 +"&branch="+branch.value+"&board="+board.value+"&mc="+mc.value+"&arc="+arc.value,true);
	
	xhr.send();
	
	//return true;

	}else{
		alert(err);
		//return false;
	}

}


//Made By P Jishnu Jaykumar


function checkOnFacultyAdd(){

	status1 = false;
	status2 = false;
	status3 = false;
	status4 = false;
	status5 = false;
	status6 = false;
	status7 = false;
	status8 = false;
	status9 = false;
	status10 = false;
	status11 = false;
	status12 = false;
	status13 = false;
	status14 = false;
	
	fid = document.getElementById("fid");
	first_name = document.getElementById("fname");
	last_name = document.getElementById("lname");
	gender = document.getElementById("gender");
	degree = document.getElementById("deg");
	degree_field = document.getElementById("deg_field");
	mob_no = document.getElementById("mob");
	email = document.getElementById("email");
	address = document.getElementById("addr");
	city = document.getElementById("city");
	state = document.getElementById("state");
	pin_code = document.getElementById("pin");
	blood_group = document.getElementById("blood_group");
	
	err="";
	
	if(fid.value == ""){
		fid.style.borderColor="red";
		err+="Provide id \n";
	}else{
		fid.style.borderColor="#ccc";
		status1=true;
	}

	if(first_name.value == ""){
		first_name.style.borderColor="red";
		err+="Provide first_name \n";
	}else{
		first_name.style.borderColor="#ccc";
		status2=true;
	}

	if(last_name.value == ""){
		last_name.style.borderColor="red";
		err+="Provide last_name \n";
	}else{
		last_name.style.borderColor="#ccc";
		status3=true;
	}

	if(gender.value == ""){
		gender.style.borderColor="red";
		err+="Provide gender \n";
	}else{
		gender.style.borderColor="#ccc";
		status4=true;
	}

	if(degree.value == ""){
		degree.style.borderColor="red";
		err+="Provide degree \n";
	}else{
		degree.style.borderColor="#ccc";
		status5=true;
	}

	if(degree_field.value == ""){
		degree_field.style.borderColor="red";
		err+="Provide Degree Field \n";
	}else{
		degree_field.style.borderColor="#ccc";
		status6=true;
	}

	if(mob_no.value == ""){
		mob_no.style.borderColor="red";
		err+="Provide Mobile number \n";
	}else{
		
		if(mob_no.value.length != 10){
			mob_no.style.borderColor="red";
			err+="Mobile number should have 10 digits \n";
		}else
		{
		mob_no.style.borderColor="#ccc";
		status7=true;
	    }
	}



	if(email.value == ""){
		email.style.borderColor="red";
		err+="Provide email \n";
	}else{
		email.style.borderColor="#ccc";
		status8=true;
	}

	
	if(address.value == ""){
		address.style.borderColor="red";
		err+="Provide address \n";
	}else{
		address.style.borderColor="#ccc";
		status9=true;
	}

	if(city.value == ""){
		city.style.borderColor="red";
		err+="Provide city \n";
	}else{
		city.style.borderColor="#ccc";
		status10=true;
	}

	if(pin_code.value == ""){
		pin_code.style.borderColor="red";
		err+="Provide pin_code \n";
	}else{
		pin_code.style.borderColor="#ccc";
		status11=true;
	}

	if(state.value == ""){
		state.style.borderColor="red";
		err+="Provide state \n";
	}else{
		state.style.borderColor="#ccc";
		status12=true;
	}

	if(blood_group.value == ""){
		blood_group.style.borderColor="red";
		err+="Provide blood_group \n";
	}else{
		blood_group.style.borderColor="#ccc";
		status14=true;
	}


	
	var s2=pinCheck("pin");
	

	
	if(status1 == true && status2 == true && status3 == true && status4 == true && status5 == true && status6 == true && status7 == true && status8 == true && status9 == true
		 && status10 == true && status11 == true && status12 == true && status14 == true && s2==true){

			var fn= document.getElementById("fname").value;
			var ln= document.getElementById("lname").value;
			var gn= document.getElementById("gender").value;

			var dg= document.getElementById("deg"	).value;
			var dgf= document.getElementById("deg_field").value;
			var mb= document.getElementById("mob").value;

			var em= document.getElementById("email").value;
			var adr= document.getElementById("addr").value;
			var city= document.getElementById("city").value;

			var state= document.getElementById("state").value;
			var pin= document.getElementById("pin").value;
			var bg= document.getElementById("blood_group").value;
			var fid= document.getElementById("fid").value;

			var xhr;

			xhr = new XMLHttpRequest();


			xhr.onreadystatechange= function getInfo(){

			if(xhr.readyState == 4 && xhr.status == 200){

  			var response = xhr.responseText;

  //alert("response : " + response);

  			if(response == "failure"){

      		//window.location = "faculty_profile.php";

      		alert("Failure");

  			}else{

      				alert("Success");
      				window.location="admin_acad_flist.php";

  				}

			}

		}; 

			xhr.open("GET","addfaculty.php?f_id=" + fid +
                               "&first_name=" + fn +
                               "&last_name=" + ln + 
                               "&degree=" + dg + 
                               "&degree_field=" + dgf + 
                               "&gender=" + gn +
                               "&email=" + em + 
                               "&mobile_no=" + mb +
                               "&city=" + city + 
                               "&address=" + adr + 
                               "&bloodgroup=" + bg + 
                               "&state=" + state+ 
                               "&pin=" + pin ,true);
			xhr.send();
}
	else{
		alert(err);
		//return false;
	}

}



function checkMobile(num)  
{  
  var mob = document.getElementById(num);
  var filter = /^\d{10}$/;  
  if(filter.test(num.value))  
        {  
      return true;
        }  
      else  
        {  
        alert("Please provide a valid mob no \n");  
        document.getElementById(num).style.borderColor = "red";
        return false;  
        }  
}  



function checkEmail(id) {

    var email = document.getElementById(id);
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    //email.focus;
    alert("Please provide a valid email \n");
    document.getElementById(id).style.borderColor = "red";
    return false;
 }else{
 	return true;
 }
}

function pinCheck(pin)  
{  
  var pin1 = document.getElementById('pin');
  var filter = /^\d{6}$/;  
  if(filter.test(pin1.value))  
        {  
      return true;
        }  
      else  
        {  
        alert("Please provide a valid PIN no.");  
        document.getElementById('pin').style.borderColor = "red";
        return false;  
        }  
}  

//Edited by Vinayak Tiwari

function changePass(fid,ut){
	var fn= document.getElementById("user-current_pass");
	var ln= document.getElementById("user-new_pass");
	var gn= document.getElementById("user-retype_pass");
	var status11=false;
	var status12=false;
	var status14=false;
	err="";
	if(fn.value == ""){
		fn.style.borderColor="red";
		err+="Provide current password \n";
	}else{
		fn.style.borderColor="#ccc";
		status11=true;
	}

	if(ln.value == ""){
		ln.style.borderColor="red";
		err+="Provide new password \n";
	}else{
		ln.style.borderColor="#ccc";
		status12=true;
	}

	if(gn.value == ""){
		gn.style.borderColor="red";
		err+="Retype new password \n";
	}else{
		gn.style.borderColor="#ccc";
		status14=true;
	}	

	if(status11 == true && status14==true && status12==true){
			var xhr;

			xhr = new XMLHttpRequest();

			xhr.onreadystatechange= function getInfo(){

			if(xhr.readyState == 4 && xhr.status == 200){

  			var response = parseInt(xhr.responseText);

  //alert("response : " + response);

  			if(response == 0){

      		//window.location = "faculty_profile.php";

      		alert("Connection Failure");

  			}else if(response == 1){
      				alert("Success");
      				//window.location="admin_acad_flist.php";
      				}else if(response == 2){
      					alert("Current password entered incorrectly");
      				}
  				}

			};

			xhr.open("GET","CP_backend.php?id=" + fid +
                               "&usertype=" + ut +
                               "&cp=" + fn.value + 
                               "&np=" + ln.value ,true);
			xhr.send();
}
	else{
		alert(err);
		//return false;
	}
}

