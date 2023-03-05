<?php 
    function submitted($array) {
        return array_key_exists('item', $array) 
                && array_key_exists('pictureURL', $array)
                && array_key_exists('quantity', $array)
                && array_key_exists('price', $array)
                && array_key_exists('description', $array);
    }

    function submitted_item($array) {
        return array_key_exists('item', $array);
    }

    function duplicate_items($db) {
        $query = mysqli_query($db, "SELECT * FROM items WHERE item = '{$_POST['item']}'");
        return mysqli_num_rows($query) > 0;
    }

    function getId($db) {
        $query = $db->query("SELECT * FROM items WHERE item = '{$_POST['item']}'");
        foreach ($query as $items) {
            return $items['itemID'];
        }
    }

    function change_product($column, $data, $id, $db) {
        if (str_replace(' ', '', $data) == '') {
            return;
        }
        $num_types = array("quantity", "price");
        if (in_array($column, $num_types)) {
            $data = (int) $data;
            if ($column == "price") {
                $data *= 100;
            }
            
            $QUERY = "UPDATE items SET {$column} = {$data} WHERE itemID = {$id};";
        } else {
            $QUERY = "UPDATE items SET {$column} = '{$data}' WHERE itemID = {$id};";
        }
        $db->query($QUERY);
    } 
?>