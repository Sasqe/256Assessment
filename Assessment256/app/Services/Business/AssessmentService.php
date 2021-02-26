<?php
namespace App\Services\Business;
//Chris King
//2/26/2020
//AssessmentService OOP with authentication
use App\Models\UserModel;

class AssessmentService{
   
    //auth method
    public function doAuth(UserModel $credentials){
        //Grab data and post into variables
        $fN = $credentials->getFirstname();
        $lN = $credentials->getLastname();
        $uN = $credentials->getUsername();
        $pW = $credentials->getPassword();
        //loop through object's properties and return auth result
        foreach ($credentials as $key => $value) {
            if ($value == "CST-256"){
                return true;
            }
        }
        return false;
        
}
}
?>