<?php
namespace frontend\controllers;
use Yii;
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
        $pages= $modelPro->getPagerProduct($listid);
        //echo "<pre>";
		// print_r($pages);
		// die();
 
    	return $this->render('listProduct',[
            "data"=>$data,
            "pages"=>$pages

        ]);
    }
    public function actionDetail($id)
    {
        $data= new Product();
        $data=$data->getProductById($id);
        return $this->render('detail',['data'=>$data]);
    }
    public function actionSearchprice()
    {
        $first = Yii::$app->getRequest()->getQueryParam('first');
        $last = Yii::$app->getRequest()->getQueryParam('last');
        // echo $last;
        // die();
        $data= new Product();
        $data=$data->getProductBySearchPrice($first,$last);
        // $pages= $data->getPagerProduct();
        return $this->render('listsearch',['data'=>$data]);
    }
    public function actionSearch()
    {
        $search = Yii::$app->getRequest()->getQueryParam('search');
        $data= new Product();
        $data=$data->getProductBySearchName($search);
        return $this->render('listsearch',['data'=>$data]);
    }

}
