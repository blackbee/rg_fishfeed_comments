<?php

// Palettes
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{rateReminder_legend},rateReminder,rateReminderState';

// Fields
$GLOBALS['TL_DCA']['tl_settings']['fields']['rateReminder'] = [
    'label'                     => &$GLOBALS['TL_LANG']['tl_settings']['rateReminder'],
    'exclude'                   => true,
    'inputType'                 => 'checkbox',
    'eval'                      => array('submitOnChange'=>true, 'doNotCopy'=>true, 'tl_class'=>'clr'),
];
$GLOBALS['TL_DCA']['tl_settings']['fields']['rateReminderState'] = [
    'label'                     => &$GLOBALS['TL_LANG']['tl_settings']['rateReminderState'],
    'exclude'                   => true,
    'inputType'                 => 'select',
    'foreignKey'                => \Isotope\Model\OrderStatus::getTable().'.name',
    'options_callback'          => array('\Isotope\Backend', 'getOrderStatus'),
    'eval'                      => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
    'relation'                  => array('type'=>'hasOne', 'load'=>'lazy'),
];