<?php

namespace app\models;
use yii\db\ActiveRecord;

class UserRecord extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return "user";
    }

    public function setTestUser()
    {
        $this->name="Wal";
        $this->email ="v@val.ru";
        $this->passhash="SHA512 HASH HASH HASH HASH11111111111111!!!!!hkjlk";
        $this->ststus=2;


    }

}