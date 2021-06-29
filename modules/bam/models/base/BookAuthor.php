<?php

namespace app\modules\bam\models\base;

use Yii;

/**
 * This is the base model class for table "book_author".
 *
 * @property integer $id
 * @property integer $book_id
 * @property integer $author_id
 *
 * @property \app\modules\bam\models\Author $author
 * @property \app\modules\bam\models\Book $book
 */
class BookAuthor extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id', 'author_id'], 'required'],
            [['book_id', 'author_id'], 'integer']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_author';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'author_id' => 'Author ID',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(\app\modules\bam\models\Author::className(), ['id' => 'author_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(\app\modules\bam\models\Book::className(), ['id' => 'book_id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\modules\bam\models\BookAuthorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\bam\models\BookAuthorQuery(get_called_class());
    }
}
