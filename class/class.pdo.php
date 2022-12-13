<?php

/***************************************************************
* Bold CMS
* www.boldcms.nl
*
* Database class
*****************************************
***********************/

//include_once ("dbcon.php");


class Database {
    
    protected static $instance;
    protected $db;

    private $host = "escapetalk.nl", $username = "stage", $password = "j3tP2l5*2", $database = "escapetalk_badges";

    protected function __construct() {

        try {
            
            $this->db = new PDO('mysql:host='. $this->host .';dbname='.$this->database, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            // $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {

            // Eventueel nog in een log te plaatsen?
            echo $e->getMessage();
            die();

        }

    }
    
    // a classical static method to make it universally available
    public static function instance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    // a proxy to native PDO methods
    public function __call($method, $args)
    {
        return call_user_func_array(array($this->db, $method), $args);
    }

    public function query($query) {

        return $this->db->query($query);

    }

    public function run($sql, $args = []) {
        
        if (!$args) {
            return $this->query($sql);
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        return $stmt;

    }

    public function update($sql, $args = []) {

        if (!$args) {
            return $this->query($sql);
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        
    }
    
    public function rowCount($sql, $args = []) {

        if (!$args) {
            return $this->query($sql)->rowCount();
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        

        return $stmt->rowCount();

    }

    public function quote($query) {

        return $this->db->quote($query);

    }

    public function lastInsertId() {

        return $this->db->lastInsertId();

    }

    public function close() {

        return $this->db->lastInsertId();

    }
}
?>