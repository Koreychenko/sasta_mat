<?php

// Plugin definition
$plugin = array(
  'title' => t('Webform layout'),
  'category' => t('Medcity'),
  'icon' => 'webform.png',
  'theme' => 'panels_webform',
  'css' => 'webform.css',
  'regions' => array(
    'top' => t('Top region'),
    'middle' => t('Middle fullwidth'),
  ),
);
