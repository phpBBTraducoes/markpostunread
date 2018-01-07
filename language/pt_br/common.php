<?php

/**
 *
 * @package phpBB Extension - Mark Post Unread
 * @copyright (c) 2015 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.1.1] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Viewtopic
	'MARKPOSTUNREAD_MARK_UNREAD'			=> 'Marcar post não lido',
	'MARKPOSTUNREAD_MARKED_UNREAD'			=> 'Post marcado não lido com sucesso.',

	/*
	 * %1$s => success message
	 * %2$s => link for returning to the last visited forum
	 * %3$s => link for returning to the index page
	 */
	'MARKPOSTUNREAD_REDIRECT_FORMAT'		=> '%1$s<br /><br />%2$s<br /><br />%3$s',

	// Navbar
	'MARKPOSTUNREAD_UNREAD_NUM_MAX'			=> 'Posts não lidos em mais de %1$d tópicos',
	'MARKPOSTUNREAD_UNREAD_NUM'				=> array(
		0 => 'Sem posts não lidos',
		1 => 'Posts não lidos em %1$d tópico',
		2 => 'Posts não lidos %1$d tópicos',
	),
));
