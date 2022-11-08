
<html>
<head>
  <title>medya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css">
  <style>


mn{
margin-left: 200px;
}

.container-fluid{

  background-color: black;
margin: 0 auto;
width: 970px;
height: 600px;
margin-bottom: 45px;
border-radius: 10px;
margin-top: 95px;
box-shadow: 0px 0px 10px 10px black;

}
.medya{
text-align: center;
}
h1{
    margin-top: 60px;
}
img {height: 32px;
margin-bottom:18px;
width: 38px;
}

.button{
  
  background-color: black;
   position: relative;
   text-align: center;
   width: 190px;
   height: 50px;
   margin: 0 35px;
   padding: 8px;
   font-size: 10px;
   color: #15f4ee;
   font-family: poppins !important;
   font-weight: 280;
   border: 5px solid #15f4ee;
   text-transform:uppercase ;
   letter-spacing: 8px;
   cursor: pointer;
   border-radius: 70px;
   transition: 1.5s;
       }
       .button:hover{
   box-shadow: 0 5px 10px 0 #15f4ee inset, 0 5px 10px 0 #15f4ee,
               0 5px 10px 0 #15f4ee inset, 0 5px 10px 0 #15f4ee;
   text-shadow: 0 0 5px #15f4ee, 0 0 5px #15f4ee;
       }
.button1{
  background-color: black;
   position: relative;
   text-align: center;
   width: 190px;
   height: 50px;
   margin: 0 35px;
   padding: 8px;
   font-size: 10px;
   color: #15f4ee;
   font-family: poppins !important;
   font-weight: 280;
   border: 5px solid #15f4ee;
   text-transform:uppercase ;
   letter-spacing: 8px;
   cursor: pointer;
   border-radius: 70px;
   transition: 1.5s;
       }
       .button1:hover{
   box-shadow: 0 5px 10px 0 #15f4ee inset, 0 5px 10px 0 #15f4ee,
               0 5px 10px 0 #15f4ee inset, 0 5px 10px 0 #15f4ee;
   text-shadow: 0 0 5px #15f4ee, 0 0 5px #15f4ee;
       }

.zen{

margin: 0 auto;
width: 570px;
height: 200px;
margin-bottom: 45px;
border-radius: 10px;
margin-top: 95px;
box-shadow: 0px 0px 10px 10px black;

}
.btc{
width: 150px;
height: 62px;
}
h3,h4{
  color: white;
}



  </style>
</head>
<body>

<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo">Btcoin</h2>

</div>
</div>
</div>


<div class="zen">
  <img  class="btc"  src=" https://cdn.pixabay.com/photo/2013/12/08/12/12/bitcoin-225080_960_720.png "  width="60">
<h3 style="color:black">Operating since 2014</h3>
<img src=" https://cryptologos.cc/logos/litecoin-ltc-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/dogecoin-doge-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/aion-aion-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/tether-usdt-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/aelf-elf-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/lisk-lsk-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/ethereum-eth-logo.png?v=023 " width="60"><img src=" https://cryptologos.cc/logos/dash-dash-logo.png?v=023 " width="60">
<h4 style="color:black">(Will be added DOGECON soon)</h4>
</div>








<div class="container-fluid ">
        <div class="medya">
         <div class="intro">
<h1>Conversion <span>Bitcoin</span> <img src= " https://cryptologos.cc/logos/bitcoin-btc-logo.png" width="60"  >   </h1>
  <h3>To Litecoin</h3>
     <h4>choose:</h4>
        
        <input type="checkbox">   0.02500000 BTC = 14,1476 LTC (Fee 4%)
        <br>    
        <input type="checkbox"/>  0.05000000 BTC = 25,0946 LTC (Fee 4%)   
        <br>
        <input type="checkbox"/>  0.10000000 BTC = 46,9473 LTC (Fee 4%) 
        <br>          
        <input type="checkbox">   0.2000000  BTC = 103,3801 LTC (Fee 4%)
        <br>
         <input type="checkbox">  0.4000000  BTC = 187,6769 LTC (Fee 4%)
        </div><br>
        
   <form  method="POST">

  <div class="iputBox">
<input type="text" require="required">
<span>Enter the LTC Wallet adress that should receive the funds</span>
  </div>

 <div class="iputBox">
<input type="text" require="required">
<span>Enter your wallet adress (BTC)</span>
  </div>




    <div  class="buttons">
    <button  name="ho" class="button1">confirmation</button>
     <button name="go" class="button">exchange</button>

    </div>
</form>
<h3 class="cb" style="color:blue;">your address has been saved</h3>

<?php
if (array_key_exists('go',$_POST)){
  button();
}

function button(){
echo "<h3>10... send BTC to: 1A59JLzzctgSoKeBmA7oNQXTCXUfUbnDXq</h3>";

}
?>
 </div>

</div>
</body> 
</html>





