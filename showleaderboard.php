<?php
header("Location: http://wiki.pokemonspeedruns.com/index.php/World_Records");
exit();
?>
<html>
<head>
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
		
		.content a:link, .content a:visited, #dropdown a:link, #dropdown a:visited
		{
			text-decoration: none;
			color: #3384CB;
			font-size: 9pt;
		}
		
		.content a:hover, #dropdown a:hover
		{
			text-decoration: underline;
			color: #3384CB;
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

		#dropdown
		{
			margin: 0 16px 16px 16px;
			padding: 8px;
			border: 1px solid #E8E8E8;
			border-radius: 5px;
		}
		
		#dropdown b
		{
			vertical-align: middle;
			font-size: 14px;
			line-height: 1.00;
		}
		
		#board0
		{
			display: block;
		}

		.content
		{
			display: none;
			margin: 0px 16px 16px 16px;
			border: 1px solid #E8E8E8;
			border-radius: 5px;
		}
		
		.wikitable
		{
			border-collapse: collapse;
			width: 100%;
		}
		
		.wikitable th
		{
			border-bottom: 1px solid #E8E8E8;
			padding: 8px;
			font-size: 14px;
			line-height: 1.00;
		}
		
		.wikitable td
		{
			border-bottom: 1px solid #E8E8E8;
			padding: 8px;
			text-align: center;
			font-size: 9pt;
		}
		
		.wikitable tr:last-child td
		{
			border: 0;
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
		<div id="dropdown">
			<table style="width: 100%">
				<tr>
					<td style="width: 33%">
						<select id="category">';
						<!-- My php is 2 pro -->
						<?php
							$titles = array(
								"redblue" => "Pokémon Red/Blue",
								"yellow" => "Pokémon Yellow",
								"stadium" => "Pokémon Stadium",
								"snap" => "Pokémon Snap",
								"tcg" => "Pokémon Trading Card Game",
								"goldsilver" => "Pokémon Gold/Silver",
								"crystal" => "Pokémon Crystal",
								"stadium2" => "Pokémon Stadium 2",
								"rubysapphire" => "Pokémon Ruby/Sapphire",
								"emerald" => "Pokémon Emerald",
								"frlg" => "Pokémon FireRed/LeafGreen",
								"mysteryrb" => "Pokémon Mystery Dungeon: Blue/Red Rescue Team",
								"colosseum" => "Pokémon Colosseum",
								"xd" => "Pokémon XD: Gale of Darkness",
								"diamondpearl" => "Pokémon Diamond/Pearl",
								"platinum" => "Pokémon Platinum",
								"hgss" => "Pokémon HeartGold/SoulSilver",
								"pokepark" => "Poképark Wii: Pikachu's Adventure",
								"rumble" => "Pokémon Rumble",
								"blackwhite" => "Pokémon Black/White",
								"pokepark2" => "Poképark 2: Wonders Beyond",
								"black2white2" => "Pokémon Black2/White2",
								"conquest" => "Pokémon Conquest",
								"xy" => "Pokémon X/Y",
							);
							
							$urls = array(
								"redblue" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Red/Blue/Times",
								"yellow" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Yellow/Times",
								"stadium" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Stadium/Times",
								"snap" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Snap/Times",
								"tcg" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Trading_Card_Game/Times",
								"goldsilver" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Gold/Silver/Times",
								"crystal" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Crystal/Times",
								"stadium2" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Stadium_2/Times",
								"rubysapphire" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Ruby/Sapphire/Times",
								"emerald" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Emerald/Times",
								"frlg" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_FireRed/LeafGreen/Times",
								"mysteryrb" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Mystery_Dungeon:_Blue/Red_Rescue_Team/Times",
								"colosseum" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Colosseum/Times",
								"xd" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_XD:_Gale_of_Darkness/Times",
								"diamondpearl" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Diamond/Pearl/Times",
								"platinum" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Platinum/Times",
								"hgss" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_HeartGold/SoulSilver/Times",
								"pokepark" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9park_Wii:_Pikachu%27s_Adventure/Times",
								"rumble" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Rumble/Times",
								"blackwhite" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Black/White/Times",
								"pokepark2" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9park_2:_Wonders_Beyond/Times",
								"black2white2" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Black2/White2/Times",
								"conquest" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_Conquest/Times",
								"xy" => "http://www.pokemonspeedruns.com/index.php/Pok%C3%A9mon_X/Y/Times",
							);
							
							if (array_key_exists("game", $_GET) && array_key_exists($_GET["game"], $titles))
							{
								$content = file_get_contents($urls[$_GET["game"]]);
								if (preg_match_all('/<span\sclass="mw-headline".*?>\s(.*?)\s<\/span>/', $content, $matches))
								{
									foreach ($matches[1] as $match)
									{
										echo '<option>' . $match . '</option>';
									}
								}
						?>
					</td>
					<td style="width: 33%; text-align: center">
						<?php
								echo '<b>' . $titles[$_GET["game"]] . '</b>';
						?>
					</td>
					<td style="width: 33%; text-align: right">
						<?php
								echo '<a href="' . $urls[$_GET["game"]] . '">Submit a time</a>';
							}
						?>
					</td>
				</tr>
			</table>
		</div>
											
		<script type="text/javascript">
			document.getElementById("category").onchange = function() {
				var i = 0;
				var div = document.getElementById("board" + i);
				
				while (div) {
					div.style.display = "none";
					div = document.getElementById("board" + ++i);
				}

				document.getElementById("board" + this.selectedIndex).style.display = "block";
			}
		</script>
		
		<?php
			if (array_key_exists("game", $_GET) && array_key_exists($_GET["game"], $urls))
			{
				$content = file_get_contents($urls[$_GET["game"]]);
				
				if (preg_match_all('/<table.*?>.*?<\/[\s]*table>/s', $content, $matches))
				{
					$i = 0;
					foreach ($matches[0] as $match)
					{
						echo '<div id="board' . $i . '" class="content">' . $match . '</div>';
						$i++;
					}
				}
			}
		?>
	</div>
</body>
</html>
