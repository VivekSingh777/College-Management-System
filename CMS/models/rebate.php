<?php
  class Rebate {


// for rebate
    public $description;
    public $st_id;
    public $apply_date;
    public $from_date;
    public $no_of_days;
    public $status;
    public $rid;
    public $Action;

 public function __construct($rid,$description, $st_id, $apply_date,$from_date,$no_of_days,$status,$action) {
      $this->rid  = $rid;
      $this->description      = $description;
      $this->st_id  = $st_id;
      $this->apply_date = $apply_date;
      $this->from_date = $from_date;
      $this->no_of_days = $no_of_days;
      $this->status = $status;
      $this->Action= $action;
    }
    //rebate constructor
    // for student
     public function  rebate_status($st_id){
       $id = intval($st_id);
      $db = Db::getInstance();
      
      $req = $db->query("SELECT rid,description,st_id,apply_date,from_date,no_of_days,status,Action From rebate WHERE st_id='".$id."' ");
      foreach($req->fetchAll() as $post) {
        $list[] = new Rebate($post['rid'],$post['description'], $post['st_id'], $post['apply_date'],
          $post['from_date'],$post['no_of_days'],$post['status'],$post['Action']);
      }

      return $list; 


    }

    // for admin
    public function  rebate_status2(){
      // $id = intval($st_id);
      $db = Db::getInstance();
      
      $req = $db->query("SELECT rid,description,st_id,apply_date,from_date,no_of_days,status,Action From rebate ");
      foreach($req->fetchAll() as $post) {
        $list[] = new Rebate($post['rid'],$post['description'], $post['st_id'], $post['apply_date'],$post['from_date'],
          $post['no_of_days'],$post['status'],$post['Action']);
      }
    return $list;
    }
    

    //change status
    public function  change_status($status , $rid){
       $st = $status;
       $id = intval($rid);
      $db = Db::getInstance();
      $one=1;
      
      $req = $db->query(" UPDATE rebate 
 SET status ='".$st."' , Action='".$one."' WHERE rid ='".$id."' ");
  header('Location: ?controller=admin&action=rebate_status');      

      //return $list; 


    }

  }
  class admin_rebate_status {
   public $rid;
   public   $description;
    public $st_id;
    public $apply_date;
    public $from_date;
    public $no_of_days;
    public $status;

    public function __construct($rid,$description, $st_id, $apply_date,$from_date,$no_of_days,$status) {
      $this->rid=$rid;
      $this->description = $description;
      $this->st_id  = $st_id;
      $this->apply_date = $apply_date;
      $this->from_date = $from_date;
      $this->no_of_days = $no_of_days;
      $this->status = $status;
    }
 


  }

  ?> 