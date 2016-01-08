<?php
  class Student {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $student_id;
    public $firstName;
    public $lastName;
    public $batch;
    public $branch;


    public function __construct($id, $fname, $last,$batch,$course) {
      $this->student_id      = $id;
      $this->firstname  = $fname;
      $this->lastname = $last;
      $this->batch = $batch;
      $this->branch = $course;
    }
   

    public function  manage_student(){
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT sid,firstname,lastname,batch,branch From student order by batch');
      foreach($req->fetchAll() as $post) {
        $list[] = new Student($post['sid'], $post['firstname'], $post['lastname'],$post['batch'],$post['branch']);
      }

      return $list;


    }

   

        public function add_demo($id){
    $db = Db::getInstance();
      $req = $db->query('Insert id INTO demo Values("'.$id.'")');


    }

    

    
  }
?>  