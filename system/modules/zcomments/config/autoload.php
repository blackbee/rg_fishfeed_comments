<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2020 Leo Feyer
 *
 * @package   zComments
 * @author    Benjamin Geiger
 * @license   Commercial
 * @copyright Benjamin Geiger 2020
 * @file      config/autoload.php
 * @version   1.00.00
 * @date      202010160000
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Contao\Comments'                                                       => 'system/modules/zcomments/classes/Comments.php',
    
    // Models
    'Contao\CommentsModel'                                                  => 'system/modules/zcomments/models/CommentsModel.php',
    
    // Hooks
    'IsotopeComments\Hooks'                                                 => 'system/modules/zcomments/library/IsotopeComments/Hooks.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'com_default.html5'                                                     => 'system/modules/zcomments/templates/comments',
    'ce_comments.html5'                                                     => 'system/modules/zcomments/templates/elements',
    'mod_comment_form.html5'                                                => 'system/modules/zcomments/templates/modules',
    'mod_comments.html5'                                                    => 'system/modules/zcomments/templates/modules',
    'iso_collection_rateReminder'                                           => 'system/modules/zcomments/templates/collection',
));