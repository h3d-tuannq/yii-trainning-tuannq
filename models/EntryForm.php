<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 10/22/2018
 * Time: 18:38
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules(){
        return [
          [['name', 'email'], 'required'],
          ['email', 'email'],
        ];
    }
}