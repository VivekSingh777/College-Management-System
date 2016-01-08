<?php
  class AdminsController {


  	public function dashboard(){

  		//echo "hello";
  		 require_once('views/admin/admin.htm');
  	}
  	public function  course_management(){

  		require_once('views/admin/ManageCourseModules.htm');	
  	}
  	public function student_management(){
  		$posts = Student::manage_student();
  		require_once('views/admin/ManageStudents.php');	
  	}
    public function demo(){
       if (!isset($_GET['id']))
        return call('pages', 'error');
       $post = Student::add_demo($_GET['id']);
      require_once('views/admin/demo.php');


    }
    //for opening mess module.
    public function mess_module(){

     require_once('views/admin/MessModule.php'); 
    }
    //for rebate status
    public function rebate_status(){
      $posts = Rebate::rebate_status2();
     require_once('views/admin/RebateStatus.php'); 
    }
    public function view_complain(){
           $posts = complain1::view_complain();
     require_once('views/admin/ViewComplains.php'); 
    }
    
    //AdminsController WILL  chane status of request rebate.
    public function change_status(){
      $post = Rebate::change_status($_GET['status'] ,$_GET['rid'] );

     require_once('views/admin/RebateStatus.php'); 

    }
    public function reply(){
       require_once('views/admin/reply.php'); 

  }
  public function change_status_complaint(){
      $post = complain1::change_status_complaint($_GET['status'],$_GET['cid']);

     require_once('views/admin/viewcomplains.php');
}
public function update_reply(){
  $post = complain1::update_reply($_GET['cid'],$_GET['reply_description']);
       require_once('views/admin/viewcomplain.php'); 
}


public function hostel_module(){

     require_once('views/admin/HostelModule.php'); 
    }

    public function roomwise_student_details(){
      $posts=Resident::manage_student();
     require_once('views/admin/RoomwiseStudentDetails.php'); 
    }

    public function room_allotment(){
      require_once('views/admin/RoomAllotment.php');
    }
    public function resource_distribution(){
      require_once('views/admin/Resource_Distribution.php');
    }
    public function resource_distribution_details(){
      $posts=Resource::manage_resource();
      require_once('views/admin/RoomwiseResourceDetails.php');
    }
   public function add_resource(){
    
      require_once('views/admin/Add_Resource.php');
    }
    





  }

 ?>