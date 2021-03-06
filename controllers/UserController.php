<?php


namespace app\controllers;
use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use Codeception\Lib\Connector\Yii2;
use yii;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller
{
    /**
     * @return string
     */
    public function actionJoin()
    {
        if(Yii::$app->request->isPost)

            return $this->actionJoinPost();

        $userJoinForm= new UserJoinForm();
        $userRecord = new UserRecord();
        $userRecord ->setTestUser();
       $userJoinForm->setUserRecord($userRecord)

            ;
        return $this->render('join',
        compact('userJoinForm')
            );
    }

    public function actionJoinPost(){
        $userJoinForm= new UserJoinForm();
        if($userJoinForm->load(Yii::$app->request->post()))
          if($userJoinForm->validate())
          {
              $userRecord=new UserRecord();
              $userRecord->setUserJoinForm($userJoinForm);
              $userRecord->save();
              return $this->redirect('/user/thanks');
          }

            return $this->render('join',
            compact('userJoinForm')
        );
    }
    public function actionLogin()
    {
        if(Yii::$app->request->isPost)
            return $this->actionLoginPost();

        $userLoginForm = new UserLoginForm();
        return $this->render('login',compact('userLoginForm' ));
    }

    public function actionThanks()
    {
        //$uid = UserIdentity::findIdentity(1);
        //Yii::$app->user->login($uid);
        return $this->render('thanks');
    }

    public  function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect("/");
    }

    public function actionLoginPost()
    {
        $userLoginForm= new UserLoginForm();
        if($userLoginForm->load(Yii::$app->request->post()))
            if($userLoginForm->validate())
            {
                $userLoginForm->login();
                return $this->redirect('/');
            }
        return $this->render('login',compact('userLoginForm' ));
    }



}