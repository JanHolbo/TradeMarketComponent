<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_trademarketlist
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @copyright   Copyright (C) 2017 -      Jan Holbo Rasmussen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the Trade Market List Component
 *
 * @since  0.0.1
 */
class TradeMarketListViewTradeMarketList extends JViewLegacy
{
	/**
	 * Display the Trade Market List view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Phoenix BSE Trade Market List';

		// Display the view
		parent::display($tpl);
	}
}
