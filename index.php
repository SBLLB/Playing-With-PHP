<!DOCTYPE html>

<html>
  <head> 
    <title>Playing with PHP</title>
  </head>
  <body>
    <header>
      <h1>
        <?php
        $welcome = "Welcome to Playing with PHP";
        echo $welcome;
        ?>
      </h1>
    </header>
    <main>
      <h2>This is testing the PHP 'for 'loop</h2>
      <?php
      for ($number = 1; $number <= 10; $number++) {
        if ($number <= 9) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
      };
      ?>
    </main>
  </body>
</html>