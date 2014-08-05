#!/usr/bin/env php
<?php

  require_once __DIR__ . '/../vendor/autoload.php';


  /**
   * Fetch trending php repositories on github
   */

  $grabber = new \Fiv\Parser\Grabber();
  $page = $grabber->getHtml('https://github.com/trending?l=php');

  $repositories = $page->value('//*[@class="repository-name"]')->getItems();

  print_r($repositories);
