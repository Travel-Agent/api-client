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
      form.on('click', '.submit', function() {
        action = form.attr('action');
        access_token = form.find('#access_token').val()
        form.attr('action', action + '?access_token=' + access_token);
      });
    });
    </script>

  </head>
  <body>
    <div id="wrapper">
      <form method="post" action="http://api:3000/api/v1/orders" id="form">
        <div class="item">
          Access token:
          <input type="text" name="access_token" id="access_token" value="" />
        </div>

        <div class="item">

          <input type="text" name="fds" value="" />
        </div>

        <input type="submit" class="submit" value="Create order" />
      </form>
    </div>
  </body>
</html>