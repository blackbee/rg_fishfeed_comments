<?php

// Isotope Hooks
$GLOBALS['ISO_HOOKS']['getOrderNotificationTokens'][] = ['IsotopeComments\Hooks', 'getOrderNotificationTokens'];
$GLOBALS['ISO_HOOKS']['preOrderStatusUpdate'][] = ['IsotopeComments\Hooks', 'preOrderStatusUpdate'];

// Cron Jobs
/* DISABELED $GLOBALS['TL_CRON']['hourly'][] = array('IsotopeComments\Automator', 'sendRateReminder'); */