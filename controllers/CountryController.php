<?php

namespace app\controllers;

use Yii;
use app\models\base\Country;
use app\models\CountrySearch;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * CountryController implements the CRUD actions for Country models.
 */
class CountryController extends ActiveController
{


    public $modelClass = 'app\models\base\Country';

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['view', 'index'],  // in a controllers
                // if in a module, use the following IDs for user actions
                // 'only' => ['user/view', 'user/index']
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
                'languages' => [
                    'en',
                    'de',
                ],
            ],
        ];
    }
}
