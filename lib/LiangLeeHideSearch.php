<?php
/* LiangLeeHideSearch
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Hide Search
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeSearch.php
 */

function LiangLeeHideSearch_lib(){
if (!elgg_is_logged_in()){
if(elgg_get_plugin_setting("liang_lee_hidesearch", "LiangLeeHideSearch") == 1){
elgg_unextend_view('page/elements/header', 'search/header');
}if(elgg_get_plugin_setting("liang_lee_hidesearch", "LiangLeeHideSearch") == 0){
$return = 'Null';}}}
