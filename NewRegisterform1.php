<!DOCTYPE html>
<html>
    <head>
        <title>Koovi Registration form</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="formstyle.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>

          *{box-sizing:border-box;}

    body
    {
      left:0px; 
      bottom:0px;         
    }


  /*
  body
  {
   bottom:0;
   left:0;
   width:100%;
  }
  .container {
  font-size:16px;
  align-items:center;
  /*margin-left:20px;
  margin-right:-320px;*/
  /* width:100%; */
 /* } */
 /* .Htitle{font-size:14px;text-align:center;} */
   
  
  
    h3
    {
      /*margin-left:500px;*/
      text-align:center;
      color:brown;
    }
          /* header {
        background-color: grey;
        position: fixed;
        left: 0;
        right: 0;
        top: 0px;
        height: 50px;
        display: inline;
        align-items: center;
        box-shadow: 0 0 1px 0 black;
        width: 100%;
        }
      
        header * {
        display: inline;
                }
        header li {
        margin: 4px;
        padding-right:6px;
        }
        .Htitle
        {
            font-size:24px;
            color:white;
        }

        header li a {
        color: lightblue;
        text-decoration: none;
        font-size:14px;
        font-family:'Lucida Sans';
        
        } */
       
        .button1
        {
         
            background-color:grey;
            border: none;
            color: white;
            padding: 8px 1px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 1px 1px;
            cursor: pointer;
            width: 72px;
            height: auto;
            margin-right:2px;
            border-radius: 4px;
          }
          button1:hover
          {
                opacity:0.6;
          }
          #goback
          {
            /* padding-left : 20px;
            padding-right: 2px; */
            ccolor:blue; font-size: 17px;float:right;
          }
    /* .footer
    {
        width: 100%;
        position: relative;
        text-align: center;        
        background-color:grey;
        color: white;
        left: 1px;
        right:0px; /*-400px;*/        
       /* bottom:-14px;
        font-family:'Lucida Sans';
    } */
    /* .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 50px;
      padding-top: 2px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 16px;
      margin-top: 6px;
      margin-bottom: 0;
    } */
    /* .img
    {
        width: 24px;
        height: 2px;
        padding-top: 2px;
        padding: left 600px;
    } */
    #clearall
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:grey;
      /* align:right; */
      margin: top 4px;
      margin: left 2px;
      margin: right 60px;
      width: 72px;
      height: auto;
      font-size: 14px;
      border-radius :4px;
      cursor: pointer;
    }
    #btnview
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:grey;
      /* align:right; */
      margin: top 4px;
      margin: left 2px;
      margin: right 0px;
      width: 72px;
      height: auto;
      font-size: 14px;
      border-radius :4px;
      cursor: pointer;
    }
    hr{
    border: 1px solid lightslategrey;
    margin-bottom: 2px;
    width:100%;
  }
  .container
 {
    border : 1px solid lightgrey;
    border-radius:4px;
    padding: 14px;
    text-align:left;
    margin-top: 0;
   /* margin-left: 360px;
    margin-right: -200px;*/
    margin-bottom: 100px;
    background-color:white;
    width:50%;
  
     }
  label {
    padding: 2px 4px 4px 0;
    display: inline-block;
   font-family: cursive;
   color:grey;
   font-size:14px;
  }
 
  input{
    text-align:left;
    height: 28px;
    width: 88%;   
    padding-left: 10px;
    background:white;
    margin-left: 10px;
    margin-right: 10px;
    border : 1px solid lightgrey;
    border-radius:2px;
  }
  #sub_input
  {
    background-color: blue;
    margin-left:auto;
    margin-right:8px;
    margin-top:2px;
    padding-bottom:2px;
    width: 12px;
  }
  #goback
  {
  /* color:blue; font-size: 17px;float:right; */
  color:blue;
  margin-left:70px;
  padding-left: 70px;
  font-size: 17px;
  /* padding-left: 70px; 
  margin-left:70px; */
  }
  #goback:hover
  {
    color:darkred;
    
  }
 
  @media screen and (max-width: 600px)
 {
  #lblerror,h3{left:0; text-align: left;}
    .clearall, .btnView {
      width: 100%;
    }
    
    li{float:left;}
  .container {width:100%;}
  }
  
h3{
  color:brown;
  /*font-size: 20px;*/
  text-align: center;
  margin-top: 2px;
  padding: top 0;
}
#lblerror
  {
    /*margin-left:100px;/*400px */
   /* margin-right:100px; /*200 */
   /* padding-left:20px;
    padding-right:-150px;*/
    color:limegreen;
    border:none;
    /* width:90%; */
  }
a{color:yellow;}
  .active{
  color:lightgreen;
}
        </style>
        
            <!--<p class="kanavu">-->
                <!--<b><u>KANAVU</u><br>School of English</b>-->
              <!--  <b><u>KOOVI</u><br>Digital</b>
            </p>-->
           
     <script type ="text/javascript">
      
    function ValidateEmail()
    {
      let inputText = document.registerform.txtemail;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var pswdlength = document.registerform.newpswd;
          if(document.registerform.txtfirst.value=="")
          {
            alert("You must enter firstname");
            document.registerform.txtfirst.focus();
            return false;
          }
          else if(document.registerform.txtmob.value=="")
          {
            alert("You must enter contact no");
            document.registerform.txtmob.focus();
            return false;
          }
          else if(!inputText.value.match(mailformat))
          {
              /*alert("Valid email address!");*/ 
              alert("You have entered an invalid email address!");
              document.registerform.txtemail.focus(); 
              return false;
          }
          else if(document.registerform.newpswd.value=="")
          {
            alert("Please you must enter password");
              document.registerform.newpswd.focus();
              return false;
          }
          else if(document.registerform.repswd.value=="")
          {
             alert("Please you must enter re-password");
              document.registerform.repswd.focus();
              return false;
          }
          else if( pswdlength.value.length < 8)
          {
              alert("Your password length is too low.");
              document.registerform.newpswd.focus();
              return false;
          }
          else if(document.registerform.newpswd.value != document.registerform.repswd.value)
          {
            alert("You have entered mismatch password");
            document.registerform.repswd.focus();
            return false;            
          }
          else
          {
            /*alert("All validation is  checked!");    */        
            return true;
          }
    }
    function fnClearAll()
    {
      document.registerform.txtfirst.value="";
      document.registerform.txtlast.value="";
      document.registerform.txtmob.value="";
      document.registerform.txtemail.value="";
      document.registerform.newpswd.value="";
      document.registerform.repswd.value="";
    }
    
    </script><br>
    </head>
    <?php
    $label = array();
    $label['data']="";
if(isset($_POST['submit']))
{
 //var $fname, $lname,$contact_mob,$regemailId, $npswd,$regrepswd,$rememberme, $sqlcmd,$remvalue;
    $fname = $_POST['txtfirst'];
    $lname = $_POST['txtlast'];
    $contact_mob = $_POST['txtmob'];
    $regemailId = $_POST['txtemail'];
    $npswd =$_POST['newpswd'];
    $regrepswd =$_POST['repswd'];
    /*$rememberme=$_POST['rememberme'];*/
    
        if(isset($_GET['rememberme']))
        {
        $remvalue=1;
        }
        else
        {
        $remvalue=0; 
        }


 // database details
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

 // creating a connection
 $conn = mysqli_connect($host, $username, $password,$dbname);
 /*
 if(!$conn)
 {
  echo "not connect";
 }
 else
 {
  echo "connected.. ";
  }
*/
$sqlcmd = "insert into register_data (FirstName,LastName,Contact_No,Email_Id,New_Pswd,Re_Pswd,Rememberme) Values ('$fname','$lname','$contact_mob','$regemailId','$npswd','$regrepswd','$remvalue')";

$result = mysqli_query($conn,$sqlcmd);

if($result) 
{
    /*echo  '<script>alert("New record created successfully")</script>';*/
      $word = "Registration was created successfully.";
      $label['data'] = $word;
 }
 else
  {
    /*echo '<script>alert("Record was not created")</script>';*/
    $word = "Registration was not created.";
    $label['data'] = $word;
  }
  mysqli_close($conn); 
}
?>
    <body>
    <div>
        <?php include 'header.html';?>
    </div>
    <!-- <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="NewHomePage.php">KOOVI</a></u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><i class='fas fa-home' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewHomePage.php">Home</a></li>
            <li><i class='fas fa-registered' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewRegisterform1.php" class="active">Registration</a></li>
            <li><i class='fas fa-user' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="Login.php">Login</a></li>
            <li><i class='fas fa-address-card' style='font-size:18px;color:lightblue'></i><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>
        </header>      -->
      <!--<p class="lblerror"><label id="lblResult">.</label>
      </p>-->     
<br><br><br>
      <h3> <u>Create an account </u></h3>
    <form name="registerform" action="" method="POST">
    <input type="label" id="lblerror" name="word" value ="<?php echo isset($result)?$label['data']: '' ?>" />
    <center>
    <div class="container">
        <p style="color:grey;margin-top:4px;">Please fill in this form to create an account.</p><hr><br> 
        
        <label>First Name :</label> <input type="text" name="txtfirst" id="txtfirst" required><br>
        <label>Last Name :</label> <input type="text" class="input-field" name="txtlast" id="txtlast"> <br> 
        <!--<label>Date Of Birth </label> <input type="text" id="in_sub"><input type="text" id="in_sub"><input type="text" id="in_sub"><br>-->
        <label>Contact No : </label> <input type="text" name="txtmob" id="txtmob" maxlength="10" minlength="10" required><br>
        <label>Email - id :</label> <input type="email" name="txtemail" id="txtemail" required><br>
        <label>New Password :</label><input type="password" name="newpswd" maxlength="14" minlength="8"  id="newpswd" required><br>
        <label>Re-Password : </label> <input type="password" name="repswd" minlength="8" maxlength="14" id="repswd" required><br><hr>
        <label style="margin-top:-4px;" >
            <input type="checkbox" name="rememberme[]" id="sub_input" checked="checked">Remember me
          </label>
         
        <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
        <p> 
          <input type="submit"  class="button1" name="submit" value="Submit" onclick=" return ValidateEmail()">
        <input type="button" name="btnclear" id="clearall" value="ClearAll" onclick= "fnClearAll()">
        <a href= "RecordView.php"><input type="button"  id="btnview" name="review" value="View"></a>
        <a href="NewHomePage.php" id="goback" style="float:right;">Go home</a>         
        </p>   
      </div>     
      </center>  
</form>
<div>
       <?php include 'footer.html';?>
 </div>
</body>
<!-- <footer>
  <p class="footer">
  copy rights received @ 2023.All Rights Received.
  </p>
</footer> -->

</html>