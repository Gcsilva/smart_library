<?php

namespace app\modules\adm\models;

use \app\modules\adm\models\base\Book as BaseBook;

/**
 * This is the model class for table "book".
 */
class Book extends BaseBook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 45]
        ]);
    }

    public function extraFields() {
        return ['bookAuthors'];
    }
	
}
