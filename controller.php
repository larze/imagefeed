<?php     defined('C5_EXECUTE') or die(_("Access Denied."));
	
class LarzeImagefeedBlockController extends BlockController {
	
	protected $btTable = "btInstaImagefeedBlock";
	protected $btInterfaceWidth = "300";
	protected $btInterfaceHeight = "380";

	public function getBlockTypeName() {
		return t('Imagefeed for Instagram');
	}

	public function getBlockTypeDescription() {
		return t('Display a series of Instagram pictures and video based on a tag.');
	}

	public function getFeed($x, $y, $z, $feedType, $userID) {
		if($feedType == 'h' ) {
			$feed = file_get_contents('https://api.instagram.com/v1/tags/'.$x.'/media/recent?client_id='.$y);
		} else if ($feedType == 'f') {
			$feed = file_get_contents('https://api.instagram.com/v1/users/self/feed/?access_token='.$z);
		} else if ($feedType == 'm') {
			$feed = file_get_contents('https://api.instagram.com/v1/users/'.$userID.'/media/recent?access_token='.$z);
		}

		//concrete5 json helper
		$js = Loader::helper('json');
		$result = $js->decode($feed);
		$data = $result->data;
		return $data;	
	}

	public function save($args) {
	  $args['prettyPhoto'] = empty($args['prettyPhoto']) ? 0 : 1;
	  parent::save($args);
	}

    public function getJavaScriptStrings() {
            return array(
                    'clientID' => t('Please provide a ClientID'),
                    'imageAmount' => t('Please select how many images to display'),
                    'tag' => t('Please enter a valid Hashtag value'),
                    'accessToken' => t('Please enter an access token'),
                    'userID' => t('Please enter a userID'),
                    'nothing' => t('Please choose a type of feed to display')
            );
    }
}

