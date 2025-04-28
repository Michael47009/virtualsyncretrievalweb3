<?php
    include 'config.php'; include 'cdn.php';
   // echo $_SESSION['uid'];

   if(isset($_POST['btc_wallet'])){
    $u = preg_replace('/\D/', '', $req);
    $amt = $_POST['exact_amount'];
    $wal = $_POST['btc_wallet'];

    $uname = $conn->query("select * from user_details where uid='$u'");
    if($uname->num_rows>0) {
        while($gr=$uname->fetch_assoc()) {
                $n = $gr['uname'];

                $qry =$conn->query("insert into withdrawals(uid,uname,btc_wallet,amt) values('$u','$n','$wal','$amt')");

                if($qry) {
                    ?>
                    <div class="alert alert-success">
                    Your withdrawal has been accepted and is being processed.<br>
                   
                   </div>
                     <?php
                }
        }
    }
      
   }
?>

<div class="payment-process-panel">
		<h2 style='margin-left:6%'><a href="/dashboard/<?php echo $req;?>"> <svg id='sv'xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="black"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg></a> Withdraw BTC</h2>
        <span style='color:gray; margin-left:10%;'>Chain: BITCOIN</span>
        <hr>
		<br>
                    
			<div class="holdings">

                    <div class="leftt">
                        <img src='https://static.vecteezy.com/system/resources/previews/006/065/045/non_2x/blockchain-network-app-icon-bitcoin-cryptocurrency-digital-money-fintech-and-big-data-ui-ux-user-interface-web-or-mobile-application-isolated-illustration-vector.jpg' width='100%' height='16%' style='border-radius:100%; margin-left:16%;'/><br>
                        
                    </div>

                    <div class="lefttt">
                        <----------------------------->
                    </div>
                    <div class="rightt">
                    <img src='https://static-00.iconduck.com/assets.00/bitcoin-icon-2048x2048-t8gwld81.png' width='85%' style='margin-top:24%'/><BR>
                   
                    </div>
				



					
			</div>
            <style>
                .warn {
        color:gray;
        width:90%;
        margin-left:5%;
    }
    .holdings {
        
       
    }
                .lefttt {
    float:left;
    position: relative;
    margin-left:25%;
    margin-top:25%;
    letter-spacing:-2px;
}
.leftt {
    float:left;
}
.rightt {
    float:right;
}
.wallet {
    color:gray;
    padding:4%;
    border-radius:7px;
    border:1px solid #ccc;
}
                </style>


<br><br>
<span style='font-size:21px'>Wallet</span>
<div class="wallet">
    <div class="left">
    <form method="post" action="/withdraw/<?php echo $req;?>">  <?php

/*
$wallet = $conn->query("select * from user_details where uemail='{$_GET["email"]}'");
if($wallet->num_rows>0) { while($api = $wallet->fetch_assoc()) {
        switch ($api['wallet']) { case null: echo "Add Wallet"; break;
                                  default: echo $api['wallet'];}
}}
**/
?>
  <input type="search" id='inpp' placeholder="Bitcoin Wallet Address." name="btc_wallet" style='width:80%; padding:1%;margin-left:-1%;' required>

</div>
    <a href="#"> <div class="rightt" style='margin-top:-7%;'><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="black"><path d="M192-396v-72h288v72H192Zm0-150v-72h432v72H192Zm0-150v-72h432v72H192Zm336 504v-113l210-209q7.26-7.41 16.13-10.71Q763-528 771.76-528q9.55 0 18.31 3.5Q798.83-521 806-514l44 45q6.59 7.26 10.29 16.13Q864-444 864-435.24t-3.29 17.92q-3.3 9.15-10.71 16.32L641-192H528Zm288-243-45-45 45 45ZM576-240h45l115-115-22-23-22-22-116 115v45Zm138-138-22-22 44 45-22-23Z"/></svg></div></a>
</div>


	
	<br>

<nav>
	<div class="leftt">

   <input type="number" id='inp' placeholder="Enter Amount." name="exact_amount"required>

    </div>

    <div class="rightt" style='margin-right:7%; text-align:center;'>
    <script>
            
    </script>
        <div onclick="dashboard();" class='max'>Max</div>
        <?php
        $uid = preg_replace('/\D/', '', $req);


$asset = $conn->query("select * from bal where uid = '$uid' ");
                if($asset->num_rows>0) {
                    while($ast = $asset->fetch_assoc()) {
                        
                        ?>

                       <span id='pp'></span>
                       
                        <script>
                        let price =<?php  echo $ast['bal'];?>;

        
document.getElementById('pp').innerHTML = `$${price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

function dashboard() {
    document.getElementById('inp').value = price;

}
</script></div></nav><br>

                        <?php
                        if($ast['bal']<1) {
                            ?><br><button id="submit" style='opacity:0.5' disabled>Withdraw</button>

                            <?php
                        }else {
                            ?><br>
                            <button id="submit">Withdraw</button>

                            <?php
                        }
                    }
                }
?>
    </div>
</nav>
<br><br><br>



</form><br><br>
<div class="warn">
   - Please Only use Bitcoin addresses to prevent permanent loss of assets.<br><br>
   - Click "Withdraw after the crypto amount has been selected.
</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><</div>

<style>
    
    .max {
        border: hidden;
			color: black;
            border:1px solid #fff;
			font-weight: lighter;
            font-size:17px;
			width: 120%;
			padding: 2.5%;
        border:2px solid black;
			border-radius: 8px;
			display: block;
			margin: auto;
            margin-top:-3%;
			background: white;
    }
    input[type='number'] {
			border: hidden;
			color: black;
            border:1px solid #fff;
			font-weight: lighter;
            font-size:21px;
			width: 90%;
			padding: 2.5%;

			border-radius: 1px;
			display: block;
			margin: auto;
			background: white;
	}
    input[type='search'] {
			border: hidden !important;
			color: black;
            border:1px solid #fff;
			font-weight: lighter;
            font-size:21px;
			width: 90%;
			padding: 2.5%;

			border-radius: 1px;
			display: block;
			margin: auto;
			background: white;
	}
#select {
	width: 90%;
	border: hidden;
	background: white;
	border: 1px solid #ccd;
	padding: 2%;
	display: block;
	margin: auto;
}
input[type='text'] {
	display: none;
}
	#submit {
			border: hidden;
			color: white;
			font-weight: lighter;
			width: 90%;
			padding: 3%;
			border-radius: 7px;
			display: block;
			margin: auto;
			background: purple;
	}
	or {
		color: cornflowerblue;
        display:block;
        margin:auto;
		font-size: 13px;
	}
	.holdings {
		column-count: 3;
	}
	.card {
		margin-top: 3%;
		border: 1px solid #ccc;
		background: white;
	}
	.card img {
		margin-left: 5%;
	}
	red {
		color: red;
	}
	.payment-process-panel {
			background: #fff;
			color: black;
			display: block;
			margin: auto;

			border-radius: 14px;
			padding: 4%;
			width: 95%;

	}
	marquee {
		color: orange;
	}
	.phase-two {
		background: #262626;
		height: 100%;
		padding: 4%;
		color: white;
	}
</style>



<style type="text/css">
	.phase-two {
		background: #1a1a1a;
	}
</style>





<style>
.footer {
               position: fixed;
               left: 0;
               bottom: 0;
               width: 100%;
               background-image: linear-gradient(165deg, black, black, #55555b );
               color: white;
               padding: 5%;
               text-align: center;
               border-top-right-radius: 7px;
               border-top-left-radius: 7px;
               column-count: 4;
            }
            .footer_next {
                column-count: 4;
            }
            body {
                font-family: 'SF Pro Display', sans-serif;
                                                
            }
            </style>

<?php
?>