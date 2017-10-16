<?php

namespace app\models;

use yii;
use yii\base\Model;

class UserLoginForm extends Model
{
    public $email;
    public $password;

    private $userRecord;

    public function rules()
    {
        return [
            ['email','required'],
            ['password','required'],
            ['email','email'],
            ['email','errorIfEmailNotFound'],
            ['password','errorIfPassowrdWrong']
        ];
    }

    public function errorIfEmailNotFound()
    {
        $this->userRecord = UserRecord::findUserByEmail($this->email);
        if ($this->userRecord==null)
            $this->addError('email', 'not registered');

    }

    public function errorIfPassowrdWrong()
    {
        if($this->hasErrors())
            return;
        //$userRecord = UserRecord::findUserByEmail($this->email);
        if($this->userRecord->passhash!=$this->password)
            $this->addError('password', 'wrong passowrd');
    }

    public function login()
    {
        if($this->hasErrors())
            return;

        $userIdentity = UserIdentity::findIdentity($this->userRecord->id);
        Yii::$app->user->login($userIdentity);
    }
}