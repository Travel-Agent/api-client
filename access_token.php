<?php

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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $(function () {
      form = $('#form');
      form.on('submit', function() {
        url = $('input[name=url]').val();
        form.attr('action', url);
      });
    });
    </script>
  </head>
  <body>
    <div id="wrapper">
      <form id="form" method="post" action="http://localhost:3000/oauth/token">
        <div class="item">
          <label class="key">URL:</label>
          <div class="value">
            <input type="text" name="url" value="http://localhost:3000/oauth/token" />
          </div>
        </div>

        <div class="item">
          <label class="key">client_id:</label>
          <div class="value">
            <input type="text" name="client_id" value="" />
          </div>
        </div>

        <div class="item">
          <label class="key">client_secret:</label>
          <div class="value">
            <input type="text" name="client_secret" value="" />
          </div>
        </div>

        <div class="item">
          <label class="key">Code:</label>
          <div class="value">
            <input type="text" name="code" value="" />
          </div>
        </div>

        <div class="item">
          <label class="key">redirect_uri:</label>
          <div class="value">
            <input type="text" name="redirect_uri" value="http://api/callback" />
          </div>
        </div>

        <div class="item">
          <label class="key">grant_type:</label>
          <div class="value">
            <input type="hidden" name="grant_type" value="authorization_code" />
          </div>
        </div>

        <input type="submit" value="Get Authorization code" />
      </form>
    </div>
  </body>
</html>