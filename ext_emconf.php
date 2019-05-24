<?php

$EM_CONF[$_EXTKEY] = array(
        'title' => 'newsbackground',
        'description' => 'Set news teaser background',
        'category' => 'plugin',
        'author' => 'Erik de Kuijper',
        'author_email' => '',
        'state' => 'alpha',
        'uploadfolder' => FALSE,
        'createDirs' => '',
        'clearCacheOnLoad' => TRUE,
        'version' => '1.0.0',
        'constraints' => array(
                'depends' => array(
                        'typo3' => '',
                        'news' => '',
                ),
                'conflicts' => array(),
                'suggests' => array(),
        ),
);