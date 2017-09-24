<?php
namespace frontend\controllers;
use frontend\models\Product;
use frontend\models\Category;


class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionListproduct($id){
    	$modelPro= new Product();
    	$modelCat= new Category();

    	$dataCatParent = $modelCat->getCategoryBy($id);
        $listid="";
        if(!empty($dataCatParent)){ // nếu cat có danh mục con thì list bằng tất cả các sp của các mục con đó
            $i=0;
            foreach ($dataCatParent as $key => $value) {
                $i++;
                if($i==1){// lần đầu lặp thì chỉ có số  7
                    $listid .= $value["catId"];	

                }else{
                    $listid .= ",".$value["catId"]; // các lần còn lại thì thêm dấu phẩy đằng trc ,8,9
                }
            }
        }else{
           $listid = $id; // ngược lại cat ko có mục con thì list bằng tất cả sp trong cat đó 
        }
        $data= $modelPro->getProductByCatID($listid);
        //echo "<pre>";
		// print_r($listid);
		// die();
 
        // $data = $modelpro->getProductByCat($listid);
    	return $this->render('listProduct',["data"=>$data]);
    }

}
