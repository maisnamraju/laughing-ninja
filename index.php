<?php require('includes/config.php');



 ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	    <link href="css/blog.css" rel="stylesheet" media="screen">
	    <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
		
</head>
<body>
<body>
		<style>
						/*
			 * Main navigation
			 *
			 * Turn the `.navbar` at the top of the docs purple.
			 */

			.bs-docs-nav {
			  text-shadow: 0 -1px 0 rgba(0,0,0,.15);
			  background-color: #F47063;
			  border-color: #F47063;
			  box-shadow: 0 1px 0 rgba(255,255,255,.1);
			}
			.bs-docs-nav .navbar-collapse {
			  border-color: #F8B291;
			}
			.bs-docs-nav .navbar-brand {
			  color: #fff;
			}
			.bs-docs-nav .navbar-nav > li > a {			  
				color: #fff;				
				text-shadow: 1px 1px 4px #e12310;
			}
			.bs-docs-nav .navbar-nav > li > a:hover {
			  color: #fff;
			}
			.bs-docs-nav .navbar-nav > .active > a,
			.bs-docs-nav .navbar-nav > .active > a:hover {
			  color: #fff;
			  background-color: rgba(206, 185, 176, 0.5);
			}
			.bs-docs-nav .navbar-toggle {
			  border-color: #563d7c;
			}
			.bs-docs-nav .navbar-toggle:hover {
			  background-color: #F8B291;
			  border-color: #F8B291;
			}


			/*
			 * Footer
			 *
			 * Separated section of content at the bottom of all pages, save the homepage.
			 */

			.bs-footer {
			  padding-top: 40px;
			  padding-bottom: 30px;
			  margin-top: 100px;
			  color: #777;
			  text-align: center;
			  border-top: 1px solid #e5e5e5;
			}
			.footer-links {
			  margin: 10px 0;
			  padding-left: 0;
			}
			.footer-links li {
			  display: inline;
			  padding: 0 2px;
			}
			.footer-links li:first-child {
			  padding-left: 0;
			}

			@media (min-width: 768px) {
			  .bs-footer {
			    text-align: left;
			  }
			  .bs-footer p {
			    margin-bottom: 0;
			  }
			}

			.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus{
						background-color: rgba(206, 185, 176, 0.5);
				}				
			.dropdown-menu {
			position: absolute;
			top: 100%;
			left: 0;
			z-index: 1000;
			display: none;
			float: left;
			min-width: 160px;
			padding: 5px 0;
			margin: 2px 0 0;
			list-style: none;
			background-color: #ffffff;
			border: 1px solid #ccc;
			border: 1px solid rgba(0, 0, 0, 0.2);
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
			-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			-webkit-background-clip: padding-box;
			-moz-background-clip: padding;
			background-clip: padding-box;
			}		

			html, body {
			font-family: Ubuntu, "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
			}	

			::selection {
				background: #b3d4fc;
				text-shadow: none;
				}
			p {
				line-height: 1.6em;
				font-weight: 300;
				display: block;
				-webkit-margin-before: 1em;
				-webkit-margin-after: 1em;
				-webkit-margin-start: 0px;
				-webkit-margin-end: 0px;
			}

			.btn-tales-one:hover, .btn-tales-one:focus {
				background-color: #f47063;	
				background-position: 0 -15px;
				border-color: $f47063;
				}
			.btn-tales-one {
				background-color: #f47063;	
				background-image: -webkit-gradient(linear, left 0%, left 100%, from(rgba(250, 204, 168, 0)), to(rgba(199, 149, 149, 0.38)));
				border-color: rgba(231, 136, 174, 0.69);
			}	

			.docs-menu {
				float: left;
				width: 350px;
				background-color: #fff;
				padding: 20px;
				font-size: 0.9em;
				-webkit-box-shadow: 2px 4px 1px #eeeeee;
				-moz-box-shadow: 2px 4px 1px #eeeeee;
				box-shadow: 2px 4px 1px #eeeeee;
				}
			.docs-menu ul {
				list-style: none;
			}	
		</style>
		<div class="container">
				<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
				  <!--<div class="container"> -->
				    <div class="navbar-header">
				    	<div class="container">	    	
					      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a href="../" class="navbar-brand">LOGO</a>
					     </div> 
				    </div>
				    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation" style="margin-right:30px;">
				      <ul class="nav navbar-nav">
				        <li class="active">
				          <a href="../getting-started">Home</a>
				        </li>
				        <li>
				          <a href="../css">About</a>
				        </li>
				        <li>
				          <a href="../components">FAQ</a>
				        </li>
				        <li>
				          <a href="../javascript">Projects</a>
				        </li>	        				      
		              	<li class="divider-vertical"></li>
						<li class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
								<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">								
									<form action="admin/login.php" method="post" accept-charset="UTF-8">
										<input class="form-control" style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
										<input class="form-control" style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
										<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
										<label class="string optional" for="user_remember_me"> Remember me</label>
										<input class="btn btn-primary btn-default" name="submit" type="submit" id="sign-in" value="Sign In">
										<label style="text-align:center;margin-top:5px">or</label>
			                            
									</form>
								</div>
							</li>
						</ul>
				    </nav>
				</header>				    
		    	<div style="margin-top:70px;" class="col-md-12">
		    		<div class="col-md-8">
		    			<div class="row">
		    			<?php
							try {

								$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
								while($row = $stmt->fetch()){

	echo '<div class="col-md-6 col-sm-6">';
                 	echo '<article class=" blog-teaser">';
                 	echo "<header>";
                    echo '<img src="HTML5.png" alt="A Cat" height="183" widht="183">';
                    echo '<h3><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h3>';
					echo '<span class="meta">'.date('jS M Y H:i:s', strtotime($row['postDate'])).', Alexander Rechsteiner</span>';
					echo '<hr></header>';
					echo '<div class="body">';					
					echo '<p>'.$row['postDesc'].'</p>';
					echo '</div>';
					echo '<div class="clearfix">';								
					echo '<a class="btn btn-tales-one" href="viewpost.php?id='.$row['postID'].'">'.'Read More'.'</a>';				
					echo '</div>';
					echo '</article>';
    echo '</div>';
				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
</div>
					</div>	 		
<div class="cold-md-4">
		    			<div class="container">
		    				<nav class="docs-menu cold-md-12" >
				                <ul>
									<li><h3>
									      <i class="glyphicon glyphicon-file" style="color:rgba(206, 185, 176, 0.5);"></i>Popular Posts</h3>
									</li>
									<ul>
										<li><a href="">Setting a tag in HTML</a></li>
										<li><a href="/docs/quick">Quickstart</a></li>
										<li><a href="/docs/contributing">Contributing</a></li>
									</ul>
								</ul>								
				            </nav>
				            <div style="margin-top:200px;" class="cold-md-12">
				            	<nav class="docs-menu cold-md-12">
				                <ul>
									<li><h3>
									      <i class="glyphicon glyphicon-file" style="color:rgba(206, 185, 176, 0.5);"></i>Popular Posts</h3>
									</li>
									<ul>
										<li><a href="">Setting a tag in HTML</a></li>
										<li><a href="/docs/quick">Quickstart</a></li>
										<li><a href="/docs/contributing">Contributing</a></li>
									</ul>
								</ul>								
				            </nav>
				            </div>				           
				           </div>				           
		    		</div>
		    	</div>
			</div>			
		<script src="//code.jquery.com/jquery.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
			    //Handles menu drop down
			    $('.dropdown-menu').find('form').click(function (e) {
			        e.stopPropagation();
			    });
			});
		</script>
	</body>
</html>