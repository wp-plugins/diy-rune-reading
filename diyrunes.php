<?php
/*
Plugin Name: DIY Runes
Plugin URI: http://diydiscovery.com/runes-widget/
Description: A Complete Rune Reading of Past Present Future
Version: 1.0
Author: DIYDiscovery
Author URI: http://diydiscovery.com
License: GPL2
*/
function diyrunes_widget() {
	
	echo "<script src='http://diydiscovery.com/Runes-Widget/AC_RunActiveContent.js' type='text/javascript'></script>";
 


 

 
echo "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0' width='300' height='278'>";
 
echo "<param name='movie' value='http://diydiscovery.com/Runes-Widget/free-runes.swf'/>";
echo "<param name='quality' value='high' />";
 
echo  "<embed src='http://diydiscovery.com/Runes-Widget/free-runes.swf' quality='high' pluginspage='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width='300' height='278'></embed>";
 
echo "</object>";
echo"<center>more Free <a href = \"http://www.diydiscovery.com\">Runes Tarot IChing Readings</a></center><br/>";
echo "\n";
echo "\n";

}
 
function init_diyrunes(){
	register_sidebar_widget("DIY Runes", "diyrunes_widget");     
}
 
add_action("plugins_loaded", "init_diyrunes");


 
?>