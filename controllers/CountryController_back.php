<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 10/23/2018
 * Time: 00:43
 */

namespace app\controllers;


use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryControllerBack extends Controller
{
    public function actionIndex() {
        $query = Country::find();
        $pagination = new Pagination([
           'defaultPageSize' => 5,
            'totalCount' => $query -> count(),
        ]);
        $countries = $query->orderBy('name')
                        ->offset($pagination ->  offset)
                        ->limit($pagination ->  limit)
                        ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}