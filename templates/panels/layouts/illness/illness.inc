<?php

// Plugin definition
$plugin = array(
  'title' => t('Illness layout'),
  'category' => t('Medcity'),
  'icon' => 'illness.png',
  'theme' => 'panels_illness',
  'css' => 'illness.css',
  'regions' => array(
    'top' => t('Top region'),
    'middle' => t('Middle fullwidth'),
    'bottom' => t('Bottom'),
  ),
);
