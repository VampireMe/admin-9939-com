<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params'.YII_DB_ENV.'.php'),
    require(__DIR__ . '/params'.YII_DB_ENV.'.php')
);

return [
    'id' => 'app-wapjb',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'wapjb\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'B_gsylcgXGOCQjx57yG3vCL5dE1yA8JG',
        ],
        'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false,//隐藏index.php
             //'enableStrictParsing' => true,
//             'suffix' => '.html',//后缀，如果设置了此项，那么浏览器地址栏就必须带上.html后缀，否则会报404错误
             'rules' => [
               'map<path:(/)?>'=>'oldsite/dispatch',
                //老疾病页面URL路由
                'dis/<path:(\d+)(/)?((cause|character|examine|diagnose|bingfazheng|healthcare|cure|index).shtml)?$>'=>'oldsite/dispatch',
                'buwei/<path:((\d+).shtml)?>'=>'oldsite/dispatch',
                'sec/<path:((\w+).shtml$)?>'=>'oldsite/dispatch',
                'word/<path:((\w+).shtml$)?>'=>'oldsite/dispatch',
                 // 为路由指定了一个别名，以 post 的复数形式来表示 post/index 路由
                 'zhengzhuang/<pinyin:(\w+)><path:(/?)>' => 'symptom/index',//症状首页
                 'zhengzhuang/<pinyin:(\w+)>/article_list<path:(_?)><page:(\d+)?>.shtml' => 'symptom/article',//症状文章列表页 article_list_x.shtml
                 'symptom/load-article'=>'symptom/load-article',
                 'zhengzhuang/<pinyin:(\w+)>/<act:(test|jianjie|zzqy|yufang|jiancha|shiliao|zixun|yiyao)><path:(/?)>' => 'symptom/dispatch',//症状内容页
                 'zicha/<act:(jbzc|jbzc_zz|jbzc_bw|jbzc_jg|query)?><path:(/?)>' => 'checkbody/dispatch',//疾病自查
                 
                 'jbzz/<path:(/?)>' => 'seek/index',  //搜索部分
                 'jbzz_<tab:(\w+)>/<path:(/?)>' => 'seek/index',
                 'jbzz/buwei/<path:(/?)>' =>'seek/part-search', //部位搜索
                 'jbzz/buwei_<tab:(\w+)><path:(/?)>' =>'seek/part-search',
                 'jbzz/keshi/<path:(/?)>' =>'seek/department-search', //科室搜索
                 'jbzz/keshi_<tab:(\w+)><path:(/?)>' =>'seek/department-search',
                 'chaxun/renqun_<tab:(\w+)>/<creatureid:(2|3|4|5|6|7)><path:(/?)>' =>'seek/creature-search', //人群搜索
                 'chaxun/renqun/<creatureid:(2|3|4|5|6|7)><path:(/?)>' =>'seek/creature-search',
                 'chaxun/renqun_<tab:(\w+)><path:(/?)>' =>'seek/creature-search',
                 'chaxun/renqun/<path:(/?)>' =>'seek/creature-search',
                 'jbzz/<pinyin:(\w+)>_<tab:(\w+)><path:(/?)>' =>'seek/pinyin-search', 
                 'jbzz/<pinyin:(\w+)><path:(/?)>' =>'seek/pinyin-search',
                 'jbzz/<par:(\w+)>/<dep:(\w+)>_<tab:(\w+)><path:(/?)>' =>'seek/part-department-search',
                 'jbzz/<par:(\w+)>/<dep:(\w+)><path:(/?)>' =>'seek/part-department-search', //科室部位搜索
                 
                 'zhengzhuang/<dname:([\w^(jbzz)]+)\/?>tuji<delimiter:(_)?><page:(\d+)?><path:(/?)>' => 'article/symimages',             //症状图集
                 '<dname:([\w^(jbzz)]+)\/?>tuji<delimiter:(_)?><page:(\d+)?><path:(/?)>' => 'article/disimages',             //疾病图集
                 '<dname:([\w^(jbzz)]+)\/?><dmodule:(\w+\/?)?>' => 'disease/dispatch',                     //疾病部分
                 '<dname:(\w+)\/?>article_list<sign:(_t)?><type:(\d+)?>.shtml' => 'disease/article-list',                     //疾病部分
                 'disease/load-more'=>'disease/load-more',

                 'article/<year:\d+>/<month:\d+>/<aid:\d+>.shtml' => 'article/detail',                                   //文章页
                 'article_list.shtml' => 'article/list',                                           //文章列表页
                 '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
             ],
         ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'defaultRoute' => 'index',//设置默认控制器,默认显示网站首页
    'params' => $params,
];
