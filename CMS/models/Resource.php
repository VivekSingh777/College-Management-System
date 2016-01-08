<?php
  class Resource {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $resource_id;
    public $resource_name;
    public $count;
    public $purchase_date;
    public $warranty_period;
    
    public function __construct($resource_id, $resource_name, $count,$purchase_date,$warranty_period) {
      $this->resource_id      = $resource_id;
      $this->resource_name  = $resource_name;
      $this->count = $count;
      $this->purchase_date=$purchase_date;
      $this->warranty_period=$warranty_period;
    }
    public function  manage_resource(){
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT resource_id,resource,count,purchase_date,warranty_period From resources ');
      foreach($req->fetchAll() as $post) {
        $list[] = new Resource($post['resource_id'], $post['resource'], $post['count'],$post['purchase_date'],$post['warranty_period']);
      }

      return $list;


    }


    

    
  }
?>  