<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-27
 * Time: 下午4:54
 * @author 嘉兴想天信息科技有限公司-郑钟良<zzl@ourstu.com>
 */


if(is_mobile()){

    return array(

        /**
         * 路由的key必须写全称,且必须全小写. 比如: 使用'wap/index/index', 而非'wap'.
         */
        'router' => array(

            /*系统首页*/
            'home/index/index'          =>  'mob/weibo/index',

            /*积分商城*/
            'shop/index/index'          =>  'mob/shop/index',
            'shop/index/goods'			=>  'mob/shop/index',
            'shop/index/goodsdetail'    =>  'mob/shop/goodsdetail',
            'shop/index/mygoods'        =>  'mob/shop/myorder',

            /*活动*/
            'event/index/index'         => 'mob/event/index',
            'event/index/myevent'       => 'mob/event/myevent',
            'event/index/detail'        => 'mob/event/detail',
            'event/index/member'        => 'mob/event/member',
            'event/index/edit'          => 'mob/event/edit',
            'event/index/add'           => 'mob/event/add',

            /*专辑*/
            'issue/index/index'                     => 'mob/issue/index',
            'issue/index/issuecontentdetail'        => 'mob/issue/issuedetail',
            'issue/index/edit'                      => 'mob/issue/addissue',

            /*论坛*/
            'forum/index/index'                     => 'forum',
            'forum/index/forum'                     => 'forum/[id]/p_[page]',
            'forum/index/edit'                      => 'forum/edit_[forum_id]/p_[post_id]',
            'forum/index/detail'                    => 'forum/detail_[id]',
            'forum/index/search'                    => 'forum/search',
            'forum/index/look'                      => 'forum/look',
            'forum/index/lists'                     => 'forum/lists',

            /*资讯*/
            'news/index/index'                      => 'news/[category]/p_[page]',
            'news/index/my'                         => 'mynews/p_[page]',
            'news/index/detail'                     => 'news/detail_[id]',
            'news/index/edit'                       => 'news/edit_[id]',

            /*动弹*/
            'weibo/index/index'                     => 'mob/weibo/index',
            'weibo/index/weibodetail'               => 'mob/weibo/weibodetail',
            'weibo/index/search'                    => 'mob/weibo/index',
            'weibo/topic/topic'                     => 'mob/weibo/index',

            /*群组*/
            'group/index/index'                     => 'mob/group/index',
            'group/index/groups'                    => 'mob/group/index',
            'group/index/mygroup'                   => 'mob/group/index',
            'group/index/group'                     => 'mob/group/index',
            'group/index/detail'                    => 'mob/group/detail',
            'group/index/edit'                      => 'mob/group/detail',
            'group/index/create'                    => 'mob/group/addGroup',
            'group/manage/index'                    => 'mob/group/detail',
            'group/manage/member'                   => 'mob/group/detail',
            'group/manage/notice'                   => 'group/notice_[group_id]',
            'group/manage/category'                 => 'group/category_[group_id]',
            'group/index/discover'                  => 'group/discover',
            'group/index/my'                        => 'group/my',
            'group/index/select'                    => 'group/select',

            /*用户中心*/
            'ucenter/index/index'                => 'mob/user/index',
            'ucenter/index/following'            => 'mob/user/index/tab/focus.',
            'ucenter/index/applist'              => 'mob/user/index',
            'ucenter/index/information'          => 'mob/user/index',
            'ucenter/index/fans'                 => 'mob/user/index/tab/focus',
            'ucenter/index/rank'                 => 'mob/user/index/tab/userhead]',
            'ucenter/index/rankverifywait'       => 'mob/user/index/tab/userhead',
            'ucenter/index/rankverifyfailure'    => 'mob/user/index/tab/userhead',
            'ucenter/index/rankverify'           => 'mob/user/index/tab/userhead',
            'ucenter/config/index'               => 'mob/user/index/tab/userdata',
            'ucenter/config/tag'                 => 'mob/user/index/tab/ziliao',
            'ucenter/config/avatar'              => 'mob/user/index',
            'ucenter/config/password'            => 'mob/user/index',
            'ucenter/config/score'               => 'mob/user/index',
            'ucenter/config/role'                => 'mob/user/index',
            'ucenter/config/other'               => 'mob/user/index',
            'ucenter/message/session'            => 'mob/user/index',
            'ucenter/message/message'            => 'mob/message/index',
            'ucenter/collection/index'           => 'mob/user/index',
            'ucenter/invite/invite'              => 'mob/member/index',
            'ucenter/invite/index'               => 'mob/member/index',

            /*会员*/
            'people/index/index'                    => 'mob/people/index',

            /*注册登录*/
            'ucenter/member/login'                  => 'mob/member/index',
            'ucenter/member/step'                   => 'mob/member/index',
            'ucenter/member/register'               => 'mob/member/register',



            /*微店*/
            'store/index/index'                     => 'mob/store/index',
            'store/index/li'                        => 'mob/store/goodsCate',
            'store/index/search'                    => 'mob/store/search',
            'store/index/info'                      => 'store/info_[info_id]',
            'store/shop/lists'                      => 'mob/store/shop',
            'store/shop/detail'                     => 'mob/store/shopdetail',
            'store/shop/goods'                      => 'mob/store/goods',
            'store/center/detail'                   => 'mob/store/goodsdetail',
            'store/center/buy'                      => 'mob/store/myCar',
            'store/center/pay'                      => 'mob/store/goodsdetail',
            'store/center/orders'                   => 'mob/store/goodsdetail',
            'store/center/payorder'                 => 'mob/store/placeOrder',
            'store/center/response'                 => 'userstore/response_[s]',
            'store/center/fav'                      => 'userstore/fav_[id]',
            'store/center/createshop'               => 'mob/store/createShop',
            'store/center/post'                     => 'userstore/post_[entity_id]',
            'store/center/selling'                  => 'mob/store/soldSell',
            'store/center/sold'                     => 'mob/store/soldSell',

            /*分类信息*/
            'cat/index/index'                       => 'mob/cat/index',
            'cat/index/li'                          => 'cat/li_[name]',
            'cat/index/info'                        => 'mob/cat/detail',
            'cat/index/post'                        => 'mob/cat/detail',
            'cat/center/my'                         => 'mob/cat/usercontent',
            'cat/center/fav'                        => 'mob/cat/usercontent',
            'cat/center/rec'                        => 'mob/cat/usercontent',
            'cat/center/send'                       => 'mob/cat/usercontent',
            'cat/center/post'                       => 'mob/cat/usercontent',

            /*问答*/
            'question/index/waitanswer'             => 'mob/question/index',
            'question/index/goodquestion'           => 'mob/question/index',
            'question/index/myquestion'             => 'mob/question/index',
            'question/index/questions'              => 'mob/question/index',
            'question/index/edit'                   => 'mob/question/addquestion',
            'question/index/detail'                 => 'mob/question/questiondetail',
            'question/answer/edit'                  => 'mob/question/reply',


        ),

    );
}else{

    return array(

        /**
         * 路由的key必须写全称,且必须全小写. 比如: 使用'wap/index/index', 而非'wap'.
         */
        'router' => array(

            /*系统首页*/
            'home/index/index'          =>  'home',

            /*积分商城*/
            'shop/index/index'          =>  'shop',
            'shop/index/goods'			=>  'goods/[category_id]',
            'shop/index/goodsdetail'    =>  'goods/detail_[id]',
            'shop/index/mygoods'        =>  'mygoods/[status]',

            /*活动*/
            'event/index/index'         => 'event/[type_id]/p_[page]',
            'event/index/myevent'       => 'myevent/[type_id]',
            'event/index/detail'        => 'event/detail_[id]',
            'event/index/member'        => 'event/member_[id]',
            'event/index/edit'          => 'event/edit_[id]',
            'event/index/add'           => 'event/add',

            /*专辑*/
            'issue/index/index'                     => 'issue/[issue_id]/d_[display_type]/p_[page]',
            'issue/index/issuecontentdetail'        => 'issue/detail_[id]',
            'issue/index/edit'                      => 'issue/edit_[id]',

            /*论坛*/
            'forum/index/index'                     => 'forum',
            'forum/index/forum'                     => 'forum/[id]/p_[page]',
            'forum/index/edit'                      => 'forum/edit_[forum_id]/p_[post_id]',
            'forum/index/detail'                    => 'forum/detail_[id]',
            'forum/index/search'                    => 'forum/search',
            'forum/index/look'                      => 'forum/look',
            'forum/index/lists'                     => 'forum/lists',

            /*资讯*/
            'news/index/index'                      => 'news/[category]/p_[page]',
            'news/index/my'                         => 'mynews/p_[page]',
            'news/index/detail'                     => 'news/detail_[id]',
            'news/index/edit'                       => 'news/edit_[id]',

            /*动弹*/
            'weibo/index/index'                     => 'weibo/t_[type]/p_[page]',
            'weibo/index/weibodetail'               => 'weibo/detail_[id]',
            'weibo/index/search'                    => 'weibo/search',
            'weibo/topic/topic'                     => 'topic_[type]',

            /*群组*/
            'group/index/index'                     => 'group/p_[page]',
            'group/index/groups'                    => 'groups/[cate]/p_[page]',
            'group/index/mygroup'                   => 'mygroup/p_[page]',
            'group/index/group'                     => 'onegroup/[type]/[id]/[cate]',
            'group/index/detail'                    => 'group/detail_[id]',
            'group/index/edit'                      => 'group/edit_[group_id]/[post_id]',
            'group/index/create'                    => 'group/create',
            'group/manage/index'                    => 'group/manage_[group_id]',
            'group/manage/member'                   => 'group/member_[group_id]/[status]',
            'group/manage/notice'                   => 'group/notice_[group_id]',
            'group/manage/category'                 => 'group/category_[group_id]',
            'group/index/discover'                  => 'group/discover',
            'group/index/my'                        => 'group/my',
            'group/index/select'                    => 'group/select',

            /*用户中心*/
            'ucenter/index/index'                => 'ucenter/[uid]',
            'ucenter/index/following'            => 'ucenter/following_[uid]',
            'ucenter/index/applist'              => 'ucenter/applist_[type]/[uid]',
            'ucenter/index/information'          => 'ucenter/information_[uid]',
            'ucenter/index/fans'                 => 'ucenter/fans_[uid]',
            'ucenter/index/rank'                 => 'ucenter/rank_[uid]',
            'ucenter/index/rankverifywait'       => 'ucenter/rankwait_[uid]',
            'ucenter/index/rankverifyfailure'    => 'ucenter/rankfailure_[uid]',
            'ucenter/index/rankverify'           => 'ucenter/rankverify_[uid]',
            'ucenter/config/index'               => 'ucenter/conf',
            'ucenter/config/tag'                 => 'ucenter/tag',
            'ucenter/config/avatar'              => 'ucenter/avatar',
            'ucenter/config/password'            => 'ucenter/password',
            'ucenter/config/score'               => 'ucenter/score',
            'ucenter/config/role'                => 'ucenter/role',
            'ucenter/config/other'               => 'ucenter/other',
            'ucenter/message/session'            => 'ucenter/session',
            'ucenter/message/message'            => 'ucenter/msg_[tab]',
            'ucenter/collection/index'           => 'ucenter/collection_[type]',
            'ucenter/invite/invite'              => 'ucenter/invite',
            'ucenter/invite/index'               => 'ucenter/invite_create',

            /*会员*/
            'people/index/index'                    => 'people',

            /*注册登录*/
            'ucenter/member/login'                  => 'login',
            'ucenter/member/step'                   => 'register/step_[step]',
            'ucenter/member/register'               => 'register/[type]/c_[code]',

            /*文章*/
            'paper/index/index'                     => 'paper_[id]',

            /*微店*/
            'store/index/index'                     => 'store',
            'store/index/li'                        => 'store/li_[type]_[name]',
            'store/index/search'                    => 'store/search',
            'store/index/info'                      => 'store/info_[info_id]',
            'store/shop/lists'                      => 'stores/[page]',
            'store/shop/detail'                     => 'onestore/[id]',
            'store/shop/goods'                      => 'onestore/goods_[id]',
            'store/center/detail'                   => 'userstore/detail',
            'store/center/buy'                      => 'userstore/buy',
            'store/center/pay'                      => 'userstore/pay',
            'store/center/orders'                   => 'userstore/orders',
            'store/center/payorder'                 => 'userstore/payorder_[id]',
            'store/center/response'                 => 'userstore/response_[s]',
            'store/center/fav'                      => 'userstore/fav_[id]',
            'store/center/createshop'               => 'userstore/create_[name]',
            'store/center/post'                     => 'userstore/post_[entity_id]',
            'store/center/selling'                  => 'userstore/selling_[page]',
            'store/center/sold'                     => 'userstore/sold',

            /*分类信息*/
            'cat/index/index'                       => 'cat',
            'cat/index/li'                          => 'cat/li_[name]',
            'cat/index/info'                        => 'cat/info_[info_id]',
            'cat/index/post'                        => 'cat/post_[name]',
            'cat/center/my'                         => 'cat/my_[id]',
            'cat/center/fav'                        => 'cat/fav_[id]',
            'cat/center/rec'                        => 'cat/rec',
            'cat/center/send'                       => 'cat/send',
            'cat/center/post'                       => 'usercat/post',

            /*问答*/
            'question/index/waitanswer'             => 'question/p_[page]',
            'question/index/goodquestion'           => 'goodquestion/p_[page]',
            'question/index/myquestion'             => 'myquestion/[type]/p_[page]',
            'question/index/questions'              => 'questions/[category]/p_[page]',
            'question/index/edit'                   => 'question/edit_[id]',
            'question/index/detail'                 => 'question/detail_[id]',
            'question/answer/edit'                  => 'question/editanswer_[answer_id]',

            /*充值*/
            'recharge/index/recharge'               => 'recharge',
            'recharge/index/rechargelist'           => 'rechargelist/[payok]',
            'recharge/index/withdrawlist'           => 'withdrawlist/[payok]',

            /*ping++*/
            'pingxx/index/recharge'               => 'pingxx',
            'pingxx/index/rechargelist'           => 'pingxxrechargelist/[payok]',
            'pingxx/index/withdrawlist'           => 'pingxxwithdrawlist/[payok]',



            /*云市场*/
            'appstore/index/index'                  => 'appstore',
            'appstore/index/feed'                   => 'appstore/feed',
            'appstore/index/plugin'                 => 'appstore/plugin_[tid]',
            'appstore/index/module'                 => 'appstore/module_[tid]',
            'appstore/index/theme'                  => 'appstore/theme_[tid]',
            'appstore/index/developer'              => 'appstore/developer/p_[page]',
            'appstore/admin/addplugin'              => 'appstore/addplugin_[id]',
            'appstore/admin/addmodule'              => 'appstore/addmodule_[id]',
            'appstore/admin/addtheme'               => 'appstore/addtheme_[id]',
            'appstore/index/plugindetail'           => 'appstore/plugindetail_[id]',
            'appstore/index/moduledetail'           => 'appstore/moduledetail_[id]',
            'appstore/index/themedetail'            => 'appstore/themedetail_[id]',
            'appstore/admin/addversion'             => 'appstore/addversion_[id]',
            'appstore/admin/editversion'            => 'appstore/editversion_[id]',
            'appstore/admin/delversion'             => 'appstore/delversion_[id]',
            'appstore/index/setup'                  => 'appstore/setup_[id]',
            'appstore/index/download'               => 'appstore/download_[id]',
            'appstore/admin/verify'                 => 'appstore/verify',
            'appstore/admin/my'                     => 'appstore/my',
            'appstore/admin/myplugin'               => 'appstore/myplugin',
            'appstore/admin/mymodule'               => 'appstore/mymodule',
            'appstore/admin/mygoods'                => 'appstore/mygoods_[payed]',
            'appstore/admin/order'                  => 'appstore/myorder',
            'appstore/admin/bind'                   => 'appstore/bind'
        ),

    );
}