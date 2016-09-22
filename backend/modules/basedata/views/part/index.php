<?php
use yii\helpers\Html;
use yii\helpers\Url;
use librarys\helpers\utils\String;

$this->title = '部位管理';
?>

<div class="dis-bread">
    <a href="<?php echo Url::to('@domain');?>">首页</a>>
    <a href="<?php echo Url::to('@domain/basedata');?>">基础数据</a>>
    <a href="javascript:;" class="bolde">部位管理</a>
</div>

<div class="dis-main">
    <div class="d-titr d-manar clearfix"><a href="<?php echo Url::to('@domain/basedata/part/add') ?>">添加部位</a><h3>部位管理列表</h3></div>
    <p class="lemou">
        <label>一级部位数量：<span><?php echo $num['part_level1']; ?></span></label>
        <label>二级部位数量：<span><?php echo $num['part_level2']; ?></span></label>
    </p>
    <form class="disin fosub canwi" action="" method="post"><p>
            <label>ID：</label><input type="text" value="" name="param[id]" id="search_id">
            <label>部位名称：</label><input type="text" value="" name="param[name]" id="search_name">
            <label>部位等级：</label>
            <select class="level" name="param[level]" id="search_level">
                <option value="0">请选择：</option>
                <option value="1">一级部位</option>
                <option value="2">二级部位</option>
            </select>
            <a href="javascript:;" id="search">搜索</a></p>
    </form>

    <!--搜索结果 start-->
    <?php
    echo $this->render('index_search', [
        'search' => $search,
		'paging' =>$paging
    ]);
    ?>
    <!--搜索结果 end-->

</div>

<!--添加疾病弹出层 start-->
<?php
echo $this->render('popup', [
    'class_level1' => $class_level1,
]);
?>
<!--添加疾病弹出层 end-->

<!--提示框部分 start-->
<div id="dialog"></div>
<!--提示框部分 end-->
<link rel="stylesheet" type="text/css" href="<?php echo Url::to('@domain/css/jquery.dialogbox.css'); ?>"/>

<script type="text/javascript" src="<?php echo Url::to('@domain/js/jquery.dialogBox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo Url::to('@domain/js/part/index.js'); ?>"></script>
<script type="text/javascript" src="<?php echo Url::to('@domain/js/part/alert.js'); ?>"></script>
<script type="text/javascript" src="<?php echo Url::to('@domain/js/part/add_disease.js'); ?>"></script>
