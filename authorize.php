<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);
if ($method == 'post') {

  $location = $_POST['url'];
  $location .= '?client_id=' . $_POST['client_id'];
  $location .= '&response_type=' . $_POST['response_type'];
  $location .= '&redirect_uri=' . urlencode($_POST['redirect_uri']);
  $location .= '&scope=' . implode('+', array_values($_POST['scope']));
  $location .= '&auto=1&id=3';

  header('Location: ' . $location, true, 302);
  die;
}

$url = $_SERVER['REQUEST_URI'];

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
      .item input[type="text"] { width: 500px;}
    </style>
  </head>
  <body>
    <div id="wrapper">
      <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
        <div class="item">
          <label class="key">URL:</label>
          <div class="value">
            <input type="text" name="url" value="http://localhost:3000/oauth/authorize" />
          </div>
        </div>

        <div class="item">
          <label class="key">client_id:</label>
          <div class="value">
            <input type="text" name="client_id" value="" />
          </div>
        </div>

        <div class="item">
          <label class="key">redirect_uri:</label>
          <div class="value">
            <input type="text" name="redirect_uri" value="http://api/callback" />
          </div>
        </div>

        <div class="item">
          <label class="key">response_type:</label>
          <div class="value">
            code
            <input type="hidden" name="response_type" value="code" />
          </div>
        </div>

        <div class="item">
          <label class="key">scope:</label>
          <div class="value">
            <div><input type="checkbox" checked="checked" name="scope[]" value="readonly" /> readonly</div>
            <div><input type="checkbox" checked="checked" name="scope[]" value="write" /> write</div>
          </div>
        </div>

        <input type="submit" value="Send to OAuth server" />
      </form>
    </div>
  </body>
</html>