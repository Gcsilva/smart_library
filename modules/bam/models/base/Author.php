<?php

namespace app\modules\bam\models\base;

use Yii;

/**
 * This is the base model class for table "author".
 *
 * @property integer $id
 * @property string $name
 *
 * @property \app\modules\bam\models\BookAuthor[] $bookAuthors
 */
class Author extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(\app\modules\bam\models\BookAuthor::className(), ['author_id' => 'id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\modules\bam\models\AuthorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\bam\models\AuthorQuery(get_called_class());
    }
}
