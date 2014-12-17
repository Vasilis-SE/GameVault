<?php
	require("game.php");
	
	//Array with all the names of the components that must be filled
	//in the form
	$requiredFields = array('gameTitle', 'minRequirements', 'maxRequirements', 'description', 'gamePlatform', 'gameCategory', 'url');
	
	//sets an error flag and passes all the above array checking if
	//any of the fields are empty.
	$error = false;
	foreach($requiredFields as $field) {
		if (empty($_POST[$field])) {
			$error = true;
		}
	}	
	
	if($error){
		die("You must first fill all the form fields");
	}
	else{
		$gameTitle = $_POST['gameTitle'];
		$minGameReq = $_POST['minRequirements'];
		$maxGameReq = $_POST['maxRequirements'];
		$gameDescr = $_POST['description'];
		$gamePlat = $_POST['gamePlatform'];
		$gameCateg = $_POST['gameCategory'];
		$videoURL = $_POST['url'];
		
		$file = $_FILES['gameImage'];
		$file_name = $file['name'];
		
		//checks if the 'file' field is not empty
		if($file_name != ""){ 
			$gameObj = new game();
			$gameObj->setDataMembers($gameTitle, $minGameReq, $maxGameReq, $gameDescr, $file_name, 
					$gamePlat, $gameCateg, $videoURL);
					
			$result = $gameObj->gameDataIntegrity();
			if($result == ""){
				$file_size = $file['size'];
				
				//Works out the file extension
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
				
				$result = $gameObj->gameImageIntegrity($file, $file_size, $file_ext);
				if($result == ""){
					header( "refresh:5;url=../adminSubmitForm.php" );
					echo $result."<br /> You will be redirected back to the page ...";	
				}
				else{
				
				}
				
			}
			else{
				header( "refresh:5;url=../adminSubmitForm.php" );
				echo $result."<br /> You will be redirected back to the page ...";	;
			}
		}
		else{
			header( "refresh:3;url=../adminSubmitForm.php" );
			echo "You didn't select any images<br /> You will be redirected back to the page ...";	;
		}
	
	}
	
	
	
	
?>