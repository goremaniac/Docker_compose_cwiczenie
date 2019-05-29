<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bulbulatorowy sklepik!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
    <body>
        <h1>W naszej ofercie mamy:</h1>
        <ul>
            <?php
            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);
            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
            ?>
            <!--tak wiem, ze to jest bardzo slabe ale hej dziala ;p  -->
        </ul>
    </body>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
