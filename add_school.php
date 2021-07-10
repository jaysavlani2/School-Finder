<html>
<head>
	<title>Add School</title>
</head>
<style type="text/css">
	.headerContainer{
        background-color: rgb(4, 30, 66);
        box-sizing: border-box;
        color: rgb(4, 30, 66);
        font-family: "Montserrat";
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        width: 783px
    }
    .header{
        border-bottom-color: rgb(4, 30, 66);
        border-bottom-style: solid;
        border-bottom-width: 1px;
        box-sizing: border-box;
        color: rgb(4, 30, 66);
        display: block;
        font-family: "Montserrat";
        font-size: 10px;
        font-weight: 400;
        line-height: 20px;
        margin-bottom: 0px;
        margin-left: 26.5px;
        margin-right: 26.5px;
        max-width: 730px;
        padding-left: 0px;
        padding-right: 0px
    }
    .banner{
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
        padding-bottom: 4px;
        position: relative;
        width: 750px
    }
    .row{
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        font-family: "Montserrat";
        font-size: 24px;
        font-weight: 500;
        line-height: 40px;
        margin-bottom: 17px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        max-width: 730px;
        padding-bottom: 0px;
    }
    .col-xs-2{
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        float: left;
        font-family: "Montserrat";
        font-size: 34px;
        font-weight: 500;
        line-height: 40px;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px;
        position: relative;
        width: 121.667px
    }
    .org-logo img{
        border-bottom-color: rgb(51, 122, 183);
        border-bottom-style: none;
        border-bottom-width: 0px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(51, 122, 183);
        border-left-style: none;
        border-left-width: 0px;
        border-right-color: rgb(51, 122, 183);
        border-right-style: none;
        border-right-width: 0px;
        border-top-color: rgb(51, 122, 183);
        border-top-style: none;
        border-top-width: 0px;
        box-sizing: border-box;
        color: rgb(51, 122, 183);
        font-family: "Montserrat";
        font-size: 34px;
        font-weight: 500;
        height: 55px;
        line-height: 40px;
        margin-top: 3px;
        max-height: 25%;
        max-width: 25%;
        min-width: 55px;
        vertical-align: baseline;
        width: 55px
    }   
    form { 
        border: 3px solid #f1f1f1; 
    }  
	input[type=text],[type=file], select {
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
    }

    input[type=submit],[type=reset] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
    .container { 
        padding: 16px; 
    } 
</style>
<body>
	<div class="headerContainer">
    	<header class="header" role="banner">
        	<h3 class="row">
        	<div class="col-xs-2 org-logo">
            	<a><img src="img/Logo.png" width="576px" height="180px"></a>
        	</div>
        	<div class="col-xs-10 sitename">
        		<div class="headerText">Find My School</div>
        	</div>
        	</h3>
     	</header>
  	</div>
	<h1 style="text-align: center; color: red;">Add School</h1>
	<form method="POST" enctype="multipart/form-data">
		<div class="container">
        <label>School Name: </label> 
        <input type="text" name="t1" title="Enter only Characters" maxlength="100" pattern="[A-Z a-z]{1,100}" required><br>

        <label>City Name: </label>
        <input type="text" name="t2" title="Enter only Characters" maxlength="100" pattern="[A-Z a-z]{1,100}" required><br>

        <label>State Name: </label>
        <input type="text" name="t3" title="Enter only Characters" maxlength="100" pattern="[A-Z a-z]{1,100}" required><br>

        <label>Founding Year: </label>
        <input type="text" name="t4" title="Enter only Integers" maxlength="4" pattern="[0-9]{1,4}"><br>

        <label>Board: </label>
        <select name="t5" required>
            <option value="">Please Select</option>
            <option value="CBSE">CBSE</option>
            <option value="ICSE">ICSE</option>
            <option value="GSEB">GSEB</option>
            <option value="IB">IB</option>
        </select><br>

        <label>About School: </label>
        <textarea name="t6" required></textarea><br><br>

        <label>Facilities: </label><br><br>
        <input type="checkbox" name="t7[]" value="AC">  AC<br>
        <input type="checkbox" name="t7[]" value="Canteen">  Canteen<br>
        <input type="checkbox" name="t7[]" value="WIFI">  WIFI<br>
        <input type="checkbox" name="t7[]" value="Computer Lab">  Computer Lab<br>
        <input type="checkbox" name="t7[]" value="Sports">  Sports<br>
        <input type="checkbox" name="t7[]" value="Parking">  Parking<br>
        <input type="checkbox" name="t7[]" value="Library">  Library<br>
        <input type="checkbox" name="t7[]" value="Play Ground">  Play Ground<br>
        <input type="checkbox" name="t7[]" value="Smart Classroom">  Smart Classroom<br>
        <input type="checkbox" name="t7[]" value="Cafeteria">  Cafeteria<br>
        <input type="checkbox" name="t7[]" value="Labs">  Labs<br>
        <input type="checkbox" name="t7[]" value="Projectors">  Projectors<br>
        <input type="checkbox" name="t7[]" value="Auditorium">  Auditorium<br>
        <input type="checkbox" name="t7[]" value="Yoga">  Yoga<br>
        <input type="checkbox" name="t7[]" value="Medical">  Medical<br><br>

        <label>Location: </label>
        <input type="text" name="t8" maxlength="1000" required><br>

        <label>Upload School Photo: </label>
        <input type="file" name="f1" required><br>

        <input type="submit" name="b1" value="Submit">

        <input type="reset" value="Reset">
    </div>
    
    </form>
</body>
</html>

<?php
    include 'connection.php';
    if(isset($_POST['b1']))
    {
        $name=$_FILES['f1']['name'];
        $target_dir="C:/xampp/htdocs/School Finder/img/";

        $target_file = $target_dir.basename($_FILES['f1']['name']);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];
        $t4 = $_POST['t4'];
        $t5 = $_POST['t5'];
        $t6 = $_POST['t6'];
        $checkbox1=$_POST['t7'];  
		$chk="";  
		foreach($checkbox1 as $chk1)  
   		{  
      		$chk .= $chk1.",";  
   		}   
        $t8 = $_POST['t8'];

        $extenison_arr = array("jpg","jpeg","png","gif");

        if(in_array($imageFileType,$extenison_arr))
        {
            $sql ="insert into school (school_name,city_name,state_name,founding_year,board,about_school,facilites,location,img) values ('".$t1."','".$t2."','".$t3."','".$t4."','".$t5."','".$t6."','".$chk."','".$t8."','".$name."')";

            mysqli_query($conn,$sql);

            move_uploaded_file($_FILES['f1']['tmp_name'],$target_dir.$name);

        }
        else{
            echo "Error".mysqli_error($conn);
        }
    }
?>