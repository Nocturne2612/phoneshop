<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $catId
 * @property string $catName
 * @property integer $parentId
 * @property integer $status
 * @property integer $dateCreate
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catName'], 'required', 'message' => '{attribute} không được để trống'],
            [['parentId', 'status', 'dateCreate'], 'integer'],
            [['catName'], 'string', 'max' => 255],
            [['catName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catId' => 'ID',
            'catName' => 'Tên danh mục',
            'parentId' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'dateCreate' => 'Ngày tạo',
        ];
    }




    public $data;

    public function getCategoryParent($parent = null, $level = "") {

        if ($parent == null) {

            $result = Category::find()
                    ->where(['is', 'parentId', null])
                    ->asArray()
                    ->all();
        } else {
            $result = Category::find()
                    ->where('parentId = :parent', ['parent' => $parent])
                    ->asArray()
                    ->all();
        }
        $level .= "|--";
        foreach ($result as $key => $value) {
            if ($parent == null) {
                $level = "";
            }
            $this->data[$value["catId"]] = $level . $value["catName"];
            self::getCategoryParent($value["catId"], $level); // đệ quy gọi lại hàm chính nó
        }
        return $this->data;
    }

    public function getCategoryBy($id)
    {
        if ($id == null) {
            return "Root";
        } else {
            $data = Category::find()->asArray()->where('catId=:catId', ['catId' => $id])->one();
            return $data["catName"];
        }
    }
}
