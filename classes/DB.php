<?php 

class DB
{


	private  $dns   = "mysql:host=localhost;dbname=employes";
	private  $user  = 'root';
	private  $pass  = '';
	private  $options = [PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',];
	protected function  connect()
	{
        try {
            $conn = new PDO($this->dns,$this->user,$this->pass,$this->options);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
	}
}