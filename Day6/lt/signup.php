<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
<style>
.error {color: #FF0000;}
</style>
   
  </head>

  <body>
  <?php  $fnameerr = $lnameerr = $emailerr = $gendererr = $commenterr = $cityerr = $hobieerr = $contacterr = "";
$fname = $lname = $email = $gender = $comment = $city = $hobie = $contact = "";
 ?>



  <section id="container" >
     
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Welcome</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    
                            <li>
                                <!-- <a href="index.html#">See all messages</a> -->
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <!-- <li><a class="logout" href="login.html">Logout</a></li> -->
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Sign Up</h5>
                    
                  <!-- <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <! <span>Dashboard</span> -->
                      <!-- </a> -->
                  <!-- </li> -->

                  

                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a> --> 
                      <!-- <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul> -->
                  <!-- </li> -->
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li> -->

              <!-- </ul> -->
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Student Details</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Add Correct information</h4>
                      <form class="form-horizontal style-form" method="post" action="index.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
                                  <span class="error">* <?php echo $fnameerr;?></span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
                                  <span class="error">* <?php echo $lnameerr;?></span>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
                                  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                        
                          <input type="email" class="form-control" name="email" value="<?php echo $email;?>">

                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" value="<?php echo $contact;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select City</label>
                              <div class="col-sm-10">
                                  <select name="city" id="city">
                          <option value="Toronto">Toronto</option>
                          <option value="Vancouver">Vancouver</option>
                          <option value="New York">New York</option>
                          <option value="Las Vegas">Las Vegas</option>
                        </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select Hobie</label>
                              <div class="col-sm-10">
                                  <select name="hobie" id="hobie">
                          <option value="Swimming">Swimming</option>
                          <option value="Running">Running</option>
                          <option value="Singing">Singing</option>
                          <option value="Dancing">Dancing</option>
                        </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Comment</label>
                              <div class="col-sm-10">
                                  <!-- <input type="text" class="form-control"> -->
                                  <textarea name="comment" id="comment" placeholder="Enter your comment" rows="6" value="<?php echo $comment;?>" ></textarea>
                              </div>
                          </div>
                          

                         <button type="Submit" class="btn btn-theme04">Submit</button>
                          </form>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <!-- <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      // $(function(){
      //     $('select.styled').customSelect();
      // });

  </script>

  </body>
</html>
