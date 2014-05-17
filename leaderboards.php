<html>
<head>
    <title>Pok&eacute;mon Speedruns - Leaderboards</title>
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
		
		#title
		{
			margin: 0 16px 0px 16px;
			padding: 8px;
			border: 1px solid #E8E8E8;
			border-radius: 5px 5px 0 0;
			text-align: center;
		}
		
		#title b
		{
			font-size: 14px;
			line-height: 1.00;
		}
		
		#links
		{
			margin: -1px 16px 16px 16px;
			border: 1px solid #E8E8E8;
			border-radius: 0 0 5px 5px;
		}
		
		#links table
		{
			width: 100%;
			font-size: 9pt;
			line-height:0.90;
			border-spacing: 8px;
		}
		
		#links td
		{
			overflow: hidden;
			border: 1px solid #E8E8E8;
			border-radius: 5px;
			width: 25%;
			padding: 0 0 8px 0;
			text-align: center;
		}
		
		#links td:hover
		{
			background-color: #F8F8F8;
		}
		
		#links a:link, #links a:visited
		{
			text-decoration: none;
			color: #3384CB;
		}
		
		#links a:hover
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
		<div id="title">
			<b>Leaderboards</b>
		</div>
		<div id="links">
			<table>
				<tr>
					<td>
						<a href="showleaderboard.php?game=redblue"><img src="images/rb.png"><br><br>Red/Blue</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=yellow"><img src="images/yellow.png"><br><br>Yellow</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=stadium"><img src="images/stadium.png"><br><br>Stadium</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=snap"><img src="images/snap.png"><br><br>Snap</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="showleaderboard.php?game=tcg"><img src="images/tcg.png"><br><br>Trading Card Game</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=goldsilver"><img src="images/gs.png"><br><br>Gold/Silver</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=crystal"><img src="images/crystal.png"><br><br>Crystal</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=stadium2"><img src="images/stadium2.png"><br><br>Stadium 2</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="showleaderboard.php?game=rubysapphire"><img src="images/rs.png"><br><br>Ruby/Sapphire</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=emerald"><img src="images/emerald.png"><br><br>Emerald</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=frlg"><img src="images/frlg.png"><br><br>FireRed/LeafGreen</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=mysteryrb"><img src="images/md1.png"><br><br>Mystery Dungeon: Red/Blue</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="showleaderboard.php?game=colosseum"><img src="images/colosseum.png"><br><br>Colosseum</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=xd"><img src="images/xd.png"><br><br>XD: Gale of Darkness</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=diamondpearl"><img src="images/dp.png"><br><br>Diamond/Pearl</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=platinum"><img src="images/platinum.png"><br><br>Platinum</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="showleaderboard.php?game=hgss"><img src="images/hgss.png"><br><br>HeartGold/SoulSilver</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=pokepark"><img src="images/pokepark.png"><br><br>Poképark Wii</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=rumble"><img src="images/rumble.png"><br><br>Rumble</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=blackwhite"><img src="images/bw.png"><br><br>Black/White</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="showleaderboard.php?game=pokepark2"><img src="images/pokepark2.png"><br><br>Poképark 2: Wonders Beyond</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=black2white2"><img src="images/bw2.png"><br><br>Black2/White2</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=conquest"><img src="images/conquest.png"><br><br>Conquest</a>
					</td>
					<td>
						<a href="showleaderboard.php?game=xy"><img src="images/x.png"><br><br>X/Y</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>