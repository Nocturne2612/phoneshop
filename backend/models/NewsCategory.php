<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property integer $newsCatId
 * @property string $newsCatName
 * @property integer $parentId
 * @property integer $status
 * @property integer $dateCreate
 */
class NewsCategory extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'news_category';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['newsCatName'], 'required', 'message' => '{attribute} không được để trống'],
            [['parentId', 'status', 'dateCreate', 'updateAt'], 'integer'],
            [['newsCatName'], 'string', 'max' => 255],
            [['newsCatName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'newsCatId' => 'ID',
            'newsCatName' => 'Danh mục tin tức',
            'parentId' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'dateCreate' => 'Ngày khởi tạo',
            'updateAt' => 'Ngày cập nhật',
        ];
    }

    public $data;

    public function getNewsCategory($parent = null, $level = "") {

        if ($parent == null) {
            $result = NewsCategory::find()
                    ->where(['is', 'parentId', null])
                    ->asArray()
                    ->all();
        } else {
            $result = NewsCategory::find()
                    ->where('parentId = :parent', ['parent' => $parent])
                    ->asArray()
                    ->all();
        }

        $level .= "|--";
        foreach ($result as $value) {
            if ($parent == null) {
                $level = "";
            }
            $this->data[$value["newsCatId"]] = $level . $value["newsCatName"];
            self::getNewsCategory($value["newsCatId"], $level); // đệ quy gọi lại hàm chính nó
        }
        return $this->data;
    }

}
