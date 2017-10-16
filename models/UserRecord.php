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

    public static function existsEmail($email)
    {
       $count = static::find()->where(['email'=>$email])->count();
       return $count>0;
    }

    public function setUserJoinForm($userJoinForm)
    {
        $this->name=$userJoinForm->name;
        $this->email=$userJoinForm->email;
        $this->passhash=$userJoinForm->password;
        $this->ststus=1;

    }

    public static function findUserByEmail($email)
    {
        return  static::findOne(['email'=>$email]);

    }


}