<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_phoenixtrademarketlist
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @copyright   Copyright (C) 2017 -      Jan Holbo Rasmussen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * PhoenixTradeMarketList Model
 *
 * @since  0.0.1
 */
class PhoenixTradeMarketListModelPhoenixTradeMarketList extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Phoenix BSE Trade Market List!';
		}

		return $this->message;
	}
}
