<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'admin':
         require_once('models/student.php');
          require_once('models/Residents.php');
          require_once('models/rebate.php');    
            require_once('models/complain_model.php');  
            require_once('models/Resource.php'); 
        $controller = new AdminsController();
      break;

      case 'student':
        require_once('models/student.php');
        require_once('models/Residents.php');
        require_once('models/rebate.php');
        require_once('models/complain_model.php');
        $controller = new StudentsController();
      break;

      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }

    // call the action
    $controller->{ $action }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('pages' => ['home', 'error'],
                                    'posts' => ['index', 'show'],
                                    'admin'=>['dashboard','course_management','student_management','mess_module',
                                    'rebate_status','view_complain','change_status_complaint',
                                    'update_reply','reply','change_status','hostel_module','room_allotment','roomwise_student_details',
                                    'resource_distribution','resource_distribution_details','add_resource'],
                                    'student'=>['dashboard','mess_module','reqforrebate','rebate_app',
                                    'rebate_status','complain','roomwise_student_details', 
                                     'hostel_module',
                                    'view_complain_response','submit_complain','manage_student_individual']
                                    );

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>