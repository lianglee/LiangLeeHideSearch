<?php
/* LiangLeeHideSearch
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Hide Search
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
 
/**
* Get Version
**/
$plug_ver = LiangLee_version('LiangLeeHideSearch');
$plug_rel = LiangLee_release('LiangLeeHideSearch');
$liang_lee_copytights = elgg_echo('lianglee:copyr:12');
$liang_hidesearch_text = elgg_echo('liang:lee:hidesearch:text:1');
$lianglee_hidesearch_note = elgg_echo('liang:lee:hidesearch:text:4');
$liang_lee_hidesearch = elgg_view('input/dropdown', array(
    'name' =>
    'params[liang_lee_hidesearch]',
    'value' => $vars['entity']->liang_lee_hidesearch,
    'options_values' => array(1 => elgg_echo('liang:lee:hidesearch:text:2'), 0 => elgg_echo('liang:lee:hidesearch:text:3'))));	
	
$settings .= <<<__HTML
			<div class='elgg-module-inline'>
				<div class='elgg-head'>
				<h3>$liang_hidesearch_text</h3>
				</div>		
	  <p><i>$lianglee_hidesearch_note</i><br/>$liang_lee_hidesearch</p><br />
		<hr>
		<p><i>$liang_lee_copytights</i>
		<p>Release: $plug_rel</p>
		<p>Version: $plug_ver</p>
</div>
    
</div>
__HTML;
echo $settings1,$settings;
?>