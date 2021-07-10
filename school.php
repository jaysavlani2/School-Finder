<?php
    include 'connection.php';
    $sql = "SELECT * FROM school"; 
    $result = mysqli_query($conn,$sql); 
    $search = $_POST['search'];
    $sql1 = "select * from school where school_name like '%$search%'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = $result1->fetch_assoc();

 ?>
<html>
<head>
	<title><?php echo $row1['school_name'];?></title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="CSS/school.css">
	<style type="text/css">
		.main_banner3{
		background-attachment: scroll;
		background-clip: border-box;
		background-color: rgb(243, 243, 243);
		background-image: none;
		background-origin: padding-box;
		background-position: 0% 0%;
		background-position-x: 0%;
		background-position-y: 0%;
		background-repeat: repeat;
		background-size: auto;
		border-bottom-color: rgb(204, 204, 204);
		border-bottom-style: solid;
		border-bottom-width: 1px;
		box-sizing: border-box;
		color: rgb(42, 42, 42);
		float: left;
		font-family: Axiforma-Book;
		font-size: 14px;
		font-weight: 400;
		line-height: 20px;
		outline-color: rgb(42, 42, 42);
		outline-style: none;
		outline-width: 0px;
		padding-bottom: 15px;
		padding-left: 0px;
		padding-right: 0px;
		padding-top: 0px;
		position: relative;
		width: 783px;
	}

	</style>
	
</head>
<body>
	<div class="headerContainer">
    	<header class="header" role="banner">
     	<h3 class="row">
       		<div class="col-xs-2 org-logo">
       			<a><img src="img/Logo.png" width="576px" height="180px"></a>
       		</div>
     		<div class="col-xs-10 sitename"><div class="headerText">Find My School</div></div>
     	</h3>
     	</header>
 	</div>
	<div class="main_banner3">
  		<div class="main_container" style="text-align: center;">
    		<h1 title="<?php echo $row1['school_name'];?>"><?php echo $row1['school_name'];?></h1>
    		<div class="t2">
      			<ul>
        			<i class="fas fa-map-marker"></i><?php echo $row1['city_name'];?>,<?php echo $row1['state_name'];?> &nbsp;&nbsp;&nbsp;
        			<i class="fas fa-map-pin"></i> ESTB:- <?php echo $row1['founding_year'];?> &nbsp;&nbsp;&nbsp;   			
        			<i class="fas fa-book"></i> Education Board: <?php echo $row1['board'];?> &nbsp;&nbsp;&nbsp;
      			</ul>
      			<button class="button-three" onclick="window.location.href='applynow.php'">Apply Now</button>
    		</div>

  		</div>
	</div>
	<div class="banner"> 
		<img style="width: 100%;" src="img/<?php echo $row1['img'];?>">
	</div>
	<div class="mainContent">
	<div class="Content">
		<article class="topContent">
			<header>
				<h3 style="color:orange;">About The School</h3>  
			</header>
			<content>	
			<ul style="color: white;">
				<li>
					<p><strong><?php echo $row1['about_school'];?></strong></p>
				</li>
			</ul>
			</content>
		</article>

		<article class="middleContent">
			<header>
				<h3 style="color: orange;">Facilities</h3>  
			</header>
			<content>
				<ul style="color: white;"> 
					<?php 
						$arr=$row1['facilites'];
						$str_arr = explode (",", $arr);
						$tot = count($str_arr)-1;
						$i=0;
						while($tot>0){
					?> 

                   	<li>
                   	<?php 
                   		echo $str_arr[$i];
                   		$i=$i+1;
                   		$tot=$tot-1;
                   	}

                   	?>
                   		
                   	</li>
                </ul>

			</content>
		</article>
		<ul id="social_side_links">
			<li><a style="background-color: #3c5a96;" href="https://facebook.com" target="_blank"><img src="https://www.dropbox.com/s/xk5pdj8nks1ymdh/facebook-icon.png?raw=1" alt="" /></a></li>
			<li><a style="background-color: #1dadeb;" href="https://twitter.com" target="_blank"><img src="https://www.dropbox.com/s/c8in3qcf1uqsqrb/twitter-icon.png?raw=1" alt="" /></a></li>
			<li><a style="background-color: #1178b3;" href="https://linkedin.com" target="_blank"><img src="https://www.dropbox.com/s/pb0a0p7p1pwprue/linkedin-icon.png?raw=1" alt="" /></a></li>
		</ul>
		<article class="bottomContent">
			<header>
				<h3 style="color: orange;">Location</h3>  
			</header>
			<iframe src="<?php echo $row1['location'];?>" width="700" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</article>
	</div>
	</div>

<footer class="footer">
    <h1>A project by the HCD </h1>
	<h4>JAY SAVLANI</h4>
	<h4>GORAL GAJERA</h4>
	<h4>YASH PATEL</h4>
	<h4>We welcome all "
	<a class="mTo" title="Question? Comments? Email us!" href="feedback_form.php">feedback
	</a>
	" about our School  
	</h4>
</footer>
</body>
</html>