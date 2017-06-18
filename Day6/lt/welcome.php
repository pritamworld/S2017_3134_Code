<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    
  </head>

  <body>
  <?php
session_start();


$jsonString = '[{"name":"Alfreds Futterkiste"},{"name":"Ana Trujillo Emparedados y helados"},{"name":"Antonio Moreno Taqueria"},{"name":"Around the Horn"},{"name":"Berglunds snabbkop"},{"name":"Blauer See Delikatessen"},{"name":"Blondel pere et fils"},{"name":"Bolido Comidas preparadas"},{"name":"Bon app"},{"name":"Bottom Dollar Marketse"}]';

$a = json_decode($jsonString,true);
// var_dump($a);

// echo "".$a[0]["name"];




if (isset($_SESSION["fname"])) {
  
// echo $_SESSION["fname"];




}else {
  header('location: index.php');
}

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
              	  <h5 class="centered"><?php echo "".$_SESSION["fname"]; ?></h5>
              	  	
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Student Details</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>First Name</th>
		                              <th>Last Name</th>
		                              <th>Gender</th>
                                  <th>Email</th>
                                  <th>City</th>
                                  <th>Hobie</th>
                                  <th>Comment</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          <tr>
                              <td><?php echo "1" ?></td>
		                              <td><?php echo "".$_SESSION["fname"]; ?></td>
		                              <td><?php echo "".$_SESSION["lname"]; ?></td>
		                              <td><?php echo "".$_SESSION["gender"]; ?></td>
		                              <td><?php echo "".$_SESSION["email"]; ?></td>
                                  <td><?php echo "".$_SESSION["city"]; ?></td>
                                  <td><?php echo "".$_SESSION["hobie"]; ?></td>
                                  <td><?php echo "".$_SESSION["comment"]; ?></td>
                                  
		                          </tr>
                              <tr>
                              <td><?php echo "2" ?></td>
                                  <td><?php echo "".$a[0]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "3" ?></td>
                                  <td><?php echo "".$a[1]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "4" ?></td>
                                  <td><?php echo "".$a[2]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "5" ?></td>
                                  <td><?php echo "".$a[3]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "6" ?></td>
                                  <td><?php echo "".$a[4]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "6" ?></td>
                                  <td><?php echo "".$a[5]["name"]; ?></td>
                                   <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
                              <tr>
                              <td><?php echo "7" ?></td>
                                  <td><?php echo "".$a[6]["name"]; ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  <td><?php "" ?></td>
                                  
                                  
                              </tr>
		                          
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                  

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
