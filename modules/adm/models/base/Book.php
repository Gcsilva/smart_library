<?php

namespace app\modules\adm\models\base;

use Yii;

/**
 * This is the base model class for table "book".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property \app\modules\adm\models\BookAuthor[] $bookAuthors
 */
class Book extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 45]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(\app\modules\adm\models\BookAuthor::className(), ['book_id' => 'id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\modules\adm\models\BookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\adm\models\BookQuery(get_called_class());
    }
}
