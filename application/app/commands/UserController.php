<?php

namespace app\commands;

use app\models\User;
use yii\base\ErrorException;
use yii\console\Controller;
use yii\helpers\VarDumper;

class UserController extends Controller
{
    public function actionCreate(string $email, string $password)
    {
        $user = new User();
        $user->email = $email;
        $user->username = $email;
        $user->setPassword($password);
        $user->generateAuthKey();

        if (!$user->save()) {
            throw new ErrorException(VarDumper::dumpAsString($user->getErrors()));
        }
    }
}
