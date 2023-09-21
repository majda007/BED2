
<?php
  include_once "./Database.php";
  include_once "./Model.php";
  include_once "./View.php";
  include_once "./Controller.php";
  $database = new Database($host, $dbName, $username, $password);
    $db = $database -> connect();
    $view = new View();
    $model = new Model($db);
    $controller = new Controller($model, $view);
    $view -> traziRecept();
    $view -> unesiRecept();
?>