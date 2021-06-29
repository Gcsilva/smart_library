<?php

namespace app\modules\bam\models;

use \app\modules\bam\models\base\Author as BaseAuthor;

/**
 * This is the model class for table "author".
 */
class Author extends BaseAuthor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45]
        ];
    }
	
    public function extraFields() {
        return ['bookAuthors'];
    }
}
