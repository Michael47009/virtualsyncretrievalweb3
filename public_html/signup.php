<?php  include 'cdn.php'; include 'config.php';

if(isset($_POST['email'])) {
  $pwd = filter($_POST['pwd']); $rpwd = filter($_POST['rpwd']);

 // echo  $_POST['email'].$pwd;
 $match = '';
 $len = '';
 if($pwd!==$rpwd) {
  ?>

<div class="alert alert-danger">
  Passwords do not match. Try again!
</div>
  <?php
 } else { $match = 'fixed';}
 
if(strlen($pwd) < 8) {
  ?>
 
<div class="alert alert-danger">
  Passwords must be up to 8 characters. Try again!
</div>
  <?php
}else { $len = 'fixed';}
//echo $match.$len;
    if($match == 'fixed' and $len =='fixed') {
      //input to db
      $m = $_POST['email'];
      $u = $_POST['username'];
      $chk = $conn->query("select * from user_details where uemail ='$m'"); 
              if($chk->num_rows>0) {
                ?>
               
               <div class="alert alert-danger">
                 Error! <br> Email already in use. if you have an account, <a href='/signin/auth'>Login.</a>
               </div>
                 <?php
              }
              else {
               $put = $conn->query(" insert into user_details(uname,uemail,upwd) values('$u','$m','$pwd') ");
               if($put) {    ?>
                <div class="alert alert-success">
            <strong>Success!</strong> Registration Successful.
          </div>
          <script> window.location.href = '/signin/success';</script>
          <?php
          //ob_start();
         // header('Location: /signin/success');
          //exit;
          }
               /// $conn->query("insert into bal ")
              }
    
   
    }
}
?>
<style> body { background:#e6e6e6; font-family:'Roboto', sans-serif;}
.frm {display:block; margin:auto; padding:5%; background:#ccc; margin-top:14%; border-radius:14px; padding:9%; }
input { border:hidden; border:1px solid #ccc; padding:2%; width:100%; border-radius:7px;
}
input[type='submit'] { border:hidden; padding:2%; width:100%; border-radius:4px; color:white; background:orange;
}
</style>
<div class="frm">
<h2 style='text-align:center'><b><i class="fa fa-bank" style="font-size:26px"></i> CREATE WALLET</b></h2>
<p style='text-align:center'>Create a secure Virtual-sync Web3 Wallet</p>

<br>
    <form method='post' action='/signup'>
      <label>Email Address</label><br>
        <input type='email'  name='email' placeholder='Enter your email'required/><br><br>


        <label>User Name</label><br>
        <input type='text'  name='username' placeholder='Enter your Username'required/><br><br>


        <label>Password</label><br>
       
        <input type='password'  name='pwd'  placeholder='Enter your password' required/><br><br>

        <label>Retype Password</label><br>
        <input type='password'  name='rpwd'  placeholder='Retype your password' required/><br>
        <br>
        <input type='submit' value='Sign Up'/><br
        ><br><br>
        <p style='text-align:center;font-size:18px;'>Already have an account? <a style='text-decoration:none; color:orange;' href='/signin/authV'>Sign in</a></p>
</form>
</div>