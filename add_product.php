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
    <div class="container d-flex justify-content-center" style="height: calc(100vh - 125px); margin-top: 25px;">
        <form class="d-flex align-content-center w-50" name="form" action="/add_product.php" method="POST">
            <div class="d-flex flex-column justify-content-evenly">
                <div class="row">
                    <div class="fs-1">A New Product to Add</div>
                    <div class="fs-1">Item name</div>
                    <input type="text" class="form-control-lg" name="item" autocomplete="off">
                    
                    <div class="fs-1">Image URL</div>
                    <input type="text" class="form-control-lg" name="pictureURL" autocomplete="off">
                    

                </div>

                <div class="row">
                    <div class="fs-1">Quantity Available</div>
                        <div class="input-group-lg mb-3">
                            <input type="text" name="quantity" class="form-control-lg" aria-label="Dollar amount (with dot and two decimal places)" autocomplete="off">
                    </div>
                    <div class="fs-1">The Price</div>
                    <div class="input-group-lg mb-3">
                        <input type="text" name="price" class="form-control-lg" aria-label="Dollar amount (with dot and two decimal places)" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="fs-1">Description of the product</div>
                    <input type="text" name="description" class="form-control-lg" autocomplete="off">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary d-block h-15 w-25" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <?php
            include 'connection.php';
            include 'tools.php';
            $invalid_input = false;
            foreach ($_POST as $data) {
                if (str_replace(' ', '', $data) == '')
                {
                    $invalid_input = true;
                }
            }
            
            if (!$invalid_input && submitted($_POST)) {
                if (!duplicate_items($db)) {
                    $priceDollars = $_POST['price'] * 100;
                    $QUERY = "INSERT INTO items (item, pictureURL, quantity, price, description) VALUES (?, ?, ?, ?, ?);";
                    $stmt = $db->prepare($QUERY);
                    $stmt->bind_param("ssiis", $_POST['item'], $_POST['pictureURL'], $_POST['quantity'], $priceDollars, $_POST['description']);
                    $stmt->execute();
                    header('Location: '. '/');
                } 
            }
            
        ?>
    </div>
</body>
</html>
