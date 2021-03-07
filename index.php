<?php

Kirby::plugin('preya/kirby-accordion-block', [
  'blueprints' => [
    'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml'
  ],
  'snippets' => [
    'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php'
  ]
]);