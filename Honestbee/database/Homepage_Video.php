<?php

class Homepage_Video
{
    private $active;
    public $v_name;
    public $v_type;
    public $DB_all;
    public $bee_Table;
    public $table_data;
    public $select_data;

    public function __construct($mysql_connect)
    {
        $this->active = $mysql_connect;
    }

    public function Select_Video()
    {
        $query = "SELECT (Video_Name,Video_Type) FROM Video_Info";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // assign retrieved row value to object properties
        $this->v_name = $result['Video_Name'];
        $this->v_type = $result['Video_Type'];
    }

    public function Show_DB()
    {
        $query = "show databases";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->DB_all = $result;
        // assign retrieved row value to object properties
    }

    public function Set_DB()
    {
        $query = "ALTER DATABASE honestbee CHARACTER SET utf8 COLLATE utf8_general_ci";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        // assign retrieved row value to object properties
    }

    public function Drop_DB()
    {
        $query = "DROP TABLE bee_product";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        // assign retrieved row value to object properties
    }

    public function Point_DB()
    {
        $query = "
        CREATE TABLE bee_product(
Table_ID integer(5) PRIMARY KEY auto_increment ,
shop_ID integer,
shop_name varchar(100),
product_name varchar(100),
product_price integer,
product_num varchar(30),
product_img varchar(250)
);";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
//        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        $this->bee_Table = $result;
        // assign retrieved row value to object properties
    }

    public function Show_Table()
    {
        $query = "DESCRIBE bee_product;";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->bee_Table = $result;
        // assign retrieved row value to object properties
    }

    public function Show_Data()
    {
        $query = "SELECT * FROM bee_product";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->table_data = $result;
    }

    public function Insert_Data()
    {
        $query = "INSERT INTO `bee_product` (`Table_ID`, `shop_ID`, `shop_name`, `product_name`, `product_price`, `product_num`, `product_img`) VALUES (NULL, '456', 'test', 'test', '100', 'test', 'test');";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        // assign retrieved row value to object properties
    }

    public function Create_user()
    {
        $query = "CREATE USER 'shrek2186'@'%';
GRANT ALL PRIVILEGES ON *.* TO 'shrek2186'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        // assign retrieved row value to object properties
    }

    public function Clear_table()
    {
        $query = "truncate table bee_product";
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        // assign retrieved row value to object properties
    }

    public function Select_Data($keyword)
    {
        $query = "SELECT * FROM bee_product WHERE product_name LIKE ".$keyword;
        $stmt = $this->active->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->select_data = $result;
    }
}