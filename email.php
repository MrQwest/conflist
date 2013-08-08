<!doctype html>

<!-- 
320 and Up boilerplate extension
Andy Clarke http://about.me/malarkey
Keith Clark http://twitter.com/keithclarkcouk
Version: 2
URL: http://stuffandnonsense.co.uk/projects/320andup/
License: http://creativecommons.org/licenses/MIT
-->

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Don't forget anything again! | Conflist</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

<!-- For all browsers -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" media="print" href="css/print.css">
<!-- For progressively larger displays -->
<link rel="stylesheet" media="only screen and (min-width: 480px)" href="css/480.css">
<link rel="stylesheet" media="only screen and (min-width: 600px)" href="css/600.css">
<link rel="stylesheet" media="only screen and (min-width: 768px)" href="css/768.css">
<link rel="stylesheet" media="only screen and (min-width: 992px)" href="css/992.css">
<!-- For Retina displays -->
<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="css/2x.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>

<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="/favicon.ico">

<!--iOS. Delete if not required -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="img/splash.png">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->

<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">
</head>

<body class="clearfix">

<header role="banner">
<h1><img src="img/conflist.png" alt="Conflist" title="Conflist" /></h1>
</header>

<div class="content clearfix">

<?php 


    $headers  = 'MIME-Version: 1.0' . "\r\n";
//    $headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' ."\r\n";
        
    $headers .= 'To:'. $Email . "\r\n";
    
    $headers .= 'From: hello@mrqwest.co.uk' . "\r\n";
  ;

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}


    $subject = 'Your Conference Checklist';
    
    $body = "<html><body>";
$body .= '<img src="http://mrqwest.co.uk/conflist/img/conflist.png" alt="Conflist" />';
$body .= '<table rules="all" style="border-color: #D84040;" cellpadding="10">';
$body .= "<tr style='background: #eee;'><td><strong>Checklist:</strong> </td><td>Status</td></tr>";
$body .= "<tr><td><strong>Booked tickets?</strong> </td><td>" . $tickets . "</td></tr>";
$body .= "<tr><td><strong>Printed tickets?</strong> </td><td>" . $print . "</td></tr>";
$body .= "<tr><td><strong>Booked Hotel?</strong> </td><td>" . $hotel . "</td></tr>";
$body .= "<tr><td><strong>Arranged Flights?</strong> </td><td>" . $flights . "</td></tr>";
$body .= "<tr><td><strong>Passport?</strong> </td><td>" . $passport . "</td></tr>";
$body .= "<tr><td><strong>Has your passport Expired?</strong> </td><td>" . $passportexpired . "</td></tr>";
$body .= "<tr><td><strong>Got beer money?</strong> </td><td>" . $money . "</td></tr>";
$body .= "<tr><td><strong>Business cards?</strong> </td><td>" . $cards . "</td></tr>";
$body .= "<tr><td><strong>Got your Toothbrush?</strong> </td><td>" . $toothbrush . "</td></tr>";
$body .= "<tr><td><strong>Packed your check shirt?:</strong> </td><td>" . $clothes . "</td></tr>";
$body .= "</table>";
$body .= "<p>Have you got much to prepare or are you all done?</p>";
$body .= "<p>— Anthony (@mrqwest or mrqwest.co.uk)</p>";
$body .= "</body></html>";

    
    if (mail($to, $subject, $body,$headers)) {
    
   //header();
?>


	<h2>Good Work!</h2>
	<p>We've sent you an email as a reminder for what you still need to do. Don't leave it too late though huh?</p>
	<p>Any suggestions, do let me know! <a href="http://twitter.com/mrqwest" title="twitter">@mrqwest on twitter</a></p>


<?php

    }
 

?>
</div>
<footer role="contentinfo" class="clearfix">
	<p>Another little weekend project by <a href="http://twitter.com/mrqwest" title="Why not follow me on twitter?">@mrqwest</a> (Why not follow me on twitter?) &copy; 2011 <a href="http://mrqwest.co.uk" title="MrQwest - A Croydon Web Designer">MrQwest.co.uk</a></p>
</footer>

<!-- Scripts -->
<script src="js/libs/jquery-1.6.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
yepnope({
	test : Modernizr.mq('(min-width)'),
	nope : ['js/libs/respond.min.js']
});
</script>

<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','UA-26818405-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


</body>
</html>