<?php 
/**
*-------------------------------------------------------------------------------
* DT Facebook Page - Joomla module to embed easily their facebook page. by detalhar - www.detalharweb.com.br
*-------------------------------------------------------------------------------
* @package DT Facebook Page
* @version 1.2.0
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

$doc = JFactory::getDocument();
$lang = JFactory::getLanguage();
$langTag = $lang->getTag();
$langTag = str_replace('-', '_', $langTag);
$url = $params->get('FBPageUrl');
$faceID = $params->get('appID');
$width = (int)$params->get('width', 340);
$height = (int)$params->get('height');
$showFriendsFace = $params->get('showFriendsFace', true);
$smallHeader = $params->get('smallHeader', false);
$hideCoverPhoto = $params->get('hideCoverPhoto', false);
$showPagePosts = $params->get('showPagePosts', false);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_dt_facebook_page', $params->get('layout','default'));