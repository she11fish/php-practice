<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>A new product to add</div>
    <form name="form" action="" method="post">
        <div>Item name</div>
        <input type="text" name="item">

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
        include 'navbar.php';
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
            $db->exec("INSERT INTO items (item, pictureURL, quantity, price, description) VALUES ('{$_POST['item']}', '{$_POST['pictureURL']}', {$_POST['quantity']}, {$_POST['price']}, '{$_POST['description']}');");
        }
        
    ?>
</body>
</html>
