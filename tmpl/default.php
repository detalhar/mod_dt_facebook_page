<?php 
/**
*-------------------------------------------------------------------------------
* DT Facebook Page - Joomla module to embed easily their facebook page. by detalhar - www.detalharweb.com.br
*-------------------------------------------------------------------------------
* @package DT Facebook Page
* @version 0.1.0
* @author detalhar http://www.detalharweb.com.br
* @copyright (C) 2015 detalhar. All Rights Reserved
* @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html or see LICENSE.txt
*
* DT Facebook Page is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
**/

defined('_JEXEC') or die('Access Restricted');

?>
<?php if($url && $faceID){ ?>
<?php switch ($height) {
	case '0':
		echo "<div class=\"fb-page\" data-href=\"$url\" data-width=\"$width\" data-small-header=\"$smallHeader\" data-adapt-container-width=\"true\" data-hide-cover=\"$hideCoverPhoto\" data-show-facepile=\"$showFriendsFace\" data-show-posts=\"$showPagePosts\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"https://www.facebook.com/facebook\"><a href=\"https://www.facebook.com/facebook\">Facebook</a></blockquote></div></div>";
		break;
	
	default:
		echo "<div class=\"fb-page\" data-href=\"$url\" data-width=\"$width\" data-height=\"$height\" data-small-header=\"$smallHeader\" data-adapt-container-width=\"true\" data-hide-cover=\"$hideCoverPhoto\" data-show-facepile=\"$showFriendsFace\" data-show-posts=\"$showPagePosts\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"https://www.facebook.com/facebook\"><a href=\"https://www.facebook.com/facebook\">Facebook</a></blockquote></div></div>";
		break;
}

?>
<div id="fb-root"></div>;
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $faceID ?>',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/<?php echo $langTag ?>/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php } else { ?>
<div><p><?php echo JTEXT::_('MOD_DT_FACEBOOK_PAGE_ERROR') ?></p></div>
<?php } ?>