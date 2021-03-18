<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Serveurs.euses | Webstart bar</title>

  <script type="text/javascript">
  </script>

  <style type="text/css">
  </style>

</head>

<body>
    <?php
      foreach ($waiters as $waiter) {
        echo "<h2>".$waiter["firstName"]." ".$waiter["lastName"]."</h2></br>";
        echo "<h4>".$waiter["age"]."</h4></br>";
        echo "<h4>".$waiter["presentation"]."</h4></br>";
      }
    ?>
</body>

</html>