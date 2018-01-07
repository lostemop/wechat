<?php
namespace app\controllers;

use yii\web\Controller;
use EasyWeChat\Factory;
/**
 * Created by PhpStorm.
 * User: kevins
 * Date: 2018/1/7
 * Time: 22:17
 */
class WechatController extends Controller
{
 public function actionIndex(){
     $config = \Yii::$app->params['wechat'];
     $app = Factory::officialAccount($config);

     $response = $app->server->serve();
   var_dump($response);
     //$response->send();
 }
}