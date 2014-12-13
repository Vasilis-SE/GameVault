	<html>
	<head>
		<title> Game Vault </title>
		<meta charset='UTF-8'>
		
		<!--Meta Descriptions-->
		<meta name="keywords" content="Games, Gaming, Game Reviews, Reviews, Game Platforms,
		Game Trailers">
		<meta name="description" content="The Best Site For Game Reviews For Every Platform">
		
		<!--Initializing the css file for the structure of the site-->
		<link rel="stylesheet" type="text/css" href="CSS Files/mainStructure.css">
		<!--Initializing the css file for the menu of the site-->
		<link rel="stylesheet" type="text/css" href="CSS Files/styles.css">
		<!--Initializing the css file for main style of the index-->
		<link rel="stylesheet" type="text/css" href="CSS Files/indexStyle.css">
	</head>
	<body background="Images/PageStyle/background.jpg">
		
		<!--Container Start-->
		<div id='container'>
		
			<!--Header Part-->
			<div id="header">
				<div id="logo"> <img id="logoImg" src="Images/PageStyle/logo.gif"></div>
				<div id="banner"> <img id="bannerImg" src="Images/PageStyle/Banner.jpg"> </div>
			</div>
			
			<!--Menu Part-->
			<div id="cssmenu"> 
				<ul>
					<li> <a href='index.php'> <span> Home </span> </a> </li>
					<li> <a href='#'> <span> PC </span> </a> </li>
					<li> <a href='#'> <span> XBOX One </span> </a> </li>
					<li> <a href='#'> <span> PS4 </span> </a> </li>
					<li> <a href='#'> <span> Wii U </span> </a> </li>
					<li class='active has-sub' > <a href='#'> <span> Other </span> </a> 
						<ul>
							<li class='has-sub'> <a href='#'> Nintendo </a>
								<ul>
									<li> <a href='#'> GameCube </a> </li>
									<li> <a href='#'> Wii </a> </li>
									<li> <a href='#'> Nintendo 64 </a> </li>
								</ul>
							</li>
							<li class='has-sub'> <a href='#'> Sony Playstation </a>
								<ul>
									<li> <a href='#'> Playstation 2 </a> </li>
									<li> <a href='#'> Playstation 3 </a> </li>
								</ul>
							</li>
							<li class='has-sub'> <a href='#'> XBOX </a>
								<ul>
									<li> <a href='#'> XBOX </a> </li>
									<li> <a href='#'> XBOX 360 </a> </li>
								</ul>
							</li>
						</ul>
					</li>
					<li> <a href='#'> <span> News </span> </a> </li>
					<li> <a href='signIn.php'> <span> Sign In </span> </a> </li>
				</ul>		
			</div>
			
			<!-- Slide show area start-->
			<div id="slideShow">
				<!-- all the slide show is basically a unsorted list list-->
				<ul class="slides">
					<!--Every slide is consisted of an image and radio button-->
					
					<!--1st Image-->
					<input type="radio" name="radio-btn" id="img-1" checked />
					<li class="slide-container">
						<div class="slide">
							<img src="http://wallpapers55.com/wp-content/uploads/2013/07/WoW-Arthas-Wallpapers-HD.jpg" />
						</div>
						<div class="nav">
							<!-- The &#x2039 special character means a single left-pointing angle (the pointer on the slides) -->
							<label for="img-6" class="prev"> &#x2039; </label>
							<label for="img-2" class="next"> &#x203a; </label>
						</div>
					</li>
					
					<!--2nd Image-->
					<input type="radio" name="radio-btn" id="img-2" />
					<li class="slide-container">
						<div class="slide">
							<img src="http://images7.alphacoders.com/324/324431.png" />
						</div>
						<div class="nav">
							<label for="img-1" class="prev">&#x2039;</label>
							<label for="img-3" class="next">&#x203a;</label>
						</div>
					</li>

					<!--3rd Image-->
					<input type="radio" name="radio-btn" id="img-3" />
					<li class="slide-container">
						<div class="slide">
							<img src="http://www.hdwallpapers.in/walls/battlefield_4_china_rising-wide.jpg" />
						</div>
						<div class="nav">
							<label for="img-2" class="prev">&#x2039;</label>
							<label for="img-4" class="next">&#x203a;</label>
						</div>
					</li>

					<!--4th Image-->
					<input type="radio" name="radio-btn" id="img-4" />
					<li class="slide-container">
						<div class="slide">
							<img src="http://www.photolazy.com/wp-content/uploads/2014/03/crysis-3-bow-hd-wallpaper-1920x1080px-crysis-3-wallpaper-hd-games-photo-crysis-3-wallpaper.jpg" />
						</div>
						<div class="nav">
							<label for="img-3" class="prev">&#x2039;</label>
							<label for="img-5" class="next">&#x203a;</label>
						</div>
					</li>

					<!--5th Image-->
					<input type="radio" name="radio-btn" id="img-5" />
					<li class="slide-container">
						<div class="slide">
							<img src="http://i57.tinypic.com/30x8wus.jpg" />
						</div>
						<div class="nav">
							<label for="img-4" class="prev">&#x2039;</label>
							<label for="img-6" class="next">&#x203a;</label>
						</div>
					</li>

					<!--6th Image-->
					<input type="radio" name="radio-btn" id="img-6" />
					<li class="slide-container">
						<div class="slide">
							<img src="http://www.wallpaperseries.com/files/wallpapers-1002/World-of-Warcraft-Warlords-of-Draenor-HD-Wallpaper-3306.jpg" />
						</div>
						<div class="nav">
							<label for="img-5" class="prev">&#x2039;</label>
							<label for="img-1" class="next">&#x203a;</label>
						</div>
					</li>

					<!--List Index for all the dots at the slide show-->
					<li class="nav-dots">
						<!--The label tag defines the a label for an input type object-->
						<!--The for attribute of a label tag specifies which element a label tag is bound to-->
						<label for="img-1" class="nav-dot" id="img-dot-1"></label>
						<label for="img-2" class="nav-dot" id="img-dot-2"></label>
						<label for="img-3" class="nav-dot" id="img-dot-3"></label>
						<label for="img-4" class="nav-dot" id="img-dot-4"></label>
						<label for="img-5" class="nav-dot" id="img-dot-5"></label>
						<label for="img-6" class="nav-dot" id="img-dot-6"></label>
					</li>
				</ul>
			</div> <!-- Slide Show End -->

			<!--Conent Area with the main and the right column-->
			<div id="content_area">
				<div id="main_content">
					<p>
					Example Text : <br /> <br />
					IE9, Firefox, Chrome, Opera, and Safari use the property opacity for transparency. The opacity property can take a value from 0.0 - 1.0. A lower value makes the element more transparent.
					IE8 and earlier use filter:alpha(opacity=x). The x can take a value from 0 - 100. A lower value makes the element more transparent.
					The first CSS block is similar to the code in Example 1. In addition, we have added what should happen when a user hover over one of the images. In this case we want the image to NOT be transparent when the user hover over it.
					The CSS for this is: opacity=1.
					IE8 and earlier: filter:alpha(opacity=100).
					When the mouse pointer moves away from the image, the image will be transparent again.
					</p>
				</div>
				
				<div id="right_col">
					<div id="rightColWrapper">
					<div id="login">
						<form action="PHP_Scripts/logIn.php" method="POST" enctype="multipart/form-data">
							<b>Unlock the Vault</b> <br />
							<br>
							Username:&nbsp;<input type="text" name="username"><br /><br />
							Password:&nbsp;&nbsp;<input type="password" name="password"><br /><br />
							<input type="checkbox" name="remember" /> &nbsp; Keep me logged in<br /><br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="Log In" name="submit" />
						</form>
					</div>
					
					<div id="favorites">
						<b> Favorites <b> <br />
					</div>
					</div>
				</div>
			</div>
			
			<!--Footer Part-->
			<div id="footer"> Footer </div>
		</div>
	</body>
</html>
