<?php
include 'db.php';
class User extends DB{
    private $email;
    private $username;
    public function userExists($email, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :email AND password = :pass');
        $query->execute(['email' => $email, 'pass' => $md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($email){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :email');
        $query->execute(['email' => $email]);
        
        foreach ($query as $currentUser) {
            $this->email = $currentUser['email'];
            $this->usename = $currentUser['username'];
        }
    }
    public function getNombre(){
        return $this->email;
    }
}
?>