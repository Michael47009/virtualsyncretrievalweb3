<?php
    include 'config.php'; include 'cdn.php';
    $u = preg_replace('/\D/', '', $req);
?>

<br>
<h2 style='margin-left:6%'><a href="/dashboard/<?php echo $req;?>"> <svg id='sv'xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="black"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg></a> Withdrawal History</h2> <hr>

        <div class="transaction_history">
            <h3></h3>
            <div class="search">
                <form action='/history/<?php echo $req;?>' method='post'>
                <br>
                <input type='search' name='query' placeholder='<?php if(isset($_POST['query'])) {echo 'TXN ID: '.$_POST['query'];} else {echo "Search Transaction ID";} ?>'/>
               
               <button type='submit'>
               <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="black"><path d="M96-216v-72h384v72H96Zm0-180v-72h192v72H96Zm0-180v-72h192v72H96Zm717 360L660-369q-23 16-50.5 24.5T552-336q-79.68 0-135.84-56.23-56.16-56.22-56.16-136Q360-608 416.23-664q56.22-56 136-56Q632-720 688-663.84q56 56.16 56 135.84 0 30-8.5 57.5T711-420l153 153-51 51ZM552-408q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Z"/></svg>
                </button>
</form>
                <Br>
            </div>
            
          <?php
          
                $txn = $conn->query("select * from withdrawals where uid = '$u' ORDER BY tm DESC");
                if($txn->num_rows>0) {
                    //user available

                    if(isset($_POST["query"])) {
                            $new = $_POST["query"]/47229;
                            $specific_txn = $conn->query("select * from withdrawals where uid = '$u' and txn_id='$new'");
                            if($specific_txn->num_rows>0){
                                
                                while($prop = $specific_txn->fetch_assoc()) {
                                    ?>
                                                   <div class="txn_box" style='border:1px solid orange'>
                                                    
                                                    <div class="firstl" style="transform: scale(0.8);margin-left: -5%; background: #e6e6e6; padding: 7px 8px; border-radius: 100%; float:left; margin-top: -3%;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="purple"><path d="M208-287.33V-540q0-14.17 9.62-23.75 9.61-9.58 23.83-9.58 14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.62 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm241.33 0V-540q0-14.17 9.62-23.75t23.83-9.58q14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.61 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm-336 166.66q-14.16 0-23.75-9.61Q80-139.9 80-154.12q0-14.21 9.58-23.71 9.59-9.5 23.75-9.5h733.34q14.16 0 23.75 9.61 9.58 9.62 9.58 23.84 0 14.21-9.58 23.71-9.59 9.5-23.75 9.5H113.33Zm572-166.66V-540q0-14.17 9.62-23.75t23.83-9.58q14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.61 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm164-352.67h-742q-11.39 0-19.36-7.97Q80-655.94 80-667.33V-686q0-7.67 4.17-14 4.16-6.33 10.5-10L448-903.33q15.11-8 32-8t32 8L864-711q7.67 4.33 11.83 11.67 4.17 7.33 4.17 16v11.82q0 13.39-8.82 22.45-8.81 9.06-21.85 9.06Zm-620.66-66.67h502.66-502.66Zm0 0h502.66L480-844.67l-251.33 138Z"/></svg>
                                                    </div>
                                                    <div class="secl">
                                                        <b style="color: purple;"><?php echo 'Withdrawal';?></b>  <br>
                                                    <span>Transaction ID</span> <br>
                                                    <?php echo $prop['txn_id']*47229;?>
                                                    </div>
                                                    <div class="trl">
                                                        <b >
                                                        
                                                            <span id='pdf' style='font-size:12px;'></span>
                                                            <?php echo '$'.number_format($prop['amt'], 2); ?>
                                                        
                                                        </b>  <br>
                                                        <span style="color: green;"><?php 
                                                        
                                                         switch($prop['stat']) {
                                                            case 'Confirmed': echo "<grr>Confirmed</grr>"; break;
                                                            case 'Processing': echo "<or>Pending</or>"; break;
                                                            case 'Failed': echo "<rd>Failed</rd>"; break;
                                                         }
                                                        
                                                        ?></span> <br>
                                                        <?php
                                                      $date = new DateTime($prop['tm']);
                                    echo $date->format('d M Y');
                                    echo "<br>";
                                    
                                    ?>
                                                    </div>
                                    
                                                </div><br>

                                    <?php
                                }
                            }
                            else {
                                echo '<h2>No such transaction ID!</h2>';
                            }
                            
              
                    }
                    else {
                    while($row = $txn->fetch_assoc()) {

                        ?>

        <div class="txn_box">
                <div class="firstl" style="transform: scale(0.8);margin-left: -5%; background: #e6e6e6; padding: 7px 8px; border-radius: 100%; float:left; margin-top: -3%;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="purple"><path d="M208-287.33V-540q0-14.17 9.62-23.75 9.61-9.58 23.83-9.58 14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.62 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm241.33 0V-540q0-14.17 9.62-23.75t23.83-9.58q14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.61 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm-336 166.66q-14.16 0-23.75-9.61Q80-139.9 80-154.12q0-14.21 9.58-23.71 9.59-9.5 23.75-9.5h733.34q14.16 0 23.75 9.61 9.58 9.62 9.58 23.84 0 14.21-9.58 23.71-9.59 9.5-23.75 9.5H113.33Zm572-166.66V-540q0-14.17 9.62-23.75t23.83-9.58q14.22 0 23.72 9.58 9.5 9.58 9.5 23.75v252.67q0 14.16-9.62 23.75-9.61 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75Zm164-352.67h-742q-11.39 0-19.36-7.97Q80-655.94 80-667.33V-686q0-7.67 4.17-14 4.16-6.33 10.5-10L448-903.33q15.11-8 32-8t32 8L864-711q7.67 4.33 11.83 11.67 4.17 7.33 4.17 16v11.82q0 13.39-8.82 22.45-8.81 9.06-21.85 9.06Zm-620.66-66.67h502.66-502.66Zm0 0h502.66L480-844.67l-251.33 138Z"/></svg>
                </div>
                <div class="secl">
                    <b style="color: purple;"><?php echo 'Withdrawal';?></b>  <br>
                <span>Transaction ID</span> <br>
                <?php echo $row['txn_id']*47229;?>
                </div>
                <div class="trl">
                    <b >
                    
                        <span id='pdf' style='font-size:12px;'></span>
                        <?php echo '$'.number_format($row['amt'], 2); ?>
                    
                    </b>  <br>
                    <span style="color: green;"><?php 
                    
                     switch($row['stat']) {
                        case 'Approved': echo "<grr>Confirmed</grr>"; break;
                        case 'Processing': echo "<or>Processing</or>"; break;
                        case 'Declined': echo "<rd>Failed</rd>"; break;
                     }
                    
                    ?></span> <br>
                    <?php
                  $date = new DateTime($row['tm']);
echo $date->format('d M Y');

?>
                </div>

            </div><br>

            <?php
                    }
                }
                }
                else {
                   echo "<br><h4 style='text-align:center;'>No transactions yet</h4>";
                }

?>
<style>
    button {
        border:hidden;
        background:white;
        
        padding:2%;
        
        display:block;
        margin:auto;
        position: absolute;
        margin-top:-12%;
        margin-left:80%;
        float:right;
    }
    input{
        border:hidden;
        border:1px solid #e6e6e6;
        border-radius:7px;
        padding:3%;
        width:85%;
        display:block;
        margin:auto;
    }
       grr { color:green;} rd { color:red;} or { color:orange;}
            .txn_box { background: #e6e6e6; display: block;
            margin: auto;
            transform:scale(1.05);
                width: 87%;
                padding: 7%;
                padding-bottom: 14%;border-radius: 14px;
        }
            .firstl { float: left;}
            .secl { float: left; margin-top: -5%; font-size: 13px;}
            .trl { float: right; margin-top: -7%; font-size: 12px;}
            .boxes {
                
            }
            .bitcoin_assets {
                display: block;
                margin: auto;
                padding: 10%;
                border-radius: 10px;
                background: #d1d0d0;
                width: 90%;
            }
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
            		@media only screen and (min-width: 992px) {
  body {
       width:30% !important;
       display:block;
       
       margin:auto;
   } 
   .head_right {
       display:none;
   }
   .footer {
        width:30% !important;
         display:none;
       
       margin:auto;
       margin-left:35%;
       height:50px !important;
      
   }
            </style>