<?php


class Database
{
    private $username;
    private $password;
    private $db_name;
    private $hostname;
    private $conn;
    private $req;

    public function __construct($username = "user1", $password = "123456", $db_name = "js_barber_shop_db", $hostname = "localhost")
    {
        // We try to establish the connection
        try {
            $this->username = $username;
            $this->password = $password;
            $this->db_name = $db_name;
            $this->hostname = $hostname;
            $this->conn = new PDO("mysql:host=" . $hostname . ";dbname=" . $db_name, $username, $password);
            // Set the PDO error mode to Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } /*
        * We catch the exceptions if an exception is thrown and
        * we display the information about it
        * */
        catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    // Function to execute prep_request
    public function prep_request($cmd): bool
    {
        try
        {
            $this->req = $this->conn->prepare($cmd);
            $this->req->execute();
            return true;
        }
        catch (PDOException $e)
        {
            echo "Error : " . $e->getMessage();
            return false;
        }
    }

    // Function to fetch information
    public function result()
    {
        try
        {
            return $this->req->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            echo "Error : " . $e->getMessage();
            return false;
        }
    }
}

