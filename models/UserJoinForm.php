<?php

namespace app\models;
use yii\base\Model;

class UserJoinForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {
        return [
            ['name','required'],
            ['email','required'],
            ['password','required'],
            ['password2','required'],
            ['name','string','min'=>3,'max'=>30, 'message'=>'ого, скока символов'],
            ['email','email','message'=>'Не емейл'],
            ['password','string','min'=>4, 'message'=>'Маловато будет символов в пароле'],
            ['password2','compare','compareAttribute'=>'password','message'=>'пароли не равны'],
        ];
    }

}