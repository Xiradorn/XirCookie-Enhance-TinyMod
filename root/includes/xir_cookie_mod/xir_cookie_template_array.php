<?php
/**
* @author Sir Xiradorn - http://xiradorn.it
*
* @package XirCookie Enhance Mod template vars
* @version 1.0.0
* @copyright (c) 2015 Xiradorn Lab
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
 $template->assign_vars(array('S_XIR_COOKIE_MOD'=>true,'L_X_IMMAGINE'=>$_xir_lang['X_IMMAGINE'],'S_XIR_COOKIE_CHECK'=>($xir_cookie_check==true)?true:false,'A_XIR_COOKIE'=>append_sid("{$phpbb_root_path}index.$phpEx"),'U_XIR_INDEX'=>append_sid("{$phpbb_root_path}index.$phpEx"),'U_XIR_COOKIE_PAGE'=>append_sid("{$phpbb_root_path}xir_cookie.$phpEx"),'X_AUTO_LANG_STRING'=>$xir_autolang['default'],'X_AUTO_LANG_FLAG'=>$xir_autolang['list_flags'],'X_AUTO_LANG_FLAG_BIG'=>$xir_autolang['list_flags_big_str'],'V_XIR_COOKIE_ACCEPT'=>'Accetto','V_XIR_COOKIE_REFUSE'=>'Rifiuto','L_X_MENU_LATERALE'=>$_xir_lang['X_MENU_LATERALE'],'L_X_MENU_LATERALE_ALTERNATIVO'=>$_xir_lang['X_MENU_LATERALE_ALTERNATIVO'],'L_X_DESKTOP_ONLY'=>$_xir_lang['X_DESKTOP_ONLY'],'L_X_MOBILE_ONLY'=>$_xir_lang['X_MOBILE_ONLY'],'L_X_COOKIE_MSG'=>$_xir_lang['X_COOKIE_MSG'],'L_X_COOKIE_MSG_EXT'=>$_xir_lang['X_COOKIE_MSG_EXT'],'L_X_COOKIE_MSG_EXT_BTN'=>$_xir_lang['X_COOKIE_MSG_EXT_BTN'],'L_X_EURLEX_WIDGET'=>$xir_lex_lang,'L_XIR_COOKIE_PAGE'=>'Xi-Cookie Page','L_XIR_COOKIE_ACCEPT'=>$_xir_lang['XIR_COOKIE_ACCEPT'],'L_XIR_COOKIE_REFUSE'=>$_xir_lang['XIR_COOKIE_REFUSE'],'L_XIR_COOKIE_COPY'=>$_xir_copy['copy'],'L_XIR_COOKIE_COPY_ERROR'=>$_xir_copy['error'],));$template->assign_vars(array('XIF_USER_AVATAR'=>$xif_user_avatar,'XIF_USER_NAME'=>$xif_user_info['xif_user_name'],'XIF_USER_RANK'=>$xif_user_info['xif_user_rank'],));?>