<?php
    class Product {
        public $id;
        public $item;
        public $pictureURL;
        public $quantity;
        public $price;
        public $description;

        function __construct($product) {	
            $this->id = $product['itemID'];
            $this->item = $product['item'];
            $this->pictureURL = $product['pictureURL'];
            $this->quantity = $product['quantity'];
            $this->price = $product['price'];
            $this->description = $product['description'];
        }

        function getId()
        {
            return $this->id;
        }

        function getItem()
        {
            return $this->item;
        }

        function getURL()
        {
            return $this->pictureURL;
        }

        function getQuantity()
        {
            return $this->quantity;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getDescription()
        {
            return $this->description;
        }


    }

    class AddProduct {
        public $id;
        public $item;
        public $pictureURL;
        public $quantity;
        public $price;
        public $description;

        function __construct()
        {
               
        }

    }
?>