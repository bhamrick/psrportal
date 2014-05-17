<?php
if(strpos($_SERVER['REQUEST_URI'], '/index.php/') !== false) {
  header('Location: http://wiki.pokemonspeedruns.com'.$_SERVER['REQUEST_URI'],true,302);
}
?>  
<html>
<head>
    <title>Pok&eacute;mon Speedruns - Portal Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
		body
		{
			margin: 0 0;
			background-image: url('images/bg.png');
			font-family: "Arial";
			font-size: 9pt;
			color: #292F33;
		}

		hr
		{
			margin: 8px -8px 8px -8px;
			border: none;
			height: 1px;
			background-color: #E8E8E8;
		}
		
		p
		{
			font-size: 7pt;
		}
		
		#main
		{
			margin: 0 auto;
			width: 1000px;
			min-height: 100%;
			background-color: #FFFFFF;
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.35);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.35);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.35);
			overflow: auto;
		}
		
		#header
		{
			overflow: hidden;
			height: 70px;
			margin: 16px 16px 0 16px;
			border: 1px solid #E8E8E8;
			border-radius: 5px 5px 0 0;
		}
		
		#navbar
		{
			overflow: hidden;
			height: 30px;
			margin: -1px 16px 16px 16px;
			border: 1px solid #E8E8E8;
			border-radius: 0 0 5px 5px;
		}
		
		#twitter
		{
			float: right;
			margin: 0 16px 16px 8px;
			width: 300px;
		}
		
		#news
		{
			float: left;
			margin: 0 8px 16px 16px;
			padding: 1px 8px 0 8px;
			width: 634px;
			border: 1px solid #E8E8E8;
			border-radius: 5px;
		}
		
		#news a:link, #news a:visited
		{
			text-decoration: none;
			color: #3384CB;
		}
		
		#news a:hover
		{
			text-decoration: underline;
			color: #3384CB;
		}
		
		.posttitle
		{
			font-size: 14px;
			line-height: 1.00;
		}
		
		/* I used a button generator for this because I am bad */
		.navbutton
		{
			margin: -1px -4px 0 0;
			-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
			-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
			box-shadow:inset 0px 1px 0px 0px #ffffff;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9) );
			background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
			background-color:#f9f9f9;
			-webkit-border-top-left-radius:0px;
			-moz-border-radius-topleft:0px;
			border-top-left-radius:0px;
			-webkit-border-top-right-radius:0px;
			-moz-border-radius-topright:0px;
			border-top-right-radius:0px;
			-webkit-border-bottom-right-radius:0px;
			-moz-border-radius-bottomright:0px;
			border-bottom-right-radius:0px;
			-webkit-border-bottom-left-radius:0px;
			-moz-border-radius-bottomleft:0px;
			border-bottom-left-radius:0px;
			text-indent:0;
			border:1px solid #E8E8E8;
			display:inline-block;
			color:#666666;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			font-style:normal;
			height:30px;
			line-height:30px;
			width:193px;
			text-decoration:none;
			text-align:center;
			text-shadow:1px 1px 0px #ffffff;
		}
		
		.navbutton:hover
		{
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9) );
			background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
			background-color:#e9e9e9;
		}
		
		.navbuttonleft
		{
			margin: -1px -4px 0 -1px;
		}
	</style>
</head>
<body>
	<div id="main">
		<div id="header">
			<a href="index.php"><img src="images/banner.png"></a>
		</div>
		<div id="navbar">
			<a href="http://forums.pokemonspeedruns.com/index.php" class="navbutton navbuttonleft">Forums</a>
			<a href="http://www.pokemonspeedruns.com/index.php/Main_Page" class="navbutton">Wiki</a>
			<a href="leaderboards.php" class="navbutton">Leaderboards</a>
			<a href="http://www.pokemonspeedruns.com/index.php/FAQ_List" class="navbutton">FAQs</a>
			<a href="http://twitch.tv/team/psr" class="navbutton">Twitch</a>
		</div>
		<div id="news">
			<h1 class="posttitle">News & Announcements</h1>
			<hr>
			
			<?php
				$feed = simplexml_load_file("http://psrtmp.dabomstew.com/feed.php?f=5");
				
				$len = count($feed->entry);
				$i = 0;
				foreach ($feed->entry as $entry)
				{
					echo '<h1 class="posttitle"><a href="' . $entry->id . '">' . str_replace('News and Announcements o ', '', $entry->title) . '</a></h1>';

					preg_match('/Posted by .*<\/p>/', $entry->content, $matches);
					
					echo '<p>' . $matches[0] . '<br>';
					echo preg_replace('/<p>Statistics: (Posted by .*<\/p><hr \/>)/', '', $entry->content) . '<br><br>';
					
					if ($i != $len - 1)
					{
						echo '<hr>';
					}
					
					$i++;
				}
			?>
		</div>
		<div id="twitter">
			<a class="twitter-timeline" href="https://twitter.com/PkmnSpeedRuns" data-widget-id="455502948416491520">Tweets by @PkmnSpeedRuns</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</div>
</body>
</html>