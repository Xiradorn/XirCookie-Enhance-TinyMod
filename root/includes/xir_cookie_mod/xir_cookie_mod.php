<?php
/**
* @author Sir Xiradorn - http://xiradorn.it
*
* @package XirCookie Enhance Mod initializer
* @version 1.0.0
* @copyright (c) 2015 Xiradorn Lab
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
 $xir_cookie=(isset($_COOKIE['xir_cookie_choise']))?$_COOKIE['xir_cookie_choise']:null;if(!isset($xir_cookie)){$xir_cookie_check=false;}else{$xir_cookie_check=true;}$x_check=request_var('xir_cookie_choise','');if($x_check=='Accetto'){xir_cookie_set($x_check);redirect(append_sid("{$phpbb_root_path}index.$phpEx"));}else if($x_check=='Rifiuto'){header("location: http://google.it");}$xif_user_avatar=xif_user_avatar();$xif_user_info=xif_user_info();$xx=xif_admin_founder_list();$xir_autolang=xir_cookie_autolang();$xir_lex_lang=xir_cookie_eurlex();$_xir_lang=xir_cookie_file_lang($user->lang_path,$xir_autolang['detected_lang']);$_xir_copy=xir_cookie_copyright('3fbb0ccbc10be4e3baa5cc9f45b87d2a');?>