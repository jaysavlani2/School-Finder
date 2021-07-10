<html> 
<title>Apply Now</title>
<link rel="stylesheet" href="css/home_page.css"> 
<style>
    body {
      background-image: url('img/bg.jpg');
    }    
    * {    
      box-sizing: border-box;    
    }    
        
    input[type=text], select, textarea {    
      width: 100%;    
      padding: 12px;    
      border: 1px solid rgb(70, 68, 68);    
      border-radius: 4px;    
      resize: vertical;    
    }    
    input[type=email], select, textarea {    
      width: 100%;    
      padding: 12px;    
      border: 1px solid rgb(70, 68, 68);    
      border-radius: 4px;    
      resize: vertical;    
    }    
        
    label {    
      padding: 12px 12px 12px 0;    
      display: inline-block;    
    }    
        
    input[type=submit] {    
      background-color: rgb(37, 116, 161);    
      color: white;    
      padding: 12px 20px;    
      border: none;    
      border-radius: 4px;    
      cursor: pointer;    
      float: right;    
    }    
        
    input[type=submit]:hover {    
      background-color: #45a049;    
    }    
        
    .container {    
      border-radius: 5px;    
      background-color: #f2f2f2;    
      padding: 20px;    
    }    
        
    .col-25 {    
      float: left;    
      width: 25%;    
      margin-top: 6px; 
      color: black;   
    }    
        
    .col-75 {    
      float: left;    
      width: 75%;    
      margin-top: 6px;    
    }    
        
    
    .row:after {    
      content: "";    
      display: table;    
      clear: both;    
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
    <h1 style="text-align: center; color: white;">Fill out your details</h1> 
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">    
                <div class="col-25">    
                    <label>Full Name</label>    
                </div>    
                <div class="col-75">    
                    <input type="text" placeholder="Enter Full Name" name="t1" required>    
                </div>    
            </div>   
            <div class="row">    
                <div class="col-25">    
                    <label>Contact</label>    
                </div>    
                <div class="col-75">    
                    <input type="text" maxlength="10" placeholder="Enter Contact Number" name="t2" required>    
                </div>    
            </div>   
            <div class="row">    
                <div class="col-25">    
                    <label>E-mail</label>    
                </div>    
                <div class="col-75">    
                    <input type="text" placeholder="Enter E-mail ID" name="t3" required>    
                </div>    
            </div>   
            <div class="row">    
                <div class="col-25">    
                    <label>Class</label>    
                </div>    
                <div class="col-75">  
                    <select name="t4" required>
                        <option>Select Class</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                        <option value="9th">9th</option>
                        <option value="10th">10th</option>
                        <option value="11th Science">11th Science</option>
                        <option value="11th Commerce">11th Commerce</option>
                        <option value="12th Science">12th Science</option>
                        <option value="12th Commerce">12th Commerce</option> 
                    </select>  
                </div> 
            </div> 
            <div class="row">    
                <div class="col-25">    
                    <label>City</label>    
                </div>    
                <div class="col-75">    
                    <input type="text" placeholder="Enter City" name="t5" required>    
                </div>    
            </div> 
            <div class="row">    
                <input type="submit" name="b1" value="Submit">    
            </div>
        </form>    
    </div>    
        
  
</body> 
  
</html> 
<?php
    include 'connection.php';
    if(isset($_POST['b1']))
    {
        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];
        $t4 = $_POST['t4'];
        $t5 = $_POST['t5'];
        $sql ="insert into applynow (full_name,contact,email,s_class,city) values ('".$t1."','".$t2."','".$t3."','".$t4."','".$t5."')";
        mysqli_query($conn,$sql);
        
    }
?>
