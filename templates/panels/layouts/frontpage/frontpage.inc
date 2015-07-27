<?php

// Plugin definition
$plugin = array(
  'title' => t('Frontpage Layout'),
  'category' => t('Sastasoft'),
  'icon' => 'frontpage.png',
  'theme' => 'panels_frontpage',
  'css' => 'frontpage.css',
  'regions' => array(
    'slider' => t('Top Image'),
    'middle' => t('Middle'),
    'bottom' => t('Bottom'),
  ),
);
