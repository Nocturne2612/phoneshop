<?php
namespace frontend\controllers;
use frontend\models\News;
use frontend\models\NewsCategory;
class NewsController extends \yii\web\Controller
{
    public function actionListnew($id)
    {
    	$modelNew= new News();
    	$modelCatNew= new NewsCategory();
    	$dataCatParent = $modelCatNew->getNewsBy($id);
        $listid="";
        if(!empty($dataCatParent)){ // nếu cat cha có danh mục con thì list bằng tất cả các tin của danh muc mục con đó
            $i=0;
            foreach ($dataCatParent as $key => $value) {
                $i++;
                if($i==1){// lần đầu lặp thì chỉ có số  1
                    $listid .= $value["newsCatId"];	

                }else{
                    $listid .= ",".$value["newsCatId"]; // các lần còn lại thì thêm dấu phẩy đằng trc ,2,3
                }
            }
        }else{
           $listid = $id; // ngược lại cat ko có mục con thì list bằng tất cả tin trong cat đó 
        }
        $data= $modelNew->getNewByCatNewId($listid);
        $pages= $modelNew->getPagerNew($listid);
  //       echo "<pre>";
		// print_r($pages);
		// die();
        return $this->render('listnew',
        	[
	        	'data'=>$data,
	        	'pages'=>$pages,
        	]
        );
    }
    public function actionDetailnew($id)
    {
        $data= new News();
        $data=$data->getNewtById($id);
        return $this->render('detailnew',['data'=>$data]);
    }

}
