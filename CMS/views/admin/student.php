<p>Here is a list of all posts:</p>

<table class="table table-striped table-bordered">
    <thead>
<tr><th>#</th><th><a href="index.php?r=student%2Fstu-master%2Findex&amp;
    sort=stu_unique_id" data-sort="stu_unique_id">Student ID</a></th>
    <th><a href="index.php?r=student%2Fstu-master%2Findex&amp;sort=stu_first_name" data-sort="stu_first_name">First Name</a></th>
    <th><a href="index.php?r=student%2Fstu-master%2Findex&amp;sort=stu_last_name" data-sort="stu_last_name">Last Name</a></th>
    
    <th><a href="index.php?r=student%2Fstu-master%2Findex&amp;sort=stu_master_batch_id" data-sort="stu_master_batch_id">Batch</a></th>
    <th><a href="index.php?r=student%2Fstu-master%2Findex&amp;sort=stu_master_course_id" data-sort="stu_master_course_id">Course</a></th>
    <th>&nbsp;</th>
</tr>
<?php   $counter=0; ?>

<?php foreach($posts as $post) { 
	
	?>
  

<tr> 
<td><?php 

 echo $counter ; 
 $counter++; 
  ?>
<td><?php  echo $post->student_id   ?>
<td><?php  echo $post->firstname   ?>
<td><?php  echo $post->lastname   ?>
<td><?php  echo $post->batch   ?>
<td><?php  echo $post->branch   ?>	

</tr>

<?php } ?>





</table>