<?php
class user {

    public function __construct($user, $pass){
        $this->username = $user;
        $this->password = md5($pass);
    }

    private function password(){
        $this->password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }
}

$user = new user("admin", "12345");
echo $user->getUsername();
?>