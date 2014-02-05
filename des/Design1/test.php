<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Design</title>
<!--
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link href="css/custom.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

-->
</head>
<body>
<!--<header>
<div class="row">
<div class="col-md-10">
<div class="logo">

</div>

</div>
</div>
-->


</header>






 <link rel="stylesheet" href="css/style.css">

 <meta name="description" content="Croogo - A CakePHP powered Content Management System" /><meta name="generator" content="Croogo - Content Management System" /><meta name="keywords" content="croogo, Croogo" /><meta name="robots" content="index, follow" /><link href="/favicon.ico" type="image/x-icon" rel="icon" /><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" /><link href="/nodes/promoted.rss" type="application/rss+xml" rel="alternate" title="RSS 2.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/960.css" />
	<link rel="stylesheet" type="text/css" href="css/theme.css" />
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/capstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/popover.css" />
	<link rel="stylesheet" type="text/css" href="css/homeslider.css" />
    	<link href="css1/bootstrap.css" type="text/css" rel="stylesheet">

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
$.getScript("js/small_scrn.js");
}
}
$(document).ready(function() {
showWidth("window", $(window).width());
});

</script>

<script src="js/small_scrn.js" type="text/javascript"></script> 
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
        <div class="cnt_frm_btn"><a href="http://www.futsalworldcupweekend.com.au/contact"><img src="/img/images/cnt_btn.png" alt="Contact us" /></a></div>
        <div class="main">
            <div class="contain">
                <img src="img/splurt.png" class="positionimg" alt="" />				<script>
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


        $('.tour_bio').click(function(){
            $.modal('<div class="div_heading">Bio</div><div class="dividr"></div><div style="height:5px;clear:both"></div><p style="color:#fff">FUTSAL WORLD CUP WEEKEND is a world cup style FUTSAL event. The 2013 FUTSAL WORLD CUP WEEKEND tournaments will be played at <a href="https://maps.google.com.au/maps?q=hawkesbury+indoor+stadium&ie=UTF-8&ei=ybQVUt7NL5GuiQeu4YCgAg&sqi=2&ved=0CAgQ_AUoAg" target="_blank" class="textboxlink">HAWKESBURY STADIUM, 16 STEWART ST, SOUTH WINDSOR</a>.<br/>As a world cup structured event there will be a maximum of 32 teams in each tournament. Spots will fill quickly so REGISTER EARLY to avoid missing out on playing in a high quality futsal event as well as an entertainment filled weekend where every player will feel like a pro! <br/>It is on a first in best dressed basis for team entries, game times and country selection, there won't be more than one team allowed with the same country selection and a maximum of 32 teams so get in early!<br/>Tournaments will be played over 2 full days. <br/>Major prize is <span style="color:#ffe600">$5000*</span> for the DIVISION ONE GRAND FINAL WINNER in each tournament.<br/>And <span style="color:#ffe600">$1000*</span> for the DIVISION ONE RUNNERS UP in each tournament.<br/>Division 2 winner and runners up will receive unique FWCW Medals<br/>Day one of competition will consist of all group stage matches and day two will be the start of the knockout phase round of 16 through to Grand final.<br/>Once group stage is over the competition will split in two, with the top 2 teams of each group progressing to Division 1 round of 16 and still playing for the major prize!<br/>The bottom 2 teams of each group will go into Division 2 round of 16 so they still get to play more games and feel the pressures of knockout football! <br/>There will be four events held this year: <a href="http://www.futsalworldcupweekend.com.au/users/tournamentdetail/1" style="color:red">All Age Men</a> – <a href="http://www.futsalworldcupweekend.com.au/users/tournamentdetail/2" style="color:red">Men Over 35</a> – <a href="http://www.futsalworldcupweekend.com.au/users/tournamentdetail/3" style="color:red">Male Youth</a>– <a href="http://www.futsalworldcupweekend.com.au/users/tournamentdetail/4" style="color:red">All Age Women</a><br/>Click on the above link that applies to you to go to info and registration for each tournament<br/>* This prize money structure is based on a 32 team tournament, for prize structure on tournaments with less than 32 teams see <a href="#" class="prize_more" id="prizecancel" style="color:red">Prizes, Fees & Cancellations</a>.</p>', {overlayClose:true, escClose:true}); 
            $('#simplemodal-container').css('height', 'auto');
        });
       
        $('.prize_more').click(function(){
            $.modal('<div class="div_heading">PRIZES, FEES <span style="font-family:plane_crashregular">&</span> CANCELATIONS</div><div class="dividr"></div><div style="height:5px;clear:both"></div><p><h3 class="subheading">Prizes</h3></p><p>Division one Champions will receive:<br /> <span style="color: #ffe600;">$5000*</span> Prize Money, Futsal World Cup Weekend Trophy and unique FWCW Winners Medals<br /> Division one Runners up will receive:<br /> <span style="color: #ffe600;">$1000*</span> and unique FWCW Runners up Medals <br />Division two Champions and Runners up will receive FWCW unique Medals <br />There will also be Individual Awards given out for tournaments best players<br /> <span style="color: #ffe600;">*</span>This prize money is based on full tournament of 32 teams, prize structure will be as follows if tournaments have less teams.<br /> 28 Teams - Winners $4,400 Runners up $900<br /> 24 Teams &ndash; Winners $4,000 Runners up $600 <br />20 Teams &ndash; Winners $3,400 Runners up $500<br />16 Teams &ndash; Winners $3,200 <br /> The more teams the more prize money so spread the word!!!</p><p><h3 class="subheading">Fees</h3></p><p>The entry fee is <strong>$100</strong> per registered player in each team.  This payment covers Refs Fees, Court Fees, Team Ball and Insurance.<br /> A team must have a minimum of 6 players and a maximum of 12 players for the tournament.<br /> Team Discounts: <br />A team with 10 players= <strong>$970   (save $30)</strong><br /> A team with 11 players= <strong>$1,050 (save $50)</strong><br /> A team with 12 players= <strong>$1,120 (save $80)</strong> <br />All payments must be made in full at time of Team Registration, team officials may add or remove players from their team before registration closure date but NOT after. Team Bond:  $250 of any registration money paid by a team will be held as a bond.</p><p><h3 class="subheading">Cancellations</h3></p><p>If your team cancels after being registered the TEAM BOND will be lost and all other money refunded. If your team pays for more players than the amount of players registered by time of Registration Closure, you will be refunded 50% of the remaining monies. <br />For e.g. If a team official pays for 8 players ($800) at time of Team Registration and by the time Registration Closes there is only 6 players ($600) registered for their team. Team will lose 50% of the money paid for the extra 2 players ($200). (Team will lose $100)<br /> Please be mindful that whenever a team has paid for a player, we have counted them as participants in tournament, so costs such as Insurance etc are paid and this money cannot be recovered by us so we must charge to minimise loss.<br /> For more information contact: <a href="mailto:info@futsalworldcupweekend.com.au" class="textboxlink">info@futsalworldcupweekend.com.au</a></p>', {overlayClose:true, escClose:true});
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

    });
</script>
<div class="header">
    <div class="hd_logo"><img src="img/images/logo.png" alt="logo" /></div>
    <div class="hd_rght">
        <div class="hd_soc">
            <ul>
                <li><span class="soc_txt">Join us on :</span></li>
                <li><a href="https://www.facebook.com/FutsalWorldCupWeekend/app_190322544333196" target="_blank"><img src="/img/images/soc_01.png" alt="Facebook" title="Facebook" /></a></li> 
                <li><a href="https://twitter.com/FutsalWCW" target="_blank"><img src="/img/images/soc_02.png" alt="Twitter" title="Twitter"  /></a></li>
                <li><a href="https://plus.google.com/101693488321342161689/posts" target="_blank"><img src="/img/images/soc_03.png" alt="Google Plus" title="Google Plus" /></a></li>
                <li><a href="http://www.youtube.com/channel/UCXKuw7f9eNOZKnPdzOOzWew" target="_blank"><img src="/img/images/soc_04.png" alt="You Tube" title="You Tube" /></a></li>
                <li><a href="http://pinterest.com/futsalwcw" target="_blank"><img src="/img/images/soc_05.png" alt="Pinterest" title="Pinterest" /></a></li>
            </ul>
        </div>
        <div class="hd_login">
                            <a class="buttn" href="#" onclick="showLogin();">Register/Login</a>
                    </div>


<div class="hd_tag_txt"><!--<img src="/img/images/hd_tag.png" alt="Tag" />-->Bring out the best in you</div>
        <div class="second_nav" id="snav_btn" ><span></span><span></span><span></span>
            <div id="snav_menu" > 
				<div class="nav">
					<div id="menu-3" class="menu">
<ul class="sf-menu"><li><a href="/users/home" id="link-23" class="home selected">Home</a></li><li><a href="/users/tournamentbioandregistration" id="link-18" class="tournaments">Tournaments</a><ul><li><a href="#" id="link-9" class="tour_bio">Bio</a></li><li><a href="#" id="link-29" class="prize_more">Prizes, Fees &amp; Cancellations</a></li><li><a href="#" id="link-30" class="rules">Rules</a></li><li><a href="/users/tournamentbioandregistration" id="link-31" class="registration">Registration</a><ul><li><a href="/users/tournamentdetail/1" id="link-32" class="all-age-men">All age men</a></li><li><a href="/users/tournamentdetail/2" id="link-33" class="mens-over-35">Mens over 35</a></li><li><a href="/users/tournamentdetail/3" id="link-34" class="male-youth">Male Youth</a></li><li><a href="/users/tournamentdetail/4" id="link-35" class="all-age-women">All Age women</a></li></ul></li></ul></li><li><a href="/users/latestnews" id="link-19" class="latest-news">Latest News</a><ul><li><a href="/users/latestnews" id="link-45" class="all-news">All News</a></li><li><a href="/users/tournamentnews/all" id="link-46" class="tournaments-news">Tournaments news</a><ul><li><a href="/users/tournamentnews/1" id="link-48" class="all-age-men">All age men</a></li><li><a href="/users/tournamentnews/2" id="link-49" class="men-over-35">Men over 35</a></li><li><a href="/users/tournamentnews/3" id="link-50" class="male-youth">Male Youth</a></li><li><a href="/users/tournamentnews/4" id="link-51" class="all-age-women">All age women</a></li></ul></li></ul></li><li><a href="/users/gallery" id="link-7" class="gallery">Gallery</a><ul><li><a href="#" id="link-36" class="all">All</a><ul><li><a href="#" id="link-67" class="photos">Photos</a></li><li><a href="#" id="link-68" class="videos">Videos</a></li></ul></li><li><a href="/users/galleryphotos/all" id="link-37" class="tournament-photos">Tournament Photos</a><ul><li><a href="/users/galleryphotos/1" id="link-43">All age men</a></li><li><a href="/users/galleryphotos/2" id="link-69">Men over 35</a></li><li><a href="/users/galleryphotos/3" id="link-52">Male Youth</a></li><li><a href="/users/galleryphotos/4" id="link-70">All age women</a></li></ul></li><li><a href="/users/galleryvideos/all" id="link-38" class="tournament-videos">Tournament Videos</a><ul><li><a href="/users/galleryvideos/1" id="link-55">All age men</a></li><li><a href="/users/galleryvideos/2" id="link-54">Men over 35</a></li><li><a href="/users/galleryvideos/3" id="link-56">Male Youth</a></li><li><a href="/users/galleryvideos/4" id="link-57">All age women</a></li></ul></li></ul></li><li><a href="/Users/playerprofile" id="link-8" class="player-profiles">Player profiles</a><ul><li><a href="/users/playerprofile/award" id="link-59" class="award-winners">Award winners</a></li><li><a href="/users/playerprofile/1" id="link-60">All age men</a></li><li><a href="/users/playerprofile/2" id="link-62">Men over 35</a></li><li><a href="/users/playerprofile/3" id="link-61">Male Youth</a></li><li><a href="/users/playerprofile/4" id="link-63">All age women</a></li></ul></li><li><a href="/eshop/eshop_items/shop" id="link-20" class="shop">Shop</a></li><li><a href="#" id="link-21" class="partners">Partners</a><ul><li><a href="/users/viewsponsor" id="link-65" class="partner-co-sponsors-page">Partner /Co-Sponsors Page</a></li><li><a href="/users/sponsorpage" id="link-66" class="become-a-sponsor">Become a Sponsor</a></li></ul></li><li><a href="/about" id="link-64" class="about-us">About Us</a></li></ul></div>				</div>
            </div>
        </div>
    </div>
</div>                                




<!--<div class="container">
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
                <img src="img1/registration-ball.png" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-4">
            <div class="tournament">
                <img src="img1/registration-ball.png" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="tournament">
                <img src="img1/registration-ball.png" />
            </div>
        </div>

    </div>

</div>
-->



<div class="mid_tp">
                    <div class="mid_slid">
                    <div id="featured" >
            <ul class="ui-tabs-nav">
                            <li class="ui-tabs-nav-item" id="nav-fragment-19"><a href="#fragment-19">All Age Men Draw...<span class="cnt_sub">Hey everyone,
The</span></a></li>
                            <li class="ui-tabs-nav-item" id="nav-fragment-13"><a href="#fragment-13">Check out photos...<span class="cnt_sub">Hey everyone!</span></a></li>
                            <li class="ui-tabs-nav-item" id="nav-fragment-11"><a href="#fragment-11">Register to play...<span class="cnt_sub">Definitely one of</span></a></li>
             
            </ul>

                        <div id="fragment-19" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/19"><img src="img/newsvideoimagepage/draw1383740509.jpg" style="height:365px;width:730px" alt="" /></a>"
                <div class="info" >
                    <h2>All Age Men Draw updates!</h2>
                    <p>Hey everyone,
The Groups and Draw for this weekends ALL AGE MEN tournament has beensent to all team officials.
You can see a ...&nbsp<a href="/users/newsdetail/19">Read More</a></p>
                </div>
            </div>
                        <div id="fragment-13" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/13"><img src="img/newsvideoimagepage/Grand-Final1379326957.jpg" style="height:365px;width:730px" alt="" /></a>"
                <div class="info" >
                    <h2>Check out photos and videos of our last tournament</h2>
                    <p>Hey everyone!  we are currently updating the website gallery so if you'd like to see photos and videos of our last tournament che...&nbsp<a href="/users/newsdetail/13">Read More</a></p>
                </div>
            </div>
                        <div id="fragment-11" class="ui-tabs-panel" style="">
                <a href="/users/newsdetail/11"><img src="img/newsvideoimagepage/SLIDER21379326267.png" style="height:365px;width:730px" alt="" /></a>"
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

                

                <style>
.ftr_logo img{float:left;}
</style>
<div class="footer">
	<div class="foot_sec">
		<div class="foot_lgo"><a href="#"><img src="img/images/ft_lgo.png" alt="Logo" /></a></div>
	</div>
	<div class="foot_sec">
		<div class="foot_hd">Latest Posts</div>
		<div class="foot_link">
			<ul>
                    <li>+<a href="#">All Age Men Draw updates!</a></li><li>+<a href="#">Check out photos and videos of our last tournament</a></li><li>+<a href="#">Register to play in Australia's Best Futsal Tournaments</a></li>			</ul>
		</div>
	</div>
	<div class="foot_sec">
		<div class="foot_hd">Testimonials</div>
		<div class="tst_sec">
						<p>Very good competition, can&rsquo;t wait to play in the next one!</p>
		</div>
		<div class="tst_usr">
			<div class="tst_usr_img"><img src="img/images/qut_icn.png" alt="user_icon" /></div>
			<div class="tst_usr_txt">Ertan Ibrahim-Team Turkey 2011</div>
		</div>
	</div>
	<div class="foot_sec" style="width:24%">
		<div class="foot_hd">Contact Info</div>
		<div class="cont_txt">
			<p>Futsal World Cup Weekend</p>
			<p>Sydney, Australia</p>
			<p>info@futsalworldcupweekend.com.au</p>
			<p> Mob : 0402 217 652</p>
		</div>
           <div class="ftr_logo">
              <img src="img/GOPRO.png" alt="GROPRO" />
              <img src="img/images/lgblack.png" alt="GROPRO" />
           </div>
	</div>
	<div class="foot_bt"> 
		<div class="foot_menu">
			<ul>
				<li><a href="/users/home">Home</a>/</li>
				<li><a href="/users/tournamentbioandregistration">Tournaments</a>/</li>
				<li><a href="/users/latestnews">Latest News</a>/</li>
				<li><a href="/users/gallery">Gallery</a>/</li>
				<li><a href="/users/playerprofile">Player Profile</a>/</li>
				<li><a href="/eshop/eshop_items/shop">Shop</a> /</li>
				<li><a href="/users/sponsorpage">PARTNERS</a> /</a></li>
				<li><a href="">About Us /</a></li>
				<li><a href="">Contact Us /</a></li>
				<li><a href="">Privacy Policy /</a></li>
				<li><a href="">Terms of Use /</a></li>
				<li><a href="users/sitemap">sitemap</a> </a></li>
			</ul>
		</div>
		<div class="foot_cp">© Copyright 2013. All rights reserved.</div>
	</div>
</div>            </div>
        </div>
            </body>
</html>



<!--<script src="js/bootstrap.js"></script>
</body>
</html>-->