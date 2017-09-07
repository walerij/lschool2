<?php


namespace app\controllers;
use app\models\UserIdentity;
use yii;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        //$userRecord= new UserRecord();
        //$userRecord->setTestUser();
        //$userRecord->save();
        return $this->render('join');
    }
    public function actionLogin()
    {
        //$uid = UserIdentity::findIdentity(1);
        //Yii::$app->user->login($uid);
        return $this->render('login');
    }

    public  function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect("/");
    }

}