<?php

/*
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2020 Pluus Design GmbH
 *
 * @link       https://www.pluus-design.de
 */

namespace IsotopeComments;

use Isotope\Model\Config;
use Isotope\Model\ProductCollection;
use Isotope\Model\ProductCollection\Cart;
use Isotope\Model\ProductCollection\Order;

class Automator extends \Contao\Controller
{
    /**
     * Make the constructor public.
     */
    public function __construct()
    {
        parent::__construct();
    }

    
    /**
     * Remove orders that have not been completed for a given number of days
     */
    public function sendRateReminder()
    {
        $rateReminderTime = implode(' ', unserialize($GLOBALS['TL_CONFIG']['rateReminderTime']));
        $time = mktime($rateReminderTime);
        
        $t = Order::getTable();
        $objOrders = Order::findBy(
            [
                "$t.order_status=?",
                "$t.tstamp<?",
            ],
            [
                $GLOBALS['TL_CONFIG']['rateReminderState'],
                $time
            ]
        );
        
        while($objOrders->next())
        {
            
        }

        /*if (($intPurged = $this->deleteOldCollections($objOrders)) > 0) {
            \System::log('Deleted ' . $intPurged . ' incomplete orders', __METHOD__, TL_CRON);
        }*/
    }
}