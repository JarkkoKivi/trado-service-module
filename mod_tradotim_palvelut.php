<?php
/**
 * Hello World! Module Entry Point
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

/**
  * This retrieves the lang parameter we stored earlier. Note the second part
  * which states to use the default value of 1 if the parameter cannot be
  * retrieved for some reason
**/
/* $language = $params->get('lang', '1');
$hello    = modHelloWorldHelper::getHello( $language ); */


require JModuleHelper::getLayoutPath('mod_tradotim_palvelut');

$document = JFactory::getDocument();
$document->addStyleSheet(Juri::base() . 'modules/mod_tradotim_palvelut/style.css');
$document->addScript(Juri::base() . 'modules/mod_tradotim_palvelut/tradotim-services.js');

$language = $params->get('laji', '1');
$hello    = modTradotimPalvelutHelper::getHello( $language );
?>
