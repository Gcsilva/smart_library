<?php

namespace app\modules\bam\models;

use \app\modules\bam\models\base\BookAuthor as BaseBookAuthor;

/**
 * This is the model class for table "book_author".
 */
class BookAuthor extends BaseBookAuthor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['book_id', 'author_id'], 'required'],
            [['book_id', 'author_id'], 'integer']
        ]);
    }
	
    public function extraFields() {
        return ['author','book'];
    }

}
