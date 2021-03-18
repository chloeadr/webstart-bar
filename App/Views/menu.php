<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Webstart bar | Menus</title>

  <script type="text/javascript">
  </script>

  <style type="text/css">
  </style>

</head>

<body>
    <?php
      foreach ($Menus as $menu) {
        echo "<h2>".$menu["title"]."</h2></br>";
        $categories = $menu["categories"];
        
         foreach ($categories as $category) {
         $drinks = $category["drinks"];
         echo "<h4>".$category["category"]."</h4></br>";
         echo "<table>";
         $drinks = $category["drinks"];
         foreach ($drinks as $drink) {
           echo "<tr><td>".$drink["drink_name"]."</td><td>".$drink["description"]."</td></tr>";
         }
         echo "</table>";
              
         }
      }
    ?>
</body>

</html>