#!/usr/bin/env php
<?php

  require_once __DIR__ . '/../vendor/autoload.php';

  $request = new \Fiv\Parser\Request();
  $cacheAdapter = new \Fiv\Parser\Cache\FileCache();

  $request->setCacheAdapter($cacheAdapter);
  $grabber = new \Fiv\Parser\Grabber($request);


  # real request to server
  $page = $request->get("https://github.com/twbs/bootstrap");

  # get from cache
  $cachePage = $request->get("https://github.com/twbs/bootstrap");


  