<?php

class UserConverter {
    public static function convertoStd($user){
        if( ! is_array($user)){
            $stdObject = new stdClass;
            $stdObject->userId = $user->getUserId();
            $stdObject->userFullName = $user->getUserFullName();
            $stdObject->userName = $user->getUserName();
            $stdObject->userEmail = $user->getUserEmail();
            $stdObject->userPassword = $user->getUserPassword();
            $stdObject->userPhone = $user->getUserPhone();
            $stdObject->userAddress = $user->getUserAddress();
            
            return $stdObject;
        }else{
            $stdObjectList = [];
            foreach($user as $newUser){
                $stdObject = new stdClass;
                $stdObject->userId = $newUser->getUserId();
                $stdObject->userFullName = $newUser->getUserFullName();
                $stdObject->userName = $newUser->getUserName();
                $stdObject->userEmail = $newUser->getUserEmail();
                $stdObject->userPassword = $newUser->getUserPassword();
                $stdObject->userPhone = $newUser->getUserPhone();
                $stdObject->userAddress = $newUser->getUserAddress();
                $stdObjectList[] = $stdObject;
            }

            return $stdObjectList; 
        }
    }

    public static function convertToObj($stdObject){
        if( ! is_array($stdObject)) {
            $newUser = new User();
            $newUser->setUserFullName($stdObject->userFullName);
            $newUser->setUserEmail($stdObject->userEmail);
            $newUser->setUserPassword($stdObject->userPassword);
            $newUser->setUserPhone($stdObject->userPhone);
            $newUser->setUserAddress($stdObject->userAddress);

            return $newUser;
        }else{
            $usersList = [];
            foreach($stdObject as $newstdObject) {
                $newUser = new User();
                $newUser->setUserFullName($newstdObject->userFullName);
                $newUser->setUserEmail($newstdObject->userEmail);
                $newUser->setUserPassword($newstdObject->userPassword);
                $newUser->setUserPhone($newstdObject->userPhone);
                $newUser->setUserAddress($newstdObject->userAddress);
                $usersList[] = $newUser;
            }
            return $usersList;
        }
    }
}




?>