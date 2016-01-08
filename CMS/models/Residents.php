<?php
  class Resident {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $student_id;
    public $Hostel_no;
    public $Room_no;
    
    public function __construct($id, $Hno, $Rno) {
      $this->student_id      = $id;
      $this->Hostel_no  = $Hno;
      $this->Room_no = $Rno;
      }
    public function  manage_student(){
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT hostel_no,room_no,sid From hostel_residents order by hostel_no,room_no ');
      foreach($req->fetchAll() as $post) {
        $list[] = new Resident($post['hostel_no'], $post['room_no'], $post['sid']);
      }

      return $list;


    }


    public function  manage_student_individual($sid){
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("SELECT hostel_no,room_no,sid From hostel_residents WHERE sid = '".$sid."'");
      foreach($req->fetchAll() as $post) {
        $list[] = new Resident($post['hostel_no'], $post['room_no'], $post['sid']);
      }

      return $list;


    }

    public function add_demo($id){
    $db = Db::getInstance();
      $req = $db->query('Insert id INTO demo Values("'.$id.'")');


    }

    

    
  }
?>  