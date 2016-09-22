<?php

use yii\helpers\Url;

$this->title = '编辑关键词';
?>

<div class="dis-bread">
    <a href="<?php echo Url::to('@domain'); ?>">首页</a>>
    <a href="<?php echo Url::to('@domain/ask'); ?>">问答管理</a>>
    <a href="<?php echo Url::to('@domain/ask/keywords'); ?>">关键词管理</a>>
    <a href="javascript:;" class="bolde">编辑关键词</a>
</div>

<div class="dis-main dis-mainnr">
    <div class="d-titr">
        <a href="<?php echo Url::to('@domain/ask/keywords'); ?>">返回</a>
        <h3>问答管理 — 关键词管理</h3>
    </div>
    <ul class="d-clas-add">
        <li>
            <b>关键词：</b>
            <input type="text" value="<?php echo $keywords['name'];?>" id="keywords" keywordsid="<?php echo $keywords['id'];?>"/>
        </li>
        <li>
            <b>选择疾病：</b>
            <button class="d-pop-up d-pop-dow">选择</button>
        </li>
    </ul>

    <!--弹出 开始-->
    <?php
    echo $this->render('popup', [
        'class_level1' => $class_level1,
    ]);
    ?>
    <!--弹出 结束-->

    <!--选中显示疾病 start-->
    <div class="d-pop-cidr clearfix">
        <ul class="d-symp-m">
                    <li class=""
                        disid="<?php echo $disease['id'];?>"
                        class_level1="<?php echo $disease['class_level1'];?>"
                        class_level2="<?php echo $disease['class_level2'];?>"
                        name="<?php echo $disease['name'];?>"><?php echo $disease['name'];?><i></i></li>
        </ul>
    </div>
    <!--选中显示疾病 end-->
    <div class="d-heir"></div>
    <div class="savew save-edit"><a href="javascript:;">保存</a></div>
</div>

<script type="text/javascript" src="<?php echo Url::to('@domain/js/ask/keywords/add.js') ?>"></script>
<script type="text/javascript" src="<?php echo Url::to('@domain/js/ask/keywords/alert.js') ?>"></script>

