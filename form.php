<?php     defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<?php     echo '<link rel="stylesheet" type="text/css" href="/blocks/larze_insta_tag_block/view.css" />'; ?>
<div class="ccm-ui insta-tag-ui">
	<h3><?php     echo t('Imagefeed for Instagram block'); ?></h3>
  <br />
  <?php     echo '<label for="clientID" id="clientIDLabel">';
           echo t('ClientID:');
           echo '</label>';
           echo '<br />';
  ?>
  <?php     echo $form->text('clientID', $clientID) ?>
  <p><a href="https://www.concrete5.org/marketplace/addons/instatag/documentation/" target="_blank">Click here to learn how to get the ClientID</a></p>
  <hr />
  <?php     echo $form->label('feedType', t('Please choose which type of feed to display')) ?>
  <?php     echo $form->select('feedType', array('nothing' => '--', 'h' => 'Pictures based on Hashtag', 'm' => 'My Pictures', 'f' => 'My Friends Pictures'), $feedType) ?>
  <br />
  <br />
  <?php     echo '<label for="accessToken" class="accessTokenIDLabel">';
           echo t('AccessToken:');
           echo '</label>';
           echo '<br />';
  ?>
  <?php     echo $form->text('accessToken', $accessToken) ?>
  <p class="accessTokenIDLabel"><a href="http://insta-tag.com/index.php/oauth/" target="_blank">Click here to get your Access Token</a></p>
  <hr class="accessTokenIDLabel"/>
  <?php     echo '<label for="userID" class="userIDLabel">';
           echo t('UserID:');
           echo '</label>';
           echo '<br />';
  ?>
  <?php     echo $form->text('userID', $userID) ?>
  <p class="userIDLabel"><a href="http://insta-tag.com/index.php/oauth/" target="_blank">Click here to get your UserID</a></p>
  <hr class="userIDLabel"/>
  <?php     echo '<label for="tag" class="tagLabel">';
           echo t('Tag (Do not include # sign:)');
           echo '</label>';
           echo '<br />';
  ?>
  <?php     echo $form->text('tag', $tag) ?>
  <hr class="tagLabel"/>
  <?php     echo $form->label('imageAmount', t('Number of Photos to Display: (Max of 20) ')) ?>
  <?php     echo $form->text('imageAmount', $imageAmount) ?>
  <hr />
  <?php     echo $form->label('tinyPhoto', t('Tiny Photo Mode: ')) ?>
  <br />
  <p>Makes your photos...tiny!</p>
  <?php     echo $form->checkbox('tinyPhoto', '1', $tinyPhoto) ?>  
</div>