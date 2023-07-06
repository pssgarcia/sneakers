<?php

class ContactConverter {
    public static function convertToStd($contact){
        if( ! is_array($contact)){
            $stdObject = new stdClass;
            $stdObject->Id = $contact->getId();
            $stdObject->userId = $contact->getUserId();
            $stdObject->userName = $contact->getMessage();

            return $stdObject;
        }else{
            $stdObjectList = [];
            foreach($contact as $newContact){
                $stdObject = new stdClass;
                $stdObject->userId = $newContact->getId();
                $stdObject->userFullName = $newContact->getUserId();
                $stdObject->userName = $newContact->getMessage();
                $stdObjectList[] = $stdObject;
            }
            return $stdObjectList;
        }
    }

    public static function convertToObj($stdObject){
        if( ! is_array($stdObject)) {
            $newContact = new Contact();
            $newContact->setId($stdObject->Id);
            $newContact->setUserId($stdObject->userId);
            $newContact->setMessage($stdObject->message);
            return $newContact;
        }else{
            $contactList = [];
            foreach($stdObject as $newStdObject) {
                $newContact = new Contact();
                $newContact->setId($newStdObject->Id);
                $newContact->setUserId($newStdObject->userId);
                $newContact->setMessage($newStdObject->message);
                $contactList[] = $newContact;
            }
            return $contactList;
        }
    }
}




?>