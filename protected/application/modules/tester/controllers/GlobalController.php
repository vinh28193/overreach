<?php


namespace application\modules\tester\controllers;

use Yii;
use application\components\helpers\ModuleHelper;
use yii\web\Controller;

class GlobalController extends Controller
{

    public function actionIndex(){
       return $this->render('index');
    }

    public function actionTestScanDirectory(){
        Yii::setAlias('@testerModulesPath','@application/modules/tester/modules');
        var_dump(ModuleHelper::scanConfigFile('@testerModulesPath'));
        return;
    }
}