<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:33:"themes/fanbao/portal/article.html";i:1524140984;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>饭宝赚</title>
    <link href="/themes/fanbao/public/assets/css/style_fanbao.css" type="text/css" rel="stylesheet">
  </head>
   <body class="fbz">
    <div id="fbz">
       <!--头部开始-->
       <div class="header">
       <a href="<?php echo cmf_url('/'); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
       <p>平台详情</p>
       </div>
       <!--头部结束-->
       <!--主体部分开始-->
       <div class="lmain1">
          <h1><?php echo str_replace('到','~',$article['post_keywords'])  ?><span>元起</span></h1>
          <strong>试玩任务奖励</strong>
          <ul class=" clearfix">
             <li><i class="fa fa-weixin" aria-hidden="true"></i><p>支付宝</p></li>
             <li><i class="fa fa-weixin" aria-hidden="true"></i><p>微信</p></li>
             <li><i class="fa fa-jpy" aria-hidden="true"></i><p>10元提现</p></li>
          </ul>
       </div>
       <div class="lmain2">
          <h2>下载安装试玩平台</h2>
          <?php 
           $url = $article['more']['thumbnail']; 
           ?>
           <img src=" <?php echo cmf_get_image_url($url); ?>"/>
<!--           <img src="/themes/fanbao/public/assets/images/fanbao/logo1.jpg"> -->
          <p>试玩平台1</p>
          <a href="#"><button>开始赚钱</button></a>
          <h3>任务更新时间集中在15:00~18:00</h3>
       </div>
       <div class="lmain3 clearfix">
       <p>特别注意：该平台任务助手下载安装后需要在“设置-通用-设备管理”中添加信任方可使用</p>
       <img src="/themes/fanbao/public/assets/images/fanbao/1.jpg">
       <img src="/themes/fanbao/public/assets/images/fanbao/2.jpg">
       <img src="/themes/fanbao/public/assets/images/fanbao/3.jpg">
       <img src="/themes/fanbao/public/assets/images/fanbao/4.jpg">
       </div>
       <div class="lmain4 clearfix">
       <h2>平台介绍</h2>
       <p>为你提供超多好玩的应用，试玩应用还能领取丰厚的现金红包，赶快加入吧~</p>
       <?php if(is_array($photos) || $photos instanceof \think\Collection || $photos instanceof \think\Paginator): if( count($photos)==0 ) : echo "" ;else: foreach($photos as $key=>$vo): ?>
            <a href="#"><img src="<?php echo cmf_get_image_url($vo['url']); ?>"></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
       <div class="lmain5 clearfix">
       <h2>下载此平台的人也下载了</h2>
       <ul>
          <li><a href="#">
          <img src="/themes/fanbao/public/assets/images/fanbao/logo3.jpg">
          <p>试玩平台1</p>
          </a></li>
          <li><a href="#">
          <img src="/themes/fanbao/public/assets/images/fanbao/logo2.jpg">
          <p>试玩平台2</p>
          </a></li>
          <li><a href="#">
          <img src="/themes/fanbao/public/assets/images/fanbao/logo4.jpg">
          <p>试玩平台3</p>
          </a></li>
       </ul>
       </div>
       <!--主体部分结束-->
    </div>
   
   </body>
</html>