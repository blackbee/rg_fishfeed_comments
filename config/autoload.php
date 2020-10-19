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
    'Contao\Comments'                                                       => 'system/modules/zComments/classes/Comments.php',
    
    // Models
    'Contao\CommentsModel'                                                  => 'system/modules/zComments/models/CommentsModel.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'com_default.html5'                                                     => 'system/modules/zComments/templates/comments',
    'ce_comments.html5'                                                     => 'system/modules/zComments/templates/elements',
    'mod_comment_form.html5'                                                => 'system/modules/zComments/templates/modules',
    'mod_comments.html5'                                                    => 'system/modules/zComments/templates/modules',
));