<?php

/**
 * Namespace
 */
namespace IsotopeComments;

use Isotope\Interfaces\IsotopePurchasableCollection;
use Isotope\Isotope;
use Isotope\Model\Address;
use Isotope\Model\Document;
use Isotope\Model\OrderStatus;
use Isotope\Model\ProductCollection;

/**
 * Class Hooks
 */
class Hooks extends Isotope\Model\ProductCollection  implements Isotope\Interfaces\IsotopePurchasableCollection
{   
    /**
     * __construct()
     * 
     * Konstrukt-Klasse
     */
    public function __construct()
    {}
    
    
    /**
     * Hook - getOrderNotificationTokens
     * 
     * @param Hooks $this
     * @param type $this
     * @param array $arrTokens
     * @return array
     */
    public function getOrderNotificationTokens($this, $arrTokens) : array
    {
        if($GLOBALS['TL_CONFIG']['rateReminder'] == 1 && $this->order_status == $GLOBALS['TL_CONFIG']['rateReminderState'])
        {
            /** @var Template|object $objTemplate */
            $objTemplate                 = new Template('iso_collection_rateReminder');
            $this->addToTemplate(
                $objTemplate
            );

            $objTemplate->isNotification = true;
            $arrTokens['cart_html'] = \Controller::replaceInsertTags($objTemplate->parse(), false);
            $objTemplate->textOnly  = true;
            $arrTokens['cart_text'] = strip_tags(\Controller::replaceInsertTags($objTemplate->parse(), true));
        }
                
        return $arrTokens;
    }
}