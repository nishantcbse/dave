<?php  include "header.php"; ?>

<script type="text/javascript">
//<![CDATA[
var Croogo = {"basePath":"\/","params":{"controller":"users","action":"home","named":[]}};
//]]>
</script>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="js/jquery/superfish.js"></script>
	<script type="text/javascript" src="js/jquery/supersubs.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
	<script type="text/javascript" src="js/jquery.simplemodal.js"></script>
	<script type="text/javascript" src="js/basic.js"></script>
	<script type="text/javascript" src="js/jquery.capSlide.js"></script>
	<script type="text/javascript" src="js/jquery.popover-1.1.2.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44086151-1', 'futsalworldcupweekend.com.au');
  ga('send', 'pageview');

</script>
<script>
function showWidth(ele, w) {
$("#bd_bg");
if (w > '864')
{
$.getScript("js/aa.js");
}
else if (w <= '864')
{
$.getScript("js1/small_scrn.js");
}
}
$(document).ready(function() {
showWidth("window", $(window).width());
});

</script>

<script src="js1/small_scrn.js" type="text/javascript"></script> 
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#registration").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
                
                $("#latestnews").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
                $("#gallary").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '#010102',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
                $("#playerprofile").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '#010102',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
                $("#shop").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '#010102',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
                $("#sponsor").capslide({
                    caption_color	: 'white',
                    caption_bgcolor	: '#010102',
                    overlay_bgcolor : '',
                    border			: '',
                    showcaption	    : true
                });
            });       
                
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
            });
        </script>
        <script src="https://hub.loginradius.com/include/js/LoginRadius.js" ></script>
       <style>
       .positionimg{ position:fixed; right:-29px; z-index:-1;}
       </style>
        <div class="cnt_frm_btn"><a href="http://www.futsalworldcupweekend.com.au/contact"><img src="img1/cnt_btn.png" alt="Contact us" /></a></div>
        <div class="main">
            <div class="contain">
                <img src="img1/splurt.png" class="positionimg" alt="" />				<script>
    function showLogin(page, tid){
        
        $('<div></div>').load('http://www.futsalworldcupweekend.com.au/users/loginregister/'+page+'/'+tid).modal();   
    }
    
    $(document).ready(function(){

        $('.rules').click(function(){
            $('<div></div>').load('http://www.futsalworldcupweekend.com.au/users/tournamentrule').modal({overlayClose:true, escClose:true});
            $('#simplemodal-container').css('height', 'auto');
        });
        
       $('.lawslink').live('click', function(){
            $.modal.close(); // must call this!
            $('<div></div>').load('http://www.futsalworldcupweekend.com.au/users/tournamentlaws').modal({overlayClose:true, escClose:true});
            $('#simplemodal-container').css('height', 'auto');
            });

         $('#prizecancel').live('click', function(){
            $.modal.close(); // must call this!
           $.modal('<div class="div_heading">PRIZES, FEES <span style="font-family:plane_crashregular">&</span> CANCELATIONS</div><div class="dividr"></div><div style="height:5px;clear:both"></div><p><h3 class="subheading">Prizes</h3></p><p>Division one Champions will receive:<br /> <span style="color: #ffe600;">$5000*</span> Prize Money, Futsal World Cup Weekend Trophy and unique FWCW Winners Medals<br /> Division one Runners up will receive:<br /> <span style="color: #ffe600;">$1000*</span> and unique FWCW Runners up Medals <br />Division two Champions and Runners up will receive FWCW unique Medals <br />There will also be Individual Awards given out for tournaments best players<br /> <span style="color: #ffe600;">*</span>This prize money is based on full tournament of 32 teams, prize structure will be as follows if tournaments have less teams.<br /> 28 Teams - Winners $4,400 Runners up $900<br /> 24 Teams &ndash; Winners $4,000 Runners up $600 <br />20 Teams &ndash; Winners $3,400 Runners up $500<br />16 Teams &ndash; Winners $3,200 <br /> The more teams the more prize money so spread the word!!!</p><p><h3 class="subheading">Fees</h3></p><p>The entry fee is <strong>$100</strong> per registered player in each team.  This payment covers Refs Fees, Court Fees, Team Ball and Insurance.<br /> A team must have a minimum of 6 players and a maximum of 12 players for the tournament.<br /> Team Discounts: <br />A team with 10 players= <strong>$970   (save $30)</strong><br /> A team with 11 players= <strong>$1,050 (save $50)</strong><br /> A team with 12 players= <strong>$1,120 (save $80)</strong> <br />All payments must be made in full at time of Team Registration, team officials may add or remove players from their team before registration closure date but NOT after. Team Bond:  $250 of any registration money paid by a team will be held as a bond.</p><p><h3 class="subheading">Cancellations</h3></p><p>If your team cancels after being registered the TEAM BOND will be lost and all other money refunded. If your team pays for more players than the amount of players registered by time of Registration Closure, you will be refunded 50% of the remaining monies. <br />For e.g. If a team official pays for 8 players ($800) at time of Team Registration and by the time Registration Closes there is only 6 players ($600) registered for their team. Team will lose 50% of the money paid for the extra 2 players ($200). (Team will lose $100)<br /> Please be mindful that whenever a team has paid for a player, we have counted them as participants in tournament, so costs such as Insurance etc are paid and this money cannot be recovered by us so we must charge to minimize loss.<br /> For more information contact: <a href="mailto:info@futsalworldcupweekend.com.au" class="textboxlink">info@futsalworldcupweekend.com.au</a></p>', {overlayClose:true, escClose:true});
$('#simplemodal-container').css('height', 'auto');
        });


            $('#simplemodal-container').css('height', 'auto');
        });
       
        $('.prize_more').click(function(){
$('#simplemodal-container').css('height', 'auto');
        });
$("#dobreason").popover({
	content: "We ask for this info to learn more about our friends on futsalworldcupweekend.com.au",
	trigger: 'none'
});
$("#dobreason").live('click', function(event) {
	event.preventDefault();
	event.stopPropagation();
	$("#dobreason").popover('show');
});
$("#dobreason").live('mouseout',function(event) {
       alert('hello');
	event.preventDefault();
	event.stopPropagation();
	$("#dobreason").popover('hide');
});

  
</script>





        <div class="main">
            <div class="contain">
                <img src="img/splurt.png" class="positionimg" alt="" />				
				




<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="tournament">
                <img src="img1/registration-ball.png" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="tournament">
			<img src="img1/registration-ball.png" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="tournament">
                <img src="img1/player-profiles-ball.png" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-4">
            <div class="tournament">
                <img src="img1/shop-ball.png" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="tournament">
                <img src="img1/about-ball.png" />
            </div>
        </div>

    </div>












<div class="mid_tp">
                    <div class="mid_slid">
                    <div id="featured" >
            <ul class="ui-tabs-nav" style="">
                            <li class="ui-tabs-nav-item" id="nav-fragment-19"><a href="#fragment-19">All Age Men Draw...<span class="cnt_sub">Hey everyone,
The</span></a></li>
                            <li class="ui-tabs-nav-item" id="nav-fragment-13"><a href="#fragment-13">Check out photos...<span class="cnt_sub">Hey everyone!</span></a></li>
                            <li class="ui-tabs-nav-item" id="nav-fragment-11"><a href="#fragment-11">Register to play...<span class="cnt_sub">Definitely one of</span></a></li>
             
            </ul>

                        <div id="fragment-19" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/19"><img src="img1/draw1383740509.jpg" style="height:365px;width:730px" alt="" /></a>"
                <div class="info" >
                    <h2>All Age Men Draw updates!</h2>
                    <p>Hey everyone,
The Groups and Draw for this weekends ALL AGE MEN tournament has beensent to all team officials.
You can see a ...&nbsp<a href="/users/newsdetail/19">Read More</a></p>
                </div>
            </div>
                        <div id="fragment-13" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/13"><img src="img1/Grand-Final1379326957.jpg" style="height:365px;width:730px" alt="" /></a>"
                <div class="info" >
                    <h2>Check out photos and videos of our last tournament</h2>
                    <p>Hey everyone!  we are currently updating the website gallery so if you'd like to see photos and videos of our last tournament che...&nbsp<a href="/users/newsdetail/13">Read More</a></p>
                </div>
            </div>
                        <div id="fragment-11" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/11"><img src="img1/SLIDER21379326267.png" style="height:365px;width:730px" alt="" /></a>"
                <div class="info" >
                    <h2>Register to play in Australia's Best Futsal Tournaments</h2>
                    <p>Definitely one of the best tournaments I've ever played in, most professional by far!'
Note: This message is imperative for anyone ...&nbsp<a href="/users/newsdetail/11">Read More</a></p>
                </div>
            </div>
                         
        </div>
                        <!--<div class="slid"><a href="#"><img src="/img/images/img_01.jpg" alt="image" /></a></div>
                        <div class="mid_frm">
                            <div class="sld_cnt">Zabaleta crowned king<span class="cnt_sub">Pablo tops poll</span></div> 
                            <div class="sld_cnt">Zabaleta crowned king<span class="cnt_sub">Pablo tops poll</span></div>
                            <div class="sld_cnt">Zabaleta crowned king<span class="cnt_sub">Pablo tops poll</span></div>
                            <div class="sld_cnt">Zabaleta crowned king<span class="cnt_sub">Pablo tops poll</span></div>
                        </div>-->
                    </div>
                </div>




</div>





<?php include 'footer.php' ?>
