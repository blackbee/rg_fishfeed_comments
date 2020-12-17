<?php

// Isotope Hooks
$GLOBALS['ISO_HOOKS']['getOrderNotificationTokens'][] = ['IsotopeComments\Hooks', 'getOrderNotificationTokens'];

// Cron Jobs
/* DISABELED $GLOBALS['TL_CRON']['hourly'][] = array('IsotopeComments\Automator', 'sendRateReminder'); */