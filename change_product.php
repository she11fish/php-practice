<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <?php include 'navbar.php';?>
=======
>>>>>>> 2d9ca0430a2c225210160780eb21c7481fb519ca
    <div>A new product to add</div>
    <form name="form" action="" method="post">
        <div>Item name to change</div>
        <input type="text" name="item">
<<<<<<< HEAD
=======

>>>>>>> 2d9ca0430a2c225210160780eb21c7481fb519ca
        <div>Image URL</div>
        <input type="text" name="pictureURL">

        <div>Quantity Available</div>
        <input type="text" name="quantity">

        <div>The Price</div>
        <input type="text" name="price">

        <div>Description of the product</div>
        <input type="text" name="description">
        <button type="submit">Submit</button>
    </form>
    <?php
<<<<<<< HEAD
=======
        include 'navbar.php';
>>>>>>> 2d9ca0430a2c225210160780eb21c7481fb519ca
        include 'connection.php';
        $invalid_input = false;
        foreach ($_POST as $data)
        {
            if ($data == "" || $data == " ")
            {
                $invalid_input = true;
            }
        }
        if (!$invalid_input)
        {
<<<<<<< HEAD
            $db->exec("INSERT INTO items (item, pictureURL, quantity, price, description) VALUES ('{$_POST['item']}', '{$_POST['pictureURL']}', {$_POST['quantity']}, {$_POST['price'] * 100}, '{$_POST['description']}');");
=======
            $db->exec("INSERT INTO items (item, pictureURL, quantity, price, description) VALUES ('{$_POST['item']}', '{$_POST['pictureURL']}', {$_POST['quantity']}, {$_POST['price']}, '{$_POST['description']}');");
>>>>>>> 2d9ca0430a2c225210160780eb21c7481fb519ca
        }
        
    ?>
</body>
</html>
