<?php

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$parameters = array();
foreach (explode('&', $_SERVER['QUERY_STRING']) as $parameter) {
  if (strpos($parameter, '=') !== false) {
    list($key, $value) = explode('=', $parameter);
    $parameters[$key] = $value;
  }
}

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <style>
      body { padding: 0; margin: 0; width: 100%; height: 100%;}
      #wrapper { margin: 50px auto; padding: 20px; border: 1px solid black; width: 800px;}
      .item { clear: both; margin-bottom: 20px;}
      .item .key { float: left; width: 200px; }
      .item .value { margin-left: 200px; font-family: monospace, Tahoma; font-size: 80%; word-wrap: break-word; white-space: normal; }
    </style>
  </head>
  <body>
    <div id="wrapper">
      <div class="item">
        <span class="key">URL:</span>
        <div class="value"><?php print $url; ?></div>
      </div>

      <div class="item">
        <span class="key">Request Method:</span>
        <div class="value"><?php print $method; ?></div>
      </div>

      <div class="item">
        <span class="key">Parameters:</span>
        <div class="value">
          <?php foreach ($parameters as $key => $value) : ?>
          <div><?php print $key . ': ' . $value; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>
