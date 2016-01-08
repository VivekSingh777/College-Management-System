<?php
  class complain1 {


// for rebate
    public $cid;
    public $sid;
    public $apply_date;
    public $request_type;
    public $no_of_days;
    public $status;
    public $description;
    public $reply;
    public $action;

 public function __construct($cid,$description,$sid,$request_type,$no_of_days, $apply_date,$status,$reply,$action) {
       $this->cid=$cid;   
      $this->description = $description;
      $this->sid=$sid;
      $this->request_type  = $request_type;
      $this->no_of_days = $no_of_days;
      $this->apply_date = $apply_date;
      $this->status = $status;
      $this->reply= $reply;
      $this->action=$action;
     
}






    public function  view_complain_response($st_id){
       $id = $st_id;
      $db = Db::getInstance();

      
      $req = $db->query("SELECT complaint_id, subject_description ,sid,request_type,TIMESTAMPDIFF(Day, `apply_date`, NOW()) 
        as no_of_days ,apply_date,status,reply,Action from complaint where sid='".$id."' ");
      foreach($req->fetchAll() as $post) {
        $list[] = new complain1($post['complaint_id'],$post['subject_description'],$post['sid'],$post['request_type'],$post['no_of_days'], $post['apply_date'],
          $post['status'],$post['reply'],$post['Action']);
      }
    return $list;
    }
  

  
  public function  view_complain(){
    $db = Db::getInstance();
      
      $req = $db->query("SELECT complaint_id,subject_description ,sid,request_type,TIMESTAMPDIFF(Day, `apply_date`, NOW()) as no_of_days ,apply_date,status,reply,Action from complaint  ");
      foreach($req->fetchAll() as $post) {
        $list[] = new complain1($post['complaint_id'],$post['subject_description'],$post['sid'],$post['request_type'],$post['no_of_days'], $post['apply_date'],
          $post['status'],$post['reply'],$post['Action']);
      }
    return $list;
    }


    public function  change_status_complaint($status , $cid){
       $st = $status;
       $id = intval($cid);
      $db = Db::getInstance();
      $one=1;
      
      $req = $db->query(" UPDATE complaint 
 SET status ='".$st."' , Action='".$one."' WHERE complaint_id ='".$id."' ");
  header('Location: ?controller=admin&action=view_complain&');      

      //return $list; 


    }

public function  update_reply($cid,$reply_description){
       $st = $reply_description;
       $id = intval($cid);
      $db = Db::getInstance();
    
      
      $req = $db->query(" UPDATE complaint 
 SET reply ='".$st."'  WHERE complaint_id ='".$id."' ");
  header('Location: ?controller=admin&action=view_complain');      

      //return $list; 


    }
    
  }

