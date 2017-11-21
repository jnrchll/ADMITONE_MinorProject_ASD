<!DOCTYPE html>
<html >
<head>
     <meta charset="UTF-8">
  <title>Cinema Reservation</title>

  
      <link rel="stylesheet" href="loginstyle.css">

  
</head>

<body>
<div id="body">


  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Register</a></li>
      </ul>
      
      <div class="tab-content">
	  
	  <div id="login">   
          <h1>Welcome Back!</h1>
          
         <form action="loginsave.php" method="POST">
          <input type="hidden" name="task" value="user_validate">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="emailadd" value=""required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password1" value=""required autocomplete="off"/>
          </div>
          
          
          <button class="button button-block" type="submit" name="submitlogin" value="" />Log In</button>
          
          </form>

        </div>
        
        <div id="signup">   
          <h1>Register for Free</h1>
          
          <form action="register2.php" method="POST">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" value="" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" value=""required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="emailadd" value=""required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password1" value=""required autocomplete="off"/>
          </div>
          
          <button class="button button-block" type="submit" name="submit" value="SUBMIT" />Register</button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="index.js"></script>

</body>
</html>