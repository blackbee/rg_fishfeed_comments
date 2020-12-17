<?php

// Palettes
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['selector'][] = 'rateReminder';
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] .= ';{rateReminder_legend},rateReminder';

// Subpalettes
$GLOBALS['TL_DCA']['tl_iso_config']['subpalettes']['rateReminder'] = 'rateReminderState';

// Fields
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['rateReminder'] = [
    'label'                     => &$GLOBALS['TL_LANG']['tl_iso_config']['rateReminder'],
    'exclude'                   => true,
    'inputType'                 => 'checkbox',
    'eval'                      => array('submitOnChange'=>true, 'doNotCopy'=>true, 'tl_class'=>'clr'),
    'sql'                       => "char(1) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['rateReminderState'] = [
    'label'                     => &$GLOBALS['TL_LANG']['tl_iso_config']['rateReminderState'],
    'exclude'                   => true,
    'inputType'                 => 'select',
    'foreignKey'                => \Isotope\Model\OrderStatus::getTable().'.name',
    'options_callback'          => array('\Isotope\Backend', 'getOrderStatus'),
    'eval'                      => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                       => "int(10) unsigned NOT NULL default '0'",
    'relation'                  => array('type'=>'hasOne', 'load'=>'lazy'),
];