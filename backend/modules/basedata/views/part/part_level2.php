<?php

use yii\helpers\Url;

$this->title = '查看二级部位';
?>
<div class="dis-bread">
    <a href="<?php echo Url::to('@domain');?>">首页</a>>
    <a href="<?php echo Url::to('@domain/basedata');?>">基础数据</a>>
    <a href="<?php echo Url::to('@domain/basedata/department/index') ?>" class="bolde"> 部位管理</a>
</div>
<div class="dis-main">
    <div class="d-titr d-manar clearfix">
        <h3>部位管理列表 —— 二级部位详情</h3>
    </div>
    <div class="amout totye">
        <p>
            <span><b>部位名称：</b><?php echo $class_level2['name']; ?></span>
            <span><b>部位等级：</b>二级部位</span>
        </p>
        <p><b>部位简介：</b><?php echo $class_level2['description']; ?></p>
    </div>
    <form class="disin fosub canwi" action="" method="post">
        <p>
            <label>疾病名称：</label>
            <input type="text" name="search" id="dis_name"/>
            <input type="hidden" name="hidden" id="departmentid" value="<?php echo $class_level2['id']; ?>"/>
            <a href="javascript:;" id="search_button">搜索</a>
        </p>
    </form>

    <?php
    echo $this->render('part_level2_search', [
        'disease' => $disease,
        'page_html' => $page_html,
    ]);
    ?>
</div>

<!--提示框部分 start-->
<div id="dialog"></div>
<!--提示框部分 end-->
<link rel="stylesheet" type="text/css" href="<?php echo Url::to('@domain/css/jquery.dialogbox.css'); ?>"/>

<script type="text/javascript" src="<?php echo Url::to('@domain/js/jquery.dialogBox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo Url::to('@domain/js/part/check_level2.js'); ?>"></script>


