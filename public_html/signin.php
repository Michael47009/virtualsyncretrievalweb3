<?php
session_start();
include 'cdn.php'; include 'config.php';


//echo htmlspecialchars($req);
switch($req) {
  case 'success':
    ?>
     <div class="alert alert-success">
     Registration successful. Login to view your Web3 Wallet.
    </div>
      <?php
    break;
    case 'logout':
      ?>
       <div class="alert alert-danger">
        You have been logged out!
      </div>
        <?php
      break;

}
//$_SESSION['uid'] = '';

if(isset($_POST['email'])) {
  $m = filter($_POST['email']);
  $pwd = filter($_POST['pwd']);

 // echo  $_POST['email'].$pwd;
 $log =$conn->query("select * from user_details where uemail='$m' and upwd='$pwd'");
 if($log->num_rows>0) {
  while($loop=$log->fetch_assoc()) {
    //echo $loop['uid'];
    $_SESSION['uid'] = $loop['uid'];
   // echo $_SESSION['uid'];


   $identifier = substr($loop['uname'], 0, 3);
  if (isset($_SESSION['uid']) && $_SESSION['uid'] == $loop['uid']) {
 //echo $_SESSION['uid'];
   ?>
   
    <script>var idf = '<?php echo $identifier.$_SESSION['uid'];?>'; 
    window.location.href = '/dashboard/'+idf;</script>
         
   <?php
   }
  }
 }else {
  ?>
  <div class="alert alert-danger">
 Incorrect Email and password Combination.
 </div>
   <?php
 }
}
?>
<style> body { background:#e6e6e6; font-family:'Roboto', sans-serif;}
.frm {display:block; margin:auto; padding:5%; background:#ccc; margin-top:14%; border-radius:14px; padding:4%; }
input { border:hidden; border:1px solid #ccc; padding:2%; width:100%; border-radius:7px;
}
input[type='submit'] { border:hidden; padding:2%; width:100%; border-radius:4px; color:white; background:orange;
}
</style>
<div class="frm">
<h2 style='text-align:center'><b><i class="fa fa-sign-in" style="font-size:26px"></i> SIGN IN</b></h2>
<p style='text-align:center'>Access your Virtual-Sync Web3 Wallet</p>

<br>
    <form method='post' action='/signin/auth'>
      <label>Email Address</label><br>
        <input type='email'  name='email' placeholder='Enter your email'required/><br><br>

        <label>Password</label><br>
        <input type='password'  name='pwd'  placeholder='Enter your password' required/><br><br>

       
        <input type='submit' value='Sign In'/><br
        ><br><br>
        <p style='text-align:center;font-size:18px;'>Don't have an account? <a style='text-decoration:none; color:orange;' href='/signup'>Sign up</a></p>
</form><br>
</div>