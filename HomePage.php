<!DOCTYPE html>
<html>
    <head>
      <title>KSV Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:lightskyblue
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align:center;
  padding: 6px 12px;
  text-decoration: none;
  
}

/* Change color on hover */
.header a:hover 
{
  background-color:white;
  
}

@media screen and (max-width: 600px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}   .header
    {
        width: 100%;
        margin-top: 0;
        font-size: 14px;
        text-align: right;
        margin-bottom: 0;
    }
    .footer
    {
        width: 100%;
        position: fixed;
        text-align: center;        
        background-color:dodgerblue;
        color: white;
        left: auto;
        bottom:0;
    }
    .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 50px;
      padding-top: 4px;
      padding-bottom: 4px; 
      padding-left: 10px;
      padding-right: 20px;
      font-size: 18px;
      margin-top: 0.8px;
      margin-bottom: 1px;
      margin-left: 20px;
      margin-right: 20px;
      
    }
        </style>
        <link rel="stylesheet" href="hmpg.css">
    </head>
    <body>
        <header class="header">
          <ul>
          <b>
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="NewRegisterform1.php">New_Register</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        <p class="kanavu">
          <!---<b><u>KANAVU</u><br> School of English</b>-->
          <b><u>KOOVI</u><br>Digital</b>
        </p>
        </header>
        
        <div class="mask1"><p> Welcome <br>to <p style="color:chocolate;"><b>KOOVI Digital</b></p></p>
        <p class="clickhere">Not yet an account? you may join us... <a href="NewRegisterform1.php">Click here to Register</a></p>
        </div>
        <footer>
            <p class="footer">
            copy rights received @ 2023
            </p>
        </footer>
    </body>
</html>