<?php

use \Blockify\Block;
use \Blockify\Element;

$block->openTag('li');

if(isset($block->model['url'])) {
  echo new Element('a', $block->model['name'], [
    'href' => $block->model['url']
  ]);
} else {
  echo new Element('span', $block->model['name']);
}

echo $block->content();

$block->closeTag();
