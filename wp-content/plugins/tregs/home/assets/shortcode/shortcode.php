<!DOCTYPE html>
<html lang="en">

<head>

<style>
div{
  display:block;
}

.frame{
  border-radius: 10px;
}

.center{
   position: relative;
}

h1, h5{
  display: block;
  text-align: center;
}

#odometer{
  color: white; 
  font-size: 30px;
  letter-spacing: 5px;
  text-align:right;
  margin-right:5px;
}

.odometer-digit {
background-color:white;
color:black;
border-radius:5px;
width: 40px !important;
  margin: 15px 3px !important;

}
.odometer-value{
  text-align: center !important;
}

.odometer-value.odometer-last-value.odometer-first-value {
  text-align: center !important;
}

.odometer-value.odometer-last-value {
  padding-left:15px !important;
}

#marquee1 {
	font-size: 25px;
	line-height: 2.5;
}
	
@media (max-width: 998px) {
  #odometer{
    font-size: 18px;
	  left:10%;
  }
  #marquee1{
    font-size: 18px;
}
.odometer-digit {
background-color:white;
color:black;
border-radius:5px;
width: 15px;
  margin: 10px 2px;

}
.odometer-value.odometer-last-value {
  padding-left:3px !important;
}
.odometer-inside{
  text-align:center;
  margin:0 !important;
  padding-right:60px !important;
}
.h2_mobile {
  font-size : 20px !important;
  text-align:center;
}
}
@media (max-width: 1024px) {
  #odometer{
    font-size: 20px;
	  left:10%;
  }
  #marquee1{
    font-size: 18px;
}
.odometer-digit {
background-color:white;
color:black;
border-radius:5px;
width: 15px;
  margin: 10px 2px;

}
.odometer-value.odometer-last-value {
  padding-left:3px !important;
}
.odometer-inside{
  text-align:center;
  margin:0 !important;
  padding-right:60px !important;
}
.h2_mobile {
  font-size : 20px !important;
  text-align:center;
}
}
@media (max-width: 786px) {
  #odometer{
    font-size: 18px;
  width: 100%;
	  left:5%;
  }
  #marquee1{
    font-size: 18px;
}

.odometer-digit {
background-color:white;
color:black;
border-radius:5px;
width: 15px;
  margin: 10px 2px;

}
.odometer-value.odometer-last-value {
  padding-left:3px !important;
}
.odometer-inside{
  text-align:center;
  margin:0 !important;
  padding-right:60px !important;
}
.h2_mobile {
  font-size : 20px !important;
  text-align:center;
}
}







/* Float four columns side by side */
#column {
  margin:auto;
  padding: auto;
}

.row {
  margin: -50px -5px 0 -5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 
  background-image: url("https://www.pinoygames.club/wp-content/uploads/2022/07/pgbanner.jpg");
  background-repeat: no-repeat;
  box-shadow: 5px 10px #888888;
  color: white;
  border-radius:10px;
  position: absolute;
  transform: translate(50%. 0);
  margin-top:-50px;
  width:1655px;
}

.fa {font-size:50px;}


.odometer_web {
display:block;
}
.odometer_mobile {
display:none;
}

@media (max-width: 1024px){
  .odometer_web {
display:none;
}
.odometer_mobile {
display:block;
}

#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 
  background-image: url("https://www.pinoygames.club/wp-content/uploads/2022/07/pgbanner.jpg");
  background-repeat: no-repeat;
  box-shadow: 5px 10px #888888;
  color: white;
  border-radius:10px;
  position: absolute;
  transform: translate(50%. 0);
  margin-top:0;
  width:1655px;
}


}

</style>

</head>
<body onload="loadjackpots2()">



<!----- Start ----->


<div class="wp-container-33 wp-block-columns" style="background-image: url('https://www.pinoygames.club/wp-content/uploads/2022/07/pgbanner.jpg');box-shadow: 5px 10px #888888;border-radius:10px;">
<div class="wp-container-31 wp-block-column is-vertically-aligned-center">

<h2 class="h2_mobile">TOTAL WINNINGS OF</br> PLAYERS</h2>

</div>



<div class="wp-container-32 wp-block-column"  style="text-align:right">
<div id="odometer" class="has-text-align-center"></div>
</div>
</div>


<!----- End ----->

<div style="margin:0">
	
<div class="wp-block-columns" style="margin-left:20px;margin-right:20px">

<div class="wp-block-column">
<div id="xmlcontent" class="demo" style=" color:#fff; width:100%; cursor:pointer">                    
<marquee behaviour="scroll" scrollamount="5">
<span id="marquee1">Fetching Data</span>
</marquee>                   
</div>
</div>
</div>
	

						
<div class="wp-block-columns">
<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.pinoygames.club/wp-content/uploads/2021/11/naughtyornice.gif" alt="" class="wp-image-172">
<figcaption> 
<h3 class="post-title"id="gamename1"> </h3>
<div style="margin:10px 0 0 0">
<span id="jackpot1"style="color:#db4f3d;font-size:16px"></span>
</div>
<p>RealTimeGaming</p>
</figcaption>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.pinoygames.club/wp-content/uploads/2021/11/rudolphsrevenge.gif" alt="" class="wp-image-174">
<figcaption> 
<h3 class="post-title"id="gamename2"> </h3>
<div style="margin:10px 0 0 0">
<span id="jackpot2"style="color:#db4f3d;font-size:16px"></span>
</div>
<p>RealTimeGaming</p>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.pinoygames.club/wp-content/uploads/2021/11/returnoftherudolph.gif" alt="" class="wp-image-173">
<figcaption> 
<h3 class="post-title"id="gamename3"> </h3>
<div style="margin:10px 0 0 0">
<span id="jackpot3"style="color:#db4f3d;font-size:16px"></span>
</div>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.pinoygames.club/wp-content/uploads/2021/11/3stoogesbridelessgroom.gif" alt="" class="wp-image-176">
<figcaption> 
<h3 class="post-title"id="gamename4"> </h3>
<div style="margin:10px 0 0 0">
<span id="jackpot4"style="color:#db4f3d;font-size:16px"></span>
</div>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.pinoygames.club/wp-content/uploads/2021/11/trex2.gif" alt="" class="wp-image-175">
<figcaption> 
<h3 class="post-title"id="gamename5"> </h3>
<div style="margin:10px 0 0 0">
<span id="jackpot5"style="color:#db4f3d;font-size:16px"></span>
</div>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>
</div>
</div>
</body>
<script>

 

function formatCurrency3(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots3() {                
                var jp_rtg_url = "/wp-content/plugins/tregs/home/feedstotalwinners.php";
                
                console.log(jp_rtg_url);
                jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "json",
                    success: function (result) {
                      jQuerymarquee_AccountName_0 = result[0][0]["AccountName"];
                    var marquee_AccountName_show_0 = jQuerymarquee_AccountName_0
                    var marquee_AccountName_value_0 = marquee_AccountName_show_0

                    jQuerymarquee_payout_0 = result[0][0]["Payout"];
                    var marquee_payout_show_0 = jQuerymarquee_payout_0
                    var marquee_payout_value_0 = marquee_payout_show_0

                    jQuerymarquee_AccountName_1 = result[0][1]["AccountName"];
                    var marquee_AccountName_show_1 = jQuerymarquee_AccountName_1
                    var marquee_AccountName_value_1 = marquee_AccountName_show_1

                    jQuerymarquee_payout_1 = result[0][1]["Payout"];
                    var marquee_payout_show_1 = jQuerymarquee_payout_1
                    var marquee_payout_value_1 = marquee_payout_show_1

                    jQuerymarquee_AccountName_2 = result[0][2]["AccountName"];
                    var marquee_AccountName_show_2 = jQuerymarquee_AccountName_2
                    var marquee_AccountName_value_2 = marquee_AccountName_show_2

                    jQuerymarquee_payout_2 = result[0][2]["Payout"];
                    var marquee_payout_show_2 = jQuerymarquee_payout_2
                    var marquee_payout_value_2 = marquee_payout_show_2
                    
                    jQuerymarquee_AccountName_3 = result[0][3]["AccountName"];
                    var marquee_AccountName_show_3 = jQuerymarquee_AccountName_3
                    var marquee_AccountName_value_3 = marquee_AccountName_show_3

                    jQuerymarquee_payout_3 = result[0][3]["Payout"];
                    var marquee_payout_show_3 = jQuerymarquee_payout_3
                    var marquee_payout_value_3 = marquee_payout_show_3

                    jQuerymarquee_AccountName_4 = result[0][4]["AccountName"];
                    var marquee_AccountName_show_4 = jQuerymarquee_AccountName_4
                    var marquee_AccountName_value_4 = marquee_AccountName_show_4

                    jQuerymarquee_payout_4 = result[0][4]["Payout"];
                    var marquee_payout_show_4 = jQuerymarquee_payout_4
                    var marquee_payout_value_4 = marquee_payout_show_4

                    jQuerymarquee_AccountName_5 = result[0][5]["AccountName"];
                    var marquee_AccountName_show_5 = jQuerymarquee_AccountName_5
                    var marquee_AccountName_value_5 = marquee_AccountName_show_5

                    jQuerymarquee_payout_5 = result[0][5]["Payout"];
                    var marquee_payout_show_5 = jQuerymarquee_payout_5
                    var marquee_payout_value_5 = marquee_payout_show_5

                    jQuerymarquee_AccountName_6 = result[0][6]["AccountName"];
                    var marquee_AccountName_show_6 = jQuerymarquee_AccountName_6
                    var marquee_AccountName_value_6 = marquee_AccountName_show_6

                    jQuerymarquee_payout_6 = result[0][6]["Payout"];
                    var marquee_payout_show_6 = jQuerymarquee_payout_6
                    var marquee_payout_value_6 = marquee_payout_show_6

                    jQuerymarquee_AccountName_7 = result[0][7]["AccountName"];
                    var marquee_AccountName_show_7 = jQuerymarquee_AccountName_7
                    var marquee_AccountName_value_7 = marquee_AccountName_show_7

                    jQuerymarquee_payout_7 = result[0][7]["Payout"];
                    var marquee_payout_show_7 = jQuerymarquee_payout_7
                    var marquee_payout_value_7 = marquee_payout_show_7

                    jQuerymarquee_AccountName_8 = result[0][8]["AccountName"];
                    var marquee_AccountName_show_8 = jQuerymarquee_AccountName_8
                    var marquee_AccountName_value_8 = marquee_AccountName_show_8

                    jQuerymarquee_payout_8 = result[0][8]["Payout"];
                    var marquee_payout_show_8 = jQuerymarquee_payout_8
                    var marquee_payout_value_8 = marquee_payout_show_8

                    jQuerymarquee_AccountName_9 = result[0][9]["AccountName"];
                    var marquee_AccountName_show_9 = jQuerymarquee_AccountName_9
                    var marquee_AccountName_value_9 = marquee_AccountName_show_9

                    jQuerymarquee_payout_9 = result[0][9]["Payout"];
                    var marquee_payout_show_9 = jQuerymarquee_payout_9
                    var marquee_payout_value_9 = marquee_payout_show_9

                    var el_1 = document.getElementById('marquee1');
                    
                    el_1.innerHTML = marquee_AccountName_value_0 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_0)) + 
                    ' | ' + ' ' + marquee_AccountName_value_1 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_1)) + 
                    ' | ' + ' ' + marquee_AccountName_value_2 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_2)) +
                    ' | ' + ' ' + marquee_AccountName_value_3 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_3)) +
                    ' | ' + ' ' + marquee_AccountName_value_4 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_4)) +
                    ' | ' + ' ' + marquee_AccountName_value_5 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_5)) +
                    ' | ' + ' ' + marquee_AccountName_value_6 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_6)) +
                    ' | ' + ' ' + marquee_AccountName_value_7 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_7)) +
                    ' | ' + ' ' + marquee_AccountName_value_8 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_8)) +
                    ' | ' + ' ' + marquee_AccountName_value_9 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_9)) ;
					
					
                  
                    }
                });
            }
 
 var jQueryrand1;

 function formatCurrency2(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots2() {                
                var jp_rtg_url = "/wp-content/plugins/tregs/home/feedstotalwinnings.php";
               
                jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "json",
                    success: function (result) {

                        // result = JSON.parse(result);
                        console.log(result[0][0]["Payout"]);
                      //  var payout = JSON.parse(result);
                        jQueryrand1 = result[0][0]["Payout"];

                      

                    jQueryrand2 = jQueryrand1 - 1000.00;
                    var randomNum = Math.floor((Math.random() * (jQueryrand2 - jQueryrand1)) + jQueryrand2);
                    //var number_value = randomNum
                    var number_value = jQueryrand1

                    var el = document.querySelector('#odometer');
                    var el_mob = document.querySelector('#odometer_mob');

                    od_numbers = new Odometer({
                      el: el,
                      el_mob: el_mob,
                      value: number_value,
                      format: '(ddd,ddd,ddd,ddd).dd',
                      //format: '(ddd,ddd,ddd,ddd)',
                      theme: 'minimal',
                      duration: 300000000,
                    });
                    const numbers_interval = setInterval(function() {
                    number_value += 0.13
                    //od_numbers.update(number_value)
                    }, 2000);

                 
                        
                    
                    loadjackpots(); 
                    }
                });
            }

function formatCurrency(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots() {                
                var jp_rtg_url = "/wp-content/plugins/tregs/home/feeds.php";
                
                jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "xml",
                    success: function (xml) {

                        jQuery(xml).find('data').each(function(){
                            var gameName = jQuery(this).find('gameName').text();
                            var jackpotAmount = jQuery(this).find('jackpotAmount').text();
                            var jackpotCategory = jQuery(this).find('jackpotCategory').text();
                            
                            if(gameName == 'Naughty Or Nice') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename1").html(gameName);
                                jQuery("#jackpot1").html(formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#jackpot11111").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'Rudolphs Revenge') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename2").html(gameName);
                                jQuery("#jackpot2").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'Return of the Rudolph') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename3").html(gameName);
                                jQuery("#jackpot3").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'The Three Stooges') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename4").html(gameName);
                                jQuery("#jackpot4").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'T-Rex II' && jackpotCategory == 'Major') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename5").html(gameName);
                                jQuery("#jackpot5").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            loadjackpots3();
                        });
                        
                    }
                });
            }
         
         
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>