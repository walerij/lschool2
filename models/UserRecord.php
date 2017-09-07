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
        $faker = \Faker\Factory::create();
        $this->name=$faker->name();
        $this->email =$faker->email;
        $this->passhash=$faker->password;
        $this->ststus=$faker->randomDigit;
    }



}