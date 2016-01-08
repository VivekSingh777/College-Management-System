<?php
  class StudentsController {


  	public function dashboard(){

  		//echo "hello";
  		 require_once('views/student/StudentDashboard.php');
  	}


	public function mess_module(){

	require_once('views/student/MessModule.php');	
	}
	//srudent fee main module

	public function student_fee(){
		require_once('views/student/MessModule.php');
		
	}
	public function reqforrebate(){
		require_once('views/student/RequestForRebate.php');
	}
	
	public function complain(){
		require_once('views/student/Complain.php');
	}

	public function rebate_status(){
		$posts = Rebate::rebate_status($_GET['st_id']);
		require_once('views/student/RebateStatus.php');
	}
	public function view_complain_response(){
		$posts = complain1::view_complain_response($_GET['st_id']);
		require_once('views/student/ViewComplainResponse.php');
	}
public function submit_complain(){
		require_once('views/student/SubmitComplain.php');
	}

	public function hostel_module(){

     require_once('views/student/HostelModule.php'); 
    }


    public function roomwise_student_details(){
      $posts=Resident::manage_student_individual($_GET['st_id']);
     require_once('views/student/RoomwiseStudentDetails.php'); 
    }





}

  	?>