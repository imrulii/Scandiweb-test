<?php
require_once ("db.php");

//Creating class Product
class Product
{
    private $sku;
    private $name;
    private $price;
    private $size;
    private $weight;
    private $width;
    private $length;
    private $height;

    protected $conn;

    //Construct
    public function __construct ($sku=0, $name="", $price="", $size="", $weight="", $width="", $length="", $height="")
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->weight = $weight;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;

        //Conecction to database
        $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //Method Setters
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }

    //Method Getters
    public function getSku()
    {
        return $this->$sku;
    }
    public function getName()
    {
        return $this->$name;
    }
    public function getPrice()
    {
        return $this->$price;
    }
    public function getSize()
    {
        return $this->$size;
    }
    public function getWeight()
    {
        return $this->$weight;
    }
    public function getWidth()
    {
        return $this->$width;
    }
    public function getLength()
    {
        return $this->$length;
    }
    public function getHeight()
    {
        return $this->$height;
    }

    //Method to insert  in database
    public function insertProduct()
    {

         try{
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $stm = $this->conn->prepare("INSERT INTO product (sku, name, price, size, weight, width, length, height) VALUES(?,?,?,?,?,?,?,?)");
            if (@$stm->execute([$this->sku, $this->name, $this->price, $this->size, $this->weight, $this->width, $this->length, $this->height]))
            {
                return true;
            }
            else 
            {
                return false;    
            }
            }
        catch(Exception $e)
            {
            return $e->getMessage();
            }
    }

    //Method to visualize what we inserted in database
    public function showAll()
    {
        try
        {
            $stm = $this->conn->prepare("SELECT * FROM product");
            $stm->execute();
            return $stm->fetchAll();   
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    //Method to delete in database
    public function deleteProduct()
    {
        try
        {
            $arr_ids = str_repeat('?,', count((array)$this->sku) - 1) . '?';
            $stm = $this->conn->prepare("DELETE FROM product WHERE sku IN ($arr_ids)");
            $stm->execute(($this->sku));
            return $stm->fetchAll();
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

}




?>