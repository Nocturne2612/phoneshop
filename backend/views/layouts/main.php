<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="nav-md">
        <?php $this->beginBody() ?>

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= Yii::$app->homeUrl?>" class="site_title"><i class="fa fa-paw"></i> <span>Phone Shop</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?= Yii::$app->homeUrl.'images/img.jpg'?>" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>

                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3><i class="fa fa-edit"></i> Sản Phẩm - Tin Tức</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a><i class="fa fa-sitemap"></i> Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'factory' ?>">Thương hiệu</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'category' ?>">Danh mục sản phẩm</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'product' ?>">Sản phẩm</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-picture-o"></i> Hình Ảnh - Banner <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'image' ?>">Hình ảnh</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'banner' ?>">Banner</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-newspaper-o"></i> Tin Tức <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'news-category' ?>">Danh mục tin tức</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Yii::$app->homeUrl . 'news' ?>">Tin tức</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3><i class="fa fa-gears"></i> Quản Trị</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a><i class="fa fa-users"></i> Tài Khoản <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo Yii::$app->homeUrl . 'permission' ?>">Danh sách quyền</a></li>
                                            <li><a href="<?php echo Yii::$app->homeUrl . 'userlist' ?>">Danh sách nhóm tài khoản</a></li>
                                            <li><a href="<?php echo Yii::$app->homeUrl . 'user' ?>">Danh sách tài khoản</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#level1_1">Level One</a>
                                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_1">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_2">Level Two</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#level1_2">Level One</a>
                                            </li>
                                        </ul>
                                    </li> 
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
<!--                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"
                               <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>-->
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/img.jpg" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="javascript:;">

                                                <?php
                                                echo Html::beginForm(['/site/logout'], 'post');
                                                echo Html::submitButton(
                                                        'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'fixLogout']
                                                );
                                                echo Html::endForm();
                                                ?>
                      <!-- <a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a> -->

                                            </a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>

                    <?= $content ?>

                </div>
                <!-- /page content -->

                <!-- footer content -->
<!--                 <footer>
                  <div class="pull-right">
                    Phone Shop ------------ Copyright - Phạm Duy Tân
                  </div>
                  <div class="clearfix"></div>
                </footer> -->
                <!-- /footer content -->
            </div>
        </div>

        <div class="modal fade" id="media-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">File Manager</h4>
              </div>
              <div class="modal-body">
              <iframe width="100%" height="500" frameborder="0" src="../../file/dialog.php?type=1&field_id=imageFile"></iframe>
              </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">OK</button> -->
          <button type="button" class="btn btn-primary">Save changes</button>
      </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>