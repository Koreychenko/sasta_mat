<?php

// Plugin definition
$plugin = array(
  'title' => t('Department layout'),
  'category' => t('Medcity'),
  'icon' => 'department.png',
  'theme' => 'panels_department',
  'css' => 'department.css',
  'regions' => array(
    'top_image' => t('Top Image'),
    'title' => t('Title'),
    'boss' => t('Boss info'),
    'left' => t('Left Column'),
    'right' => t('Right Column'),
    'middle_fullwidth' => t('Middle Fullwidth'),
    'schedule' => t('Schedule'),
    'prices' => t('Prices'),
    'peoples' => t('Peoples'),
  ),
);
