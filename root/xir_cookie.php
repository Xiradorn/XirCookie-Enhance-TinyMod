<?php
/**
* @author Sir Xiradorn - http://xiradorn.it
*
* @package XirCookie Enhance Mod page
* @version 1.00.0000
* @copyright (c) 2015 Xiradorn Lab
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

page_header('Title Here');

$template->set_filenames(array(
    'body' => 'xir_cookie_mod/xir_cookie_page.html',
));

page_footer();

?>