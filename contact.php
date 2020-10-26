<?php
  $result = "";

  if (isset($_POST['submit'])) {
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer(true);
    //$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $number = $_POST['number'];
    $location=$_POST['location'];
    $time=$_POST['time'];
    $toc = $_POST['toc'];
    

      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'supersyntheticsltd@gmail.com';
      // Gmail Password
      $mail->Password = '(SSL123)';

       // Email ID from which you want to send the email
      $mail->setFrom($_POST['email'],$_POST['name']);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('info@supersyntheticsbd.com');
      $mail->addReplyTo($_POST['email'],$_POST['name']);



      $mail->isHTML(true);
      $mail->Subject = 'Form Submission: '.$_POST['subject'];
      $mail->Body = "<h3 align=center>Name : $name <br>Email : $email <br>Mobile : $number <br>Location : $location <br> Type Of Contact : $toc <br>Prefered time : $time ( The date is in year month date format) <br> Subject : $subject <br>Message : $message</h3>";

      if(!$mail->send()){
        $result='<div class="alert alert-danger"><h5>Something went wrong. Please try again.</h5></div>';
      }
      else{
        $result='<div class="alert alert-success">
                  <h5> Thankyou '.$_POST['name'].' ! for contacting us, We will get back to you soon! </h5></div>' ;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Super Synthetics Limited</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
  font: 400 15px Lato, sans-serif;
  line-height: 1.8;
  color: #818181;
}
.navbar {
  font-family: Montserrat, sans-serif;
}

h2 {
  font-size: 30px;
  text-transform: uppercase;
  color: #303030;
  font-weight: 700;
  margin-bottom: 30px;
}

h4 {
  font-size: 19px;
  line-height: 1.375em;
  color: #303030;
  font-weight: 400;
  margin-bottom: 30px;
}
#bodyContact{

    background-color: white;
    height: 100%;
    width: 100%
    
}
h1{
    
    font-weight: bold;
    color: #fff;
    font-size: 45px;
    text-align: center;
   

  }
  #contactus{
    -webkit-box-shadow:3px 6px 32px 2px rgba(0,0,0,0.72);
    -moz-box-shadow:3px 6px 32px 2px rgba(0,0,0,0.72);
    box-shadow:3px 6px 32px 2px rgba(0,0,0,0.72);
    background-color: rgba(242, 242, 242,1);
    border-radius: 10px;
    margin-top: 100px;
    margin-bottom: 30px;
    /*margin-top: 200px;
    margin-bottom: 200px;*/
    border:1px solid black;

  }
  input[type=text],input[type=email],input[type=tel]
  {
    border: 2px solid #ccc;
    color:black;
    transition: .3s ease-in-out;
  }
input[type=datetime-local]{
    border: 2px solid #ccc;
    color:#000;
    transition: .3s ease-in-out;
  }
  input[type=datetime-local]:focus{
    color:#black;
  }
 input[type=radio]
  {
    margin-right: 15px;
    color:#494429;
    background-color:#494429;
    transition: .3s ease-in-out;
  }

  input[type=text]::placeholder,input[type=email]::placeholder,input[type=tel]::placeholder,input[type=radio]::placeholder,input[type=datetime-local]::placeholder
  {
    color:#fff;
    font-size: 12px;
  }

input[type=text]:focus, input[type=text]:hover,input[type=email]:focus,input[type=email]:hover,input[type=tel]:focus,input[type=tel]:hover,input[type=radio]:focus,input[type=radio]:hover,input[type=datetime-local]:hover,input[type=datetime-local]:focus{
  
  box-shadow:none;
  outline:none;
  border: 2px solid #494429;   /*#44b8f2*/
}

#textarea{
    border: 2px solid #ccc;
    color:black;
    transition: .3s ease-in-out;
}
#textarea::placeholder{
    color:#fff;
}
#textarea:focus,#textarea:hover{
    box-shadow: none;
    outline:none;
    border:none; 
    border: 2px solid #494429;

}
.btn-info{
 height:35px;
 width: 40%;
 transition: .5s ease-in-out;
 background-color: #494429;
 border:none;
}
.btn-info:hover{
background-color:#938953;
}

.control-label{
text-align:right;
margin-right:0px;
padding-right:10px;
padding-top:7px;
margin-top:7px;
color:black;  
font-size:14px;
}
#time{
    width:100%;
}
@media screen and (max-width: 900px) {

#h1tag{
  font-size:200%;  
}    
#tocemail{
        border:2px solid black;
    }
#labelEmail
{
 font-size:9px;   
}
#labelPhone{
    font-size:9px; 
} 
.control-label{
font-size:13px;
}
 input[type=radio]
  {
    margin-right: 0px;
  }
#emaildiv{
    margin-right:5px;
  
}
#phndiv{
     margin-right:0px;
     padding-right:0px;
    
}
}
/*---------navbar-----------*/

.navbar {
     margin-bottom: 0;
     background-color: #494429 !important;
     border-bottom: 2px solid rgb(255,255,255);
     z-index: 9999; 
     font-size: 12px !important;
     line-height: 1.42857143 !important;
     letter-spacing: 4px;
     border-radius: 0;
     min-height:88px;         /*newly added */
  }
.navbar-fixed-top{height: 88px;}  /*newly added */
.navbar-nav{padding: 15px 0;}     /*newly added */
.navbar-header{height: 88px;}     /*newly added */
.navbar-collapse{
  background-color: #494429;      /*newly added */
}
  .navbar img{
      width:216px;
  }
 .navbar-text{
  padding: 15px 0;     /*newly added */
 }
@media screen and (max-width: 900px) {
  .navbar-brand img{
      width:100px;              /*newly added */
      height:88px;
  }
  .navbar-text{
      font-size:12px !important;
      line-height: 80px; 
      letter-spacing:1px;

  }

}
  .navbar-brand{
    padding-top: 0px;             /*newly added before it was 2px*/
  }
.navbar ul{
    margin-right:5px;
}  
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #494429 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    height:50px;
    width:50px;
    margin-top:20px;
    border-color: white;
    color: #fff !important;
  }

    .navbar-collapse{
    text-align: center;
  }
   .navbar-text{
    color: #fff !important;
    font-size: 15px;
    font-family: 'SiyamRupali', sans-serif;
  }
   /*-----------------------footer----------------------------*/
  #footer{
    background-color: #494429;
    color: #f7f7db;
    margin: 0px;
    padding: 0px;
  }
  #footer .row{
      text-align: center;
  }
  #footer h3{
    color: #fff;
  }

.logosuper{
  
  margin-top: 100px;
}
.flogo{
  padding: 0px;
  text-align: center;
  font-size: 20px;
  color:#f7f7db;
  transition: .3s;
  cursor: pointer;
  transition: .2s;
  }
  .flogo:hover{
  color:#f7f7db;
  text-shadow:  0 4px 8px 0 rgba(0, 1, 0, 0.8);
  transform: scale(1.5);
  }
.text{
    text-align:left;
}
  #table tr{
     
    outline: none;
   

  }
    #table td{
    padding: 10px;

  }

  @media  screen and (max-width: 1200px){
    #table{
      margin-left: auto;
      margin-right:auto;
    }
    #footer h3{
        font-size: 25px;
        font-weight: 100;
    }
     #footer .container{
       padding-left: 40px;
    }
    .md-mb-30{
      margin-bottom: 100px;
      
    }
      @media  screen and (max-width:767px){
    .sm-mb-30{
     
      margin-bottom: 100px;
    }
  }

  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://supersyntheticsbd.com/" ><img src="images/logo.gif" style="height:80px; padding-top:8px;"></a>
      <span class="navbar-text">
    সুপার সিন্থেটিক্‌স  লিমিটেড
  </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.html#front">HOME</a></li>  
        <li><a href="index.html#about">ABOUT</a></li>
        <li><a href="index.html#services">WHY US</a></li>
        <li><a href="index.html#product">PRODUCTS</a></li>
        <li><a href="index.htmlcontact.php">CONTACT</a></li>
      </ul>
    </div>
</nav>


<div class="container" id="bodyContact">
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6" id="contactus">
      <div class="row"><div class="col-xs-4 col md-3 col-sm-3"></div> <div class="col-xs-8 col md-9 col-sm-9"> <h1 id="h1tag" style="color: black; text-align:justify; lext-align-last:left; line-height:1.2em;">Contact Us</h1></div></div>
      
    <div class="row"><div class="col-xs-4 col md-3 col-sm-3"></div> <div class="col-xs-8 col md-9 col-sm-9"><h5 style="color: black; text-align:justify; lext-align-last:left; line-height:1.2em;">We would love to hear from you! Leave a message below and we will get in touch with you shortly.</h5></div></div>
       
    <br>
    
    <form action="contact.php" method="POST" class="form horizontal" >
      <div class="form-group">
                <?= $result; ?>
      </div>
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Name: </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input type="text" required="" class="form-control" name="name" placeholder="Enter Name"></div></div>
          
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Email: </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input  type="email" required="" class="form-control" name="email" placeholder="Enter Email"></div></div>
      
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Phone Number: </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input type="tel" required="" class="form-control" name="number"  placeholder="Enter Mobile Number"></div></div>
      
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Location </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input type="text" required="" class="form-control" name="location" placeholder="Country/Location"></div></div>
      
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Subject: </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input type="text" required="" class="form-control" name="subject" placeholder="Enter Subject"></div></div>
      
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Contact me by: </label></div><div class="col-xs-8 col-md-9 col-sm-9"><div class="col-xs-4 col-md-4 col-sm-4" id="emaildiv"><input type="radio" id="tocemail" name="toc" value="Email"><label for="Email" style="color:black;" id="labelEmail">Email</label></div><div class="col-xs-4 col-md-5 col-sm-5" id="phndiv"><input type="radio" id="tocphone" name="toc" value="Phone"><label for="Phone" style="color:black;" id="labelPhone">Phone</label></div></div></div>
     
      

      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Prefered Time:</label></div> <div class="col-xs-8 col-md-9 col-sm-9"><input type="datetime-local" id="time" name="time"  placeholder="mm/dd/yyyy --:-- --"></div></div>
      
      <div class="row"><div class="form-group"><label class="col-xs-4 col-md-3 col-sm-3 control-label">Message: </label></div> <div class="col-xs-8 col-md-9 col-sm-9"><textarea rows="5" placeholder="Enter Message" name="message" class="form-control" id="textarea"></textarea></div></div>
        <br>
      <div class="row"><div class="col-xs-4 col-md-3 col-sm-3"></div> <div class="col-xs-8 col-md-9 col-sm-9"><button type="Submit" name="submit" class="btn btn-info">Submit</button></div></div>  
      

    </form>
    <br><br><br>
  </div>

  <div class="col-md-3"> </div>
</div>
 </div>



<!-- FOOTER -->
<div id="footer">
  <br><br><br>
  <div class="container">
   <div class="row">

    <div class="col-md-4 col-xs-12 md-mb-30 sm-mb-30">
      <h3 >Corporate Office Address</h3>
      <hr>
 <table cellpadding="10" cellspacing="70" id="table">

  <tbody>
    <tr>
      <td><a href="https://goo.gl/maps/gJJCuWDn1GEqqrYQ9"><span class="glyphicon glyphicon-map-marker flogo"></span></a></td>
      <td class="text">T.K. Group, <br> 83 Khatungonj, Chattogram -4000, <br> Bangladesh.</td>
    
    </tr>
    <tr>
      <td> <span class="glyphicon glyphicon-phone-alt flogo"></span></td>
      <td class="text"> +88 031 624827, +88 031 616608, <br>+88 031 2854301</td>
    </tr>
    <tr>
      <td><span class="glyphicon glyphicon-earphone flogo"></span></td>
      <td class="text">+88 01841 587747, +88 01841 587735</td>
    </tr>
      <tr>
      <td><span class="glyphicon glyphicon-envelope flogo"></span></td>
      <td class="text"> info@supersyntheticsbd.com</td>
    </tr>
  </tbody>
</table>


    </div>

    <div class="col-md-4 col-xs-12 md-mb-30 sm-mb-30">
      <h3>Factory Address</h3>
      <hr>
        <table cellpadding="10" cellspacing="70" id="table">

  <tbody>
    <tr>
      <td class="ficon"><a href="https://goo.gl/maps/G2q21uF7wRyHFZrZ8"><span class="glyphicon glyphicon-map-marker flogo"></span></a></td>
      <td class="text">Super Knitting Complex, <br> Bayezid Bostami Road, <br> Nasirabad Industrial Area, <br> Chattogram, -4210 Bangladesh.</td>
    
    </tr>
    <tr>
      <td class="ficon"> <span class="glyphicon glyphicon-phone-alt flogo"></span></td>
      <td class="text"> +88 031 683021</td>
    </tr>
    <tr>
      <td class="ficon"><span class="glyphicon glyphicon-earphone flogo"></span></td>
      <td class="text">+88 01841 587740, +88 01841 587739, <br>+88 01841 587736</td>
    </tr>
  </tbody>
</table>
    </div>

    <div class="col-md-4 col-xs-12 md-mb-30 sm-mb-30 logosuper">
      <div class="row"><center><img src="images/logo.gif"></center> </div>
      <div class="row"></div>
    </div>
  
</div>
  <hr style="height:2px;">
  <br>
 
  <br>
</div>
</div>


</body>

</html>

