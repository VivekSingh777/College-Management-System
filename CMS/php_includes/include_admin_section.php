<aside class="right-side">

        <ul class="breadcrumb">
<li class="active">Home</li>
</ul>
                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
				<div class="callout callout-info msg-of-day">
			    <h4><i class="fa fa-bullhorn"></i> Message of day box</h4>
			    <p><marquee onmouseout="this.setAttribute('scrollamount', 6, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" scrollamount="6" behavior="scroll" direction="left">Each Day is a GIFT don't send it BACK unopened.  Have a nice Day !</marquee></p>
		</div>
		
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                                                  </h3>
                                    <p>
                                        View
                                        Complain                                </p>
                                </div>

                                								<a class="small-box-footer" href="index.php?controller=admin&action=view_complain" >More info <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>

                                                                        </h3>
                                    <p>
                                        Rebate 

                                        Status                                    </p>
                                </div>
                                
				<a class="small-box-footer" href="index.php?controller=admin&action=rebate_status">More info <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                                               </h3>
                                    <p>
                                         Add 
                                         Student                                 </p>
                                </div>
                                	<a class="small-box-footer" href="student_info.php">More info <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                                                   </h3>
                                    <p>
                                        ADD Faculty                                    </p>
                                </div>
                                
                                <a class="small-box-footer" href="admin_acad_addf.php">More info <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->

                            <script type="text/javascript">


function sendInfo()  
{  
//alert("Hi");  
var url="result_notification.php";  
  
if(window.XMLHttpRequest){  
request=new XMLHttpRequest();  
}  
else if(window.ActiveXObject){  
request=new ActiveXObject("Microsoft.XMLHTTP");  
}  
  
try{  
    
request.onreadystatechange=getInfo;  
request.open("GET",url,true);  
request.send();  
}catch(e){alert("Unable to connect to server");}  
}  
  
function getInfo(){  
    
if(request.readyState==4){  
var val1=request.responseText;  
alert("Successfully generated the notification");
}  
}  

                            </script>
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                                               </h3>
                                    <p>
                                    <a class="small-box-footer" onclick=sendInfo() >     Announce results </a>                                </p>
                                </div>
                                    <a class="small-box-footer" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div>
                    </div><!-- /.row -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->

    </section>

        <section class="content">
        <script>
$(document).ready(function(){
    $('.tab-content').slimScroll({
        height: '300px'
    });
});
$(document).ready(function(){
    $('#coursList').slimScroll({
        height: '250px'
    });
});
</script>
<style>
.tab-content {
   padding:15px;
}
.box .box-body .fc-widget-header {
    background: none;
}
.popover{
    max-width:450px;   
}
</style>


</aside>



    </div>
