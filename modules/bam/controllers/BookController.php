<?php

namespace app\modules\bam\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * Book controller for the `bam` module
 */
class BookController extends ActiveController
{
    public $modelClass = 'app\modules\bam\models\Book';
}
