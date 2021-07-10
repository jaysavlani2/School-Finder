<html>
<head>
  <title>Feedback Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
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
        
    /* Clear floats after the columns */    
    .row:after {    
      content: "";    
      display: table;    
      clear: both;    
    }    
        
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
  </style>    
</head>    
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
  <h1 style="text-align: center; color: white;">FEED BACK FORM</h1>    
  <div class="container">    
    <form method="POST" enctype="multipart/form-data">    
      <div class="row">    
        <div class="col-25">    
          <label for="fname">First Name</label>    
        </div>    
        <div class="col-75">    
          <input type="text" id="fname" name="t1" placeholder="Your name..">    
        </div>    
      </div>    
      <div class="row">    
        <div class="col-25">    
          <label for="lname">Last Name</label>    
        </div>    
        <div class="col-75">    
          <input type="text" id="lname" name="t2" placeholder="Your last name..">    
        </div>    
      </div>    
      <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="t3" placeholder="Your mail id..">    
        </div>    
      </div>    
      <div class="row">    
        <div class="col-25">    
          <label for="country">Country</label>    
        </div>    
        <div class="col-75">    
          <select id="country" name="t4">    
            <option value="none">Select Country</option>    
            <option value="australia">Australia</option>    
            <option value="canada">Canada</option>    
            <option value="usa">USA</option>    
            <option value="russia">Russia</option>    
            <option value="japan">Japan</option>    
            <option value="india">India</option>    
            <option value="china">China</option>
            <option value="other">Other</option>    
          </select>    
        </div>    
      </div>    
      <div class="row">    
        <div class="col-25">    
          <label for="feed_back">Feed Back</label>    
        </div>    
        <div class="col-75">    
          <textarea id="subject" name="t5" placeholder="Write something.." style="height:200px"></textarea>    
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
        $sql ="insert into feedback (first_name,last_name,email,country,feedback) values ('".$t1."','".$t2."','".$t3."','".$t4."','".$t5."')";
        mysqli_query($conn,$sql);
        
    }
?>