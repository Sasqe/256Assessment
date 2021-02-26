<?php 
namespace App\Models;
//Chris King
//2/26/2020
//Usermodel class for Assessment
class UserModel
{
  
    public $firstname;
    public $lastname;
    public $username;
    public $password;
 
 

    //class constructor 
    public function __construct($firstname, $lastname, $username,$password){
       
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->password = $password;
   
    }
   
    /**
     * username get and set
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }
    /**
     * @password get and set
     */
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /**
     * @firstname get and set
     */
    public function getFirstname(){
        return $this->firstname;
    }
    public function setFirstname($firstname){
        $this->email = $firstname;
    }
    /**
     * @lastname get and set
     */
    public function getLastname(){
        return $this->lastname;
    }
    public function setLastname($lastname){
        $this->role = $lastname;
    }
    public function iterateAllProperties()
    {
        foreach ($this as $key => $value) {
            echo "$key => $value\n";
        }
    }
   
}

?>