
<?php



$GLOBALS['TL_DCA']['tl_comments']['fields']['sterne'] = [

    'label'                 => &$GLOBALS['TL_LANG']['tl_comments']['sterne'],
    'exclude'               => true,
    'inputType'             => 'radio',
    'options'               => array(1 => '1 Stern',2 => '2 Sterne',3 => '3 Sterne',4 => '4 Sterne', 5 => '5 Sterne'),
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                  => ['tl_class'=>'w100'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];



$GLOBALS['TL_DCA']['tl_comments']['fields']['idprodukt'] = [
	'label'                 => &$GLOBALS['TL_LANG']['tl_comments']['idprodukt'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => ['maxlength'=>10, 'rgxp'=>'digit', 'tl_class'=>'w100'],
    'sql'                   => "int(10) unsigned NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_comments']['fields']['headline'] = [
    'label'                 => "Überschrift",
    'exclude'               => true,
    'sorting'               => true,
    'inputType'             => 'text',
    'eval'                  => ['maxlength'=>255, 'tl_class'=>'w100'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_comments']['fields']['nickname'] = [

    'label'                 => &$GLOBALS['TL_LANG']['tl_comments']['nickname'],
    'exclude'               => true,
    'inputType'             => 'text',
    'eval'                  => ['tl_class'=>'w100'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];



$GLOBALS['TL_DCA']['tl_comments']['palettes']['default'] = '{author_legend},name,email,website;{comment_legend},sterne,nickname,idprodukt,headline,comment;{reply_legend},addReply;{publish_legend},published';

