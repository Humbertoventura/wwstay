<?php
 session_start();
 $id = session_id(); 
$_SESSION['check'] = session_id(); 
$id = str_split($id, 5); 
foreach($id as $key => $numIn) { 
$res = strlen($numIn); 
if($res!=5) { 
 unset($id[$key]); 
} 
} 
shuffle($id); 
$_SESSION['spam'] = $id['0']; 
//messages part 
switch(@$_SESSION['message']) { 
case "1": $message = "SORRY, THERE WAS A PROBLEM IN SENDING YOR EMAIL! <br />"; break; 
case "2": $message = "PLEASE FILL ALL FIEDLS! <br />"; break; 
case "3": $message = "INCORRECT EMAIL! <br />"; break; 
case "4": $message = "INSERT YOUR NAME!<br />"; break;
case "5": $message = "THANK YOU! WE WILL BE IN TOUCH SHORTLY.<br />"; break;
default: $message = "GET 30% OFF FIRST BOOKING !<br />"; 
break;
}
unset($_SERVER['message']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>wwstay.com - Extended Stay services</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="wwstay.com">
	<meta name="description" content="wwstay.com - Extended Stay Service Apartment Product"/>
    <link rel="SHORTCUT ICON" href="img/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/jers.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <!--<script type="text/javascript" src="js/carouFredSel.js"></script>-->
    <script type="text/javascript" src="js/main.js"></script>
    	<!-- include jQuery + carouFredSel plugin -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
        
		<!-- fire plugin onDocumentReady -->
		<script type="text/javascript">
			$(function() {

				//	Basic carousel + timer, using CSS-transitions
				$('#tslider').carouFredSel({
					auto: {
						pauseOnHover: 'resume',
						progress: '#timer1'
					}
				}, {
					transition: true
				});

			});
		</script>
</head>
</head>
<body>

	<header>
		<div class="wrapper">
			<img src="img/logo.png" alt="Crafty" class="logo">
			<a href="#" class="menu_icon" id="menu_icon"></a>
			<nav id="nav_menu">
				<ul>
					 <li><a href="mailto:travel@wwstay.com" class="Social-Ico-Mail" title="get in touch">travel@wwstay.com</a></li>
					<li><a href="https://wwstay.com/contact-us.html" class="Social-Ico-Contact" target="_blank">+1-877-659-9405</a></li>
                    <li><a href="https://wwstay.com/contact-us.html" class="Social-Ico-Contact" target="_blank"> +44-2035142181 </a></li>
                    <li><a href="https://wwstay.com/contact-us.html" class="Social-Ico-Contact" target="_blank"> +91 (0)80 40969706</a></li>
				</ul>
			</nav>

			<ul class="social">
				<li><a class="fb" href="http://www.facebook.com/wwstay" title="follow us us on facebook" target="_blank"></a></li>
				<li><a class="twitter" title="follow us us on twitter" target="_blank" href="http://twitter.com/wwstay"></a></li>
				<li><a class="gplus" href="https://plus.google.com/103949997937127342839" title="follow us us on gplus" target="_blank"></a></li>
			</ul>
		</div>
</header><!--  End Header  -->

	<section class="billboard">
			<div class="wrapper">
	  </div>
            
            <div id="containingBlock">
  <!-- An iframe embed -->
<div class="videoWrapper wideScreen">
    <div class="videoPadding">
      <iframe src="https://fast.wistia.net/embed/iframe/xz3gsa6dca?videoFoam=true"  class="wistia_embed" name="wistia_embed" width="512" height="288" ></iframe>
    </div>
  </div>
  
</div>
	</section><!--  End Billboard  -->
	<section class="features">
      <h3 class="title"><?php echo @$message; ?></h3>
		<div class="wrapper">
        <form  name="form" class="cbp-mc-form" method="post" action="sendnews.php">
          <input type="hidden" name="spam" maxlength="5" style="padding-left:5px; display:none;" value="<?php echo $id['0']; ?>">  
    <div class="cbp-mc-column">
	 <input type="text"  name="subject" placeholder="Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Name'">
     </div>
       <div class="cbp-mc-column">
	 <input type="text"  name="mail" placeholder="Email" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Email'">
     </div>
       <div class="cbp-mc-column">
	  <input type="text"  name="phone" placeholder="Company" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Company'">
      </div>
 <div class="cbp-mc-column"> 
<input class="cbp-mc-submit" type="submit" name="sent" value="GET IT NOW!"  style="background: #10689a;color:white;"/>
</div>
	  		</form>
</div>
			

	</section>

	<section class="testimonials wrapper">

		

  <h3 class="title2">WHAT PEOPLE SAY ABOUT US </h2>
		<div class="testi_slider" id="tslider">
			<div class="t">
				<p>"As a busy professional I dread the time and effort involved in trying to find suitable accommodation for extended stay projects. It was very refreshing to have someone patiently help me out without making me feel like an idiot. They were extremely empathetic and sharp in listening to my needs and interpreting them. Moreover London is notorious to have tiny units of studios. WWstay found me a perfect one bedroom accommodation which fit my needs and the ease of commute from there as as the train station was right across was an added bonus."</p>
				<p class="author">Ronald Spencer</p>
			</div>
			<div class="t">
				<p>"As a women traveling alone it has more than its share of challenges; especially with regard to security. Add a professional travel on a two month project and it compounds these challenges. I was weary about certain locations in Jersey City. My needs were clearly understood and I was given serviced accommodation near Exchange Place where I felt quite safe. The option was of good quality with CC TV and other security measures. Right from understanding my needs to the booking of appropriate accommodation WWstay made it seem like a breeze."</p>
				<p class="author">Elizabeth Bradley</p>
			</div>
			<div class="t">
				<p>"The sourcing expertise of WWstay is something commendable. They scout for extended stay solutions customized to particular requirements. Mine was no exception; in fact it was a commendable example worth mentioning. I was to be working in an industrial zone in UK with two colleagues. There no apartments close by. This was a busy period and WWstay found me good quality serviced accommodation in Glasgow. The 03 bedroom apartment while extremely comfortable also help us stay well within our budget and was just 20 minutes by cab. This wasn't just a demonstration of sourcing expertise. It is a classic example of understanding our needs and delighting us with an innovative solution"</p>
				<p class="author">John Finchley</p>
			</div>
		</div>
		<div id="t_navigation"></div>
		
</section><!--  End Testimonials  -->


		


	     
<footer>
		<img src="img/logo.png" >
		<p class="rights">Copyright © wwstay - All rights reserved. More about us in <a href="https://wwstay.com" target="_blank">wwstay.com</a></p>
	</footer><!--  End Footer  -->

</body>
</html>