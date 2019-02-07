<?php
    
class Mysql 
{
    private $mysqli;
    
	public function __construct($host, $user, $pass, $database)	{
        $this->mysqli = new mysqli($host, $user, $pass, $database);
        $this->mysqli->set_charset("utf8");

        if ($this->mysqli->connect_errno) {
            // @todo criar uma pgaina de erro
            echo "error";
            die;
        }
	}
    
    public function newEmpregado($email, $password, $nome, $worldOfTrucks, $steam, $discord)    {
        $email = $this->mysqli->real_escape_string($email);
        $password = sha1($this->mysqli->real_escape_string($password));
        $nome = $this->mysqli->real_escape_string($nome);
        $worldOfTrucks = $this->mysqli->real_escape_string($worldOfTrucks);
        $steam = $this->mysqli->real_escape_string($steam);
        $discord = $this->mysqli->real_escape_string($discord);
       

        $query="insert into users(email, password, nome, worldOfTrucks, steam, discord) values('" . $email ."','" . $password ."','" . $nome ."','" . $worldOfTrucks ."','" . $steam ."','" . $discord ."')";

        $result = $this->mysqli->query($query);
    }
    public function inserirCarga($UserId, $Origem, $Destino, $Peso, $Carga)    {
        $UserId = $this->mysqli->real_escape_string($UserId);
        $Origem = $this->mysqli->real_escape_string($Origem);
        $Destino = $this->mysqli->real_escape_string($Destino);
        $Peso = $this->mysqli->real_escape_string($Peso);
        $Carga = $this->mysqli->real_escape_string($Carga);
      

        $query="insert into cargas(UserId, Origem, Destino, Peso, Carga) values('" . $UserId ."','" . $Origem ."','" . $Destino ."','" . $Peso ."','" . $Carga ."')";

        $result = $this->mysqli->query($query);
    }     
   
    public function aproveCarga($id, $aprove="1")  
    {
      $id = $this->mysqli->real_escape_string($id);

      $query="UPDATE cargas SET Aproved ='" . $aprove ."'  WHERE id='" . $id ."' ";

      $result = $this->mysqli->query($query);
     
      
  }

    public function deleteEmpregado($id)    {
        $id = $this->mysqli->real_escape_string($id);
    
        $query="DELETE FROM users WHERE id='" . $id ."'";


        $result = $this->mysqli->query($query);
       
        
    }   

    public function aproveEmpregado($id, $aprove="1")  
      {
        $id = $this->mysqli->real_escape_string($id);
 
        $query="UPDATE users SET Aproved ='" . $aprove ."'  WHERE id='" . $id ."' ";
  
        $result = $this->mysqli->query($query);
       
        
    }
    
    
    public function getLoginAdmin($email, $password)	{
        $email = $this->mysqli->real_escape_string($email);
        $password =sha1($this->mysqli->real_escape_string($password));

        $query = "SELECT email, password, isAdmin from users where email='" . $email ."'and password='" . $password ."' and isAdmin=\"1\"";
        $result = $this->mysqli->query($query);
        
        return $result;
    }
    
    public function getLoginEmpregado($email, $password)	{
        $email = $this->mysqli->real_escape_string($email);
        $password =sha1($this->mysqli->real_escape_string($password));

        $query = "SELECT email, password, isAdmin, Aproved from users where email='" . $email ."'and password='" . $password ."' and isAdmin=\"0\" and Aproved=\"1\"";
        $result = $this->mysqli->query($query);
        
        return $result;
	}
    
    
    public function emailExists($email)
    {   
        $email = $this->mysqli->real_escape_string($email);
        $query = "select email from users where email='" . $email . "'"; 
        $result = $this->mysqli->query($query);
        
        return $result->num_rows > 0;
    }
 
    
    public static function newConnection()    {
        return new self("localhost", "", "root", "tpcf");

    }

}

