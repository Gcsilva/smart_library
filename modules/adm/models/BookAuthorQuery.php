<?php

namespace app\modules\adm\models;

/**
 * This is the ActiveQuery class for [[BookAuthor]].
 *
 * @see BookAuthor
 */
class BookAuthorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return BookAuthor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return BookAuthor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}