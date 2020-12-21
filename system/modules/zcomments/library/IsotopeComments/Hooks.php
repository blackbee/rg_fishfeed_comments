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
use Isotope\Model\Product;
use Isotope\Model\ProductCollection;
use Isotope\Template;

/**
 * Class Hooks
 */
class Hooks extends \Contao\Frontend
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
    public function getOrderNotificationTokens($objOrder, $arrTokens) : array
    {
        if(\Contao\Config::get('rateReminder') == 1 && $objOrder->isReminderState === true)
        {
            /** @var Template|object $objTemplate */
            $objTemplate = new \FrontendTemplate('iso_collection_rateReminder');
            
            $arrItems = [];
            foreach($objOrder->getItems() AS $objItem)
            {
                $strUrl = '';
                if (($jumpTo = \Contao\PageModel::findByPk($objItem->jumpTo)) !== null) {
                    $objProduct = \Isotope\Model\Product::findBy('id', $objItem->product_id);
                    $strUrl = $objProduct->generateUrl($jumpTo);
                };
                $arrItems[] = ['name' => $objItem->name, 'href' => $strUrl];
            }
            $objTemplate->items = $arrItems;

            $arrTokens['cart_html'] = \Contao\Controller::replaceInsertTags($objTemplate->parse(), false);
            $arrTokens['cart_text'] = strip_tags(\Contao\Controller::replaceInsertTags($objTemplate->parse(), true));
        }
                
        return $arrTokens;
    }
    
    
    /**
     * Hook - preOrderStatusUpdate
     * 
     * Wird verwendet um ein neues Attribut isReminderState zu hinterlegen, welches vom nächsten Hook wieder ausgelesen wird.
     * 
     * @param type $objOrder
     * @param type $objNewStatus
     * @return bool
     */
    public function preOrderStatusUpdate($objOrder, $objNewStatus) : bool
    {
        if($objNewStatus->id == \Contao\Config::get('rateReminderState'))
        {
            $objOrder->isReminderState = true;
        } else {
            $objOrder->isReminderState = false;
        }
        
        return false;
    }
}