<?php

/**
 * polls extension for Contao Open Source CMS
 *
 * Copyright (C) 2013 Codefog
 *
 * @package polls
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

use Magmell\Contao\Polls\ContentPoll;
use Magmell\Contao\Polls\ModulePoll;
use Magmell\Contao\Polls\ModulePollList;
use Magmell\Contao\Polls\PollModel;
use Magmell\Contao\Polls\PollOptionModel;
use Magmell\Contao\Polls\PollVotesModel;


/**
 * Extension version
 */
@define('POLLS_VERSION', '1.4');
@define('POLLS_BUILD', '0');


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 4, array
(
	'polls' => array
	(
		'tables' => array('tl_poll', 'tl_poll_option', 'tl_poll_votes'),
		'icon'   => 'bundles/contaopolls/icon.png',
		'reset'  => array('tl_poll_option', 'resetPoll')
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'polls' => array
	(
		'poll'     => ModulePoll::class,
		'polllist' => ModulePollList::class
	)
));


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['poll'] = ContentPoll::class;


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_poll']        = PollModel::class;
$GLOBALS['TL_MODELS']['tl_poll_option'] = PollOptionModel::class;
$GLOBALS['TL_MODELS']['tl_poll_votes']  = PollVotesModel::class;
