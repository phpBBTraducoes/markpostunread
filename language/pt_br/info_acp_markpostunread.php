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
	'MARKPOSTUNREAD_TITLE'						=> 'Marcar post não lido',
	'MARKPOSTUNREAD_CONFIG'						=> 'Configuração',
	'MARKPOSTUNREAD_CONFIG_UPDATED'				=> 'Extensão <strong>Marcar post não lido </strong><br />» Configuração atualizada',

	'MARKPOSTUNREAD_GROUP_MARKPOSTUNREAD'		=> '«Marcar post não lido» botão em viewtopic',
	'MARKPOSTUNREAD_ENABLED'					=> '«Marcar post não lido» botão',
	'MARKPOSTUNREAD_ENABLED_EXP'				=> 'Importante: <strong>Ativar a marcação do tópico lado do servidor</strong> é necessário definir como <strong>Sim</strong> nas configurações de carga.',
	'MARKPOSTUNREAD_ENABLE_FAILED'				=> 'A ativação do botão "Marcar post não lido" falhou porque <strong>Ativar a marcação do tópico do lado do servidor</strong> está desativado.',
	'MARKPOSTUNREAD_MAX_DAYS'					=> 'Máxima idade dos posts, em dias',
	'MARKPOSTUNREAD_MAX_DAYS_EXP'				=> 'Quando um usuário marca um post não lido, uma linha na tabela topic_track é inserida para cada tópico já lido no fórum relevante com um last_post_time após o post_time do post estar marcado como não lido. Em um grande fórum com um grande número de posts, é concebível que uma grande quantidade de armazenamento de banco de dados possa ser usado para esse recurso (por exemplo, se muitos de seus usuários marcam posts realmente antigos não lidos), bem como desacelerar fóruns com grandes quantidades de tópicos. Com esta opção, você pode limitar o recurso a posts antigos que tenha um número especificado em dias de idade. Digite 0 para permitir que seus usuários marquem os posts <strong>todos</strong> não lidos.',

	'MARKPOSTUNREAD_GROUP_UNREADSEARCHLINK'		=> '«Posts não lidos» link de pesquisa na barra de navegação',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK'			=> 'Comportamento do link de pesquisa «Posts não lidos» na barra de navegação',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_EXP'		=> 'As opções 2 e 3 afetam apenas usuários registrados. Usuários que não estão logados sempre vêem «Posts não lidos».',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT1'		=> '1) Sempre exibir «Posts não lidos» (phpBB default)',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2'		=> '2) Exibir «Posts não lidos» / «Sem posts não lidos»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2_EXP'	=> 'Pode afetar ligeiramente o desempenho.',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3'		=> '3) Exibir «Posts não lidos em X tópicos» / «Sem posts não lidos»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3_EXP'	=> 'Pode afetar perceptivamente o desempenho.',
));
