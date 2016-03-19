<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[InstutionDetails]].
 *
 * @see InstutionDetails
 */
class InstutionDetailsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return InstutionDetails[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return InstutionDetails|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
