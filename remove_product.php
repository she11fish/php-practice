<!DOCTYPE html>
<html lang="en" style="height: 100vh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="height: 100vh; background-color: #A5243D;">
    <?php include 'navbar.php';?>
    <div class="container d-flex justify-content-center" style="height: calc(100vh - 200px); margin-top: 100px;">
        <form class="d-flex align-content-center justify-content-center w-75" name="form" action="/remove_product.php" method="POST">
            <div class="d-flex flex-column">
                <div>
                    <div>
                        <div style="font-size: 72px;">Delete Item</div>
                        <div style="font-size: 72px;" class="mt-1">Refer to item to be deleted</div>
                    </div>
                    
                    <input type="text" class="form-control-lg mt-5 w-100" style="height: 15%;" name="item" autocomplete="off">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary d-block mt-5" style="font-size: 36px;" type="submit">Submit</button>
                    </div>
                </div>
        </form>
        <?php
            include 'connection.php';
            include 'tools.php';
            function delete_product($db) {
                $QUERY = "DELETE FROM items WHERE item = '{$_POST['item']}';";
                $db->query($QUERY);
            }
            if (submitted_item($_POST)) {
                if (duplicate_items($db)) {
                    $id = getId($db);
                    delete_product($db);
                    header('Location: '. '/');
                }
                
            }
        ?>
    </div>
</body>
</html>