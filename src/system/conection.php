<?php
/**
 * 
 */
class Conection
{
	private $host, $user, $password, $database, $port;
	
	function __construct()
	{
        $json = file_get_contents("../system/db.json");
        $config = json_decode($json, true);
        $this->setHost($config["host"]);
        $this->setUser($config["user"]);
        $this->setPassword($config["password"]);
        $this->setDatabase($config["database"]);
        $this->setPort($config["port"]);
	}

	public function conectar()
	{
		try{
			$conexao = mysqli_connect(
				$this->getHost(),
				$this->getUser(),
				$this->getPassword(),
				$this->getDatabase(),
				$this->getPort()
			);
		} 
		catch (Exception $e) { 
			var_dump($e);
      		throw $e; 
   		} 

		return $conexao;
	}

	public function setHost($host)
	{
		$this->host = $host;
	}
	
	public function setUser($user)
	{
		$this->user = $user;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	public function setDatabase($database)
	{
		$this->database = $database;
	}

	public function setPort($port)
	{
		$this->port = $port;
	}

	public function getHost()
	{
		return $this->host;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getDatabase()
	{
		return $this->database;
	}
	
	public function getPort()
	{
		return $this->port;
	}
	
	public function getUser()
	{
		return $this->user;
	}
}
?>
