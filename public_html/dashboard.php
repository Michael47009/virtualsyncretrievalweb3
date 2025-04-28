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
     $bl = $conn->query("select * from bal where uid='$uid'");
     if($bl->num_rows>0) {
      while($itr = $bl->fetch_assoc()) {

       
//echo $itr['bal'];
        ?>
     
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

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
  <a href="" style='margin-top:190%; background:orange;'><i class="fa fa-desktop" style="font-size:28px;color:white"></i></a><br>
  <a href="/web/<?php echo $req;?>"><i class="fa fa-money" style="font-size:28px;color:#818181"></i></a><br>
  
   <a href="/history/<?php echo $req;?>"><i class="fa fa-history" style="font-size:28px;color:#818181"></i></a><br>
   
  <a href="mailto:support@virtualsynchub.com"><i class="fa fa-envelope" style="font-size:28px;color:#818181"></i></a><br>

  <a href="/signin/logout"><i class="fa fa-sign-out" style="font-size:28px;color:#818181"></i></a><br>
</div>
<br>
<span style="font-size:23px;cursor:pointer; padding:5%; margin-top:10%; color:#111111;" onclick="openNav()"> <i class="fa fa-bars" style='font-size:30px;color:#111111;'></i><b style='margin-left:15%; font-size:30px; color:#111111;'> Dashboard</b><br>
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
.lengthy { background:red; height:90%;}
  </style>

<div class="row" onload='openNav()'>
<div class="col-sm-2" id='hide_mobile'>
 
      <div class="lengthy">
        long div
      </div>
    </div>

    <div class="col-sm-10" style='padding:2%' id='bdy'>
      <div class="col-sm-6" style='margin-top:-24%'>
        <div class="wallet_balance">
          <div class='headd'>
            <p style='font-size:22px;'>Wallet Balance</p>
          </div>
          <div class="cont">
            <br>
                <p  style='font-size:24px; font-weight:500'>BTC Balance: <span id='btc_bal' style='font-size:smaller'><i><small>loading...</small></i></span></p> 



                <script>
let socket = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
let previousPrice = null;
let priceElement = document.getElementById('live_btc_value');
let icon = document.getElementById('price_svg');
let btc_bal = document.getElementById('btc_bal');
// Make sure WebSocket is successfully connected
socket.onopen = () => {
    console.log('WebSocket connection established');
};

socket.onerror = (error) => {
    console.error('WebSocket error:', error);
};

socket.onmessage = (event) => {
    let dataObject = JSON.parse(event.data);
    let currentPrice = parseFloat(dataObject.p);
    
    if (isNaN(currentPrice)) {
        console.error('Received invalid price:', currentPrice);
        return; // Ignore invalid data
    }
let usr_bal = parseFloat('<?php echo $itr['bal'];?>')/currentPrice;
btc_bal.innerHTML = usr_bal.toFixed(7)+'BTC';
    priceElement.innerHTML = `$${currentPrice.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

    // Handle SVG color changes
    if (!previousPrice || previousPrice === currentPrice) {
        icon.querySelector('circle').style.fill = 'gray';
    } else if (currentPrice > previousPrice) {
        icon.querySelector('circle').style.fill = 'green';
    } else {
        icon.querySelector('circle').style.fill = 'red';
    }

    // Handle text color changes
    priceElement.style.color = currentPrice > previousPrice ? 'green' : (currentPrice < previousPrice ? 'red' : 'black');
    
    previousPrice = currentPrice;
};
</script>


                <p  style='font-size:17px; font-weight:500'>~ <?php  
                $amount = $itr['bal'];
                $formattedAmount = number_format($amount, 2, '.', ',');
                echo '$' . $formattedAmount; 
                
                ?></p> 
                <span style='font-size:18px;'>Your connect Bitcoin wallet balance</span> 
                <cf><i style='color:cornflowerblue;font-weight:500'>unloaded</i></cf> <br><br>
              <a href='/web/<?php echo $req;?>'>  <button>
<i class="fa fa-chain" style="font-size:18px"></i> View web3</button></a>  <br><br> <a href='/withdraw/<?php echo $req;?>'><button style='background:black'><i class="fa fa-sign-out" style="font-size:18px"></i> Withdraw</button> <br></a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6" style='margin-top:5%;'>
      <div class="wallet_balance">
          <div class='headd'>
            <div class="lft">
              Virtual-Sync<br>Transactions
            </div>
           <div class="rgt">
              <button>View more</button>
           </div><br><br>
          </div>
          <div class="cont" style='padding:4%;'>
            <br>
               <p class='txn'><i class='fa fa-arrow-up' style='color:red;'></i> Sent 0.5 BTC to  0x123...456 <rd>-0.5 BTC</rd>
</p>
               <p class='txn'><i class='fa fa-arrow-down' style='color:green;'></i> Sent 0.5 BTC to  0x123...456 <gr>-0.5 BTC</gr>
</p>
               <p class='txn'><i class='fa fa-arrow-up' style='color:red;'></i> Sent 0.5 BTC to  0x123...456 <rd>-0.5 BTC</rd>
</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
      <div class="wallet_balance"  style='margin-top:5%;'>
          <div class='headd'>
            <p style='font-size:22px;'>BTC Price (USD)</p>
          </div>
          <div class="cont">
            <br>
            <p style='font-size:24px; font-weight:500'>BTC Bitcoin: <svg id="svg" width="20" height="20">
  <circle cx="25" cy="25" r="20" style="fill:gray;" />
</svg><span id="live_btc_price"><i>loading...</i></span></p>


<script>
let ws = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
let lastPrice = null;
let elm = document.getElementById('live_btc_price');
let svg = document.getElementById('svg');

// Make sure WebSocket is successfully connected
ws.onopen = () => {
    console.log('WebSocket connection established');
};

ws.onerror = (error) => {
    console.error('WebSocket error:', error);
};

ws.onmessage = (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p);
    
    if (isNaN(price)) {
        console.error('Received invalid price:', price);
        return; // Ignore invalid data
    }

    elm.innerHTML = `$${price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

    // Handle SVG color changes
    if (!lastPrice || lastPrice === price) {
        svg.querySelector('circle').style.fill = 'gray';
    } else if (price > lastPrice) {
        svg.querySelector('circle').style.fill = 'green';
    } else {
        svg.querySelector('circle').style.fill = 'red';
    }

    // Handle text color changes
    elm.style.color = price > lastPrice ? 'green' : (price < lastPrice ? 'red' : 'black');
    
    lastPrice = price;
};
</script>

                <p  style='font-size:17px; font-weight:500'>0 USD</p> 
                <span style='font-size:18px;'>Live Bitcoin price in USD.</span> 
               
          </div>
        </div>
      </div>

      <div class="col-sm-6"  style='margin-top:5%;'>
      <div class="wallet_balance">
          <div class='headd'>
            <p style='font-size:22px;'>Wallet Balance</p>
          </div>
          <div class="cont">
            <br>
                <p  style='font-size:24px; font-weight:500'>Ethereum: <span id="live_btc_pricer"><i>loading...</i></span></p> 
                <p  style='font-size:17px; font-weight:500'>0 USD</p> 
                <span style='font-size:18px;'>Live Ethereum price in USD.</span> 
              

                <script>
let wss = new WebSocket('wss://stream.binance.com:9443/ws/ethusdt@trade');
let lastPricer = null;
let elmr = document.getElementById('live_btc_pricer');
let svgr = document.getElementById('svg');

// Make sure WebSocket is successfully connected
wss.onopen = () => {
    console.log('WebSocket connection established');
};

wss.onerror = (error) => {
    console.error('WebSocket error:', error);
};

wss.onmessage = (event) => {
    let stockObject = JSON.parse(event.data);
    let pricer = parseFloat(stockObject.p);
    
    if (isNaN(pricer)) {
        console.error('Received invalid price:', pricer);
        return; // Ignore invalid data
    }

    elmr.innerHTML = `$${pricer.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

    // Handle SVG color changes
    if (!lastPricer || lastPricer === pricer) {
        svgr.querySelector('circle').style.fill = 'gray';
    } else if (pricer > lastPricer) {
        svgr.querySelector('circle').style.fill = 'green';
    } else {
        svgr.querySelector('circle').style.fill = 'red';
    }

    // Handle text color changes
    elmr.style.color = pricer > lastPricer ? 'green' : (pricer < lastPricer ? 'red' : 'black');
    
    lastPricer = pricer;
};
</script>
          </div>
        </div>
      </div>
    </div>
</div>
<style>

  .rgt { margin-right:6%; width:50%; }
  .rgt button { width:70%; margin-left:35%; border:hidden; border:1px solid purple; padding:2%; border-radius:14px; color:purple; background:#fff;}
  rd {  margin-left:2%; color:white; background:red; padding:1%; border-radius:7px;}
  gr { margin-left:2%; color:white; background:green; padding:1%; border-radius:7px;}
  .txn { padding:5%; margin-left:-13%; white-space:nowrap; width:125% !important; border-bottom:1px solid gray; font-size:15px;}
  .lft { float:left; margin-left:4%;} .rgt { float:right; margin-right:4%;margin-top:3%;}
.wallet_balance {
  background:#f2f2f2; color:#1f1f1f; padding:7%; border-radius:4px;
} .headd { background:black; color:white; padding:2%; font-size:35px;margin-top:-8%; width:116%; margin-left:-8%; font-size:17px;
  border-top-left-radius:4px; border-top-right-radius:4px;}
.cont button { background:#f39c12; border-radius:25px; border:hidden; padding:4%; width:50%; color:white;}
#hide_mobile {
   /* Default to showing on larger screens */
}

@media (max-width: 767px) {
  #hide_mobile {
    display: none; /* Hide on mobile screens */
  }
  .wallet_balance {
   font-size:smaller;
  }
  #bdy {
    margin-left:14%;
  }
}
@media screen and (min-width: 1200px) {
  .sidenav { display:none;}
  .lengthy {

    margin-top:-80%; width:120%; margin-left:-10%;
  }
}
.row {
    transform:scale(0.9);
}

</style>

<script>
//alert(window.screen.width);
  </script>
 <?php  
}
     }
  }
}

?>