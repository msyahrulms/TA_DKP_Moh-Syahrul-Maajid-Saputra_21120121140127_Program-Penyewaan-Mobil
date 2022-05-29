<?php
class userService
{
    protected $email;
    protected $password;
    protected $setdataUser;
    protected $getRole;

    public function __construct($email, $password)
    {
        $this->_setdataUser = [
            (object) [
                'email'     => "mohsyahrulmaajids@gmail.com",
                'password'  => "12345",
                'role'      => "Customer 1"
            ]
        ];        
       $this->email = $email;
       $this->password = $password;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if($user) {
            $this->getRole = $user->role;
            return $get_data = $user->email;
        } 
        else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach($this->_setdataUser as $key => $value) {
            if($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }
    public function getRole()
    {
        return $this->getRole;
    }
}
