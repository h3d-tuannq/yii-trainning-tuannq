<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 2/28/2019
 * Time: 22:44
 */
namespace app\modules\forum\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class PostController extends \yii\web\Controller
{
    

    public function actionIndex(){
        return $this->render('index');
    }
}