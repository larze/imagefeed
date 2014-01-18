<?php     defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<div class="instagram-container">
<?php   
	$width = "162";
	if($tinyPhoto == 1) {
		$tinyPhotoWidth="40";
	} else {
		$tinyPhotoWidth = $width;
	}
	$image_amount = $imageAmount;
	$data = $controller->getFeed($tag, $clientID, $accessToken, $feedType, $userID);

	echo "<ul class='group insta-cont-inner'>";

		foreach($data as $item) {
			echo "<li class='insta-block'>";
				$caption = $item->caption->text;
			if($item->type == "image") {
				echo "<a href='".$item->images->standard_resolution->url."' rel='prettyPhoto[pp_gal]' title='".$caption."'>";
				echo "<img class='".$classname.$imgnmbr." instaimg' src='".$item->images->thumbnail->url."' width='".$tinyPhotoWidth."'/></a>";
			}
			
			if($item->type == "video") {
				echo '<a href="'.$item->link.'embed/?iframe=true&width=480&height=480" rel="prettyPhoto[pp_gal]" title="'.$caption.'">';
				echo "<img class='".$classname.$imgnmbr." instaimg' src='".$item->images->thumbnail->url."' width='".$tinyPhotoWidth."'/></a>";
				echo "</a>";
			}
			
			echo "</li>";
			
			$imgnmbr++;
			$image_amount--;
			if($image_amount == 0) { break; }
		}

		echo "</ul>";

?> 

</div>
