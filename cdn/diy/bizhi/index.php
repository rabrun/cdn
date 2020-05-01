<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <title>壁纸</title>

    <meta name="keywords" content="壁纸" />
    <meta name="description" content="壁纸"/>

    <!-- jQuery文件 -->

<script src="http://www.toqia.com/bizhi/js/jquery.min.js"></script>

    <!--滚动加载插件-->
    <script type="text/javascript" src="http://www.xingw.top/diy/bizhi/js/jquery.lazyload.min.js"></script>

    <!--全屏滚动插件-->
    <script type="text/javascript" src="http://www.xingw.top/diy/bizhi/js/jquery.onepage-scroll.min.js"></script>

    <!--页面核心js文件-->
    <script type="text/javascript" src="http://www.xingw.top/diy/bizhi/js/wallpaper.js"></script>
    
    <link rel="stylesheet" href="http://www.xingw.top/diy/bizhi/css/wallpaper.css">
</head>
<body>

<div class="banner">
  
   <h1 class="webTitle" title="Copyright &copy; 宝典库壁纸">壁纸</h1>
    <ul id="banner">
      <li><a href="http://www.xingw.top/diy/bizhi/" target="_blank">壁纸首页</a></li>
        <li onclick="loadData('360new', true);changeTitle(this)">最新壁纸</li>
        <li class="tags">
            分类壁纸
            <ul id="tags"></ul>
        </li>
        <li onclick="loadData('bing', true);changeTitle(this)">必应美图</li>
      
        <li><a href="http://www.xingw.top/" target="_blank">返回站点</a></li>
    </ul>
</div>

<div class="container">
    
    <div class="jigsaw" id="walBox"></div>  <!-- id="walBox" -->
    
    <a id="toolBall" target="_blank" href="javascript:void(0);" class="uptoTop"></a>
    
    <div id="loadmore">壁纸加载中……</div>

</div><!-- class="container" -->

</body>