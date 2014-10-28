<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	<style>
		a.mynav{
			background-color:black;
			color: #FFFFFF;
		}
		.grayback {
			background:gray;
		}
		
		#topnav{
			background-color:black;
			color: #FFFFFF;
			border-color:black;
			border-radius: 0;
		}
		#topnavicon{
			color: #545454;
		}
		#menu-toggle{
			color: #545454;
			margin-left: -20px;
			padding-top: 4px;
		}
		
		#topnavicon{
			padding: 10px 0 10px 0;
			margin: 0 10px 0 10px;
		}

	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" >
		<div class="list-group" id="mynavset">
		  <a class="list-group-item mynav" href="partials/default.php" data="home"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
		  <a class="list-group-item mynav" href="#" data="library"><i class="fa fa-book fa-fw"></i>&nbsp; Library</a>
		  <a class="list-group-item mynav" href="#" data="application"><i class="fa fa-pencil fa-fw"></i>&nbsp; Applications</a>
		  <a class="list-group-item mynav" href="#" data="settings"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
		  <a class="list-group-item mynav" href="#" data="login"><i class="fa fa-beer"></i>&nbsp; Login</a>
		</div>
        </div>
        <!-- /#sidebar-wrapper -->


		<!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation" id="topnav">
        <div class="container-fluid">
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			<i class="fa fa-bars" id="menu-toggle" style="font-size:24px" id="menu-toggle"></i>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="">Login</a></li>
			  <li class="fa fa-home fa-1x" href="" id="topnavicon"></li>
			  <li class="fa fa-github-alt fa-1x" href="" id="topnavicon"></li>
			  <li class="fa fa-cog" href="" id="topnavicon"></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
        <!-- Page Content -->
		
        <div id="page-content-wrapper">
			
			<?php
        switch($_GET['content']){
            case 'register': include("partials/register.php");
                              break;
            case 'dashboard': echo"your momma";
                              break;
            case 'testing': include("partials/forms.php");
                              break;
            default : include("partials/default.php");
        }

        ?>
            
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>