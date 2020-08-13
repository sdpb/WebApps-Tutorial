<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Samuel Palacios Bernate PHP</title>
    <meta charset="UTF-8" />
  </head>
  <body>
    <div style="border: 5px solid red;">
      <h1>Samuel Palacios Bernate PHP</h1>
      <pre>
     :####:
    :######
    ##:  :#
    ##
    ###:
    :#####:
     .#####:
        :###
          ##
    #:.  :##
    #######:
    .#####:
      </pre>
      <?php
        $name = 'Samuel Palacios Bernate';
        print "The SHA256 hash of \"$name\" is " . hash('sha256', $name);
      ?>
    </div>
    <div>
      <a href="fail.php">Fail</a>
      <br />
      <a href="check.php">Check</a>
    </div>
  </body>
</html>
