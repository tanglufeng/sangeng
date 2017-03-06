<?php
/**
 * Created by PhpStorm.
 * User: caipeichao
 * Date: 14-3-8
 * Time: PM4:14
 */

namespace Tutorial\Model;

use Think\Model;

class TutorialPostReplyModel extends Model
{
    protected $tableName = 'tutorial_post_reply';


    protected $_validate = array(
         array('content', '1,40000', '内容长度不合法', self::EXISTS_VALIDATE, 'length'),
    );

    protected $_auto = array(
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('update_time', NOW_TIME),
        array('status', '1', self::MODEL_INSERT),
    );


    public function getReply($id)
    {
        $reply = S('tutorial_post_reply_' . $id);
        if (is_bool($reply)) {
            $reply = $this->where(array('id' => $id, 'status' => 1))->find();
            if ($reply) {
                $reply['user'] = query_user(array('avatar128', 'avatar64', 'nickname', 'uid', 'space_url','rank_link'), $reply['uid']);
                S('tutorial_post_reply_' . $id, $reply, 60 * 60);
            }
        }
        if ($reply) {
            $reply['lzl_count'] = D('TutorialLzlReply')->where(array('status' => 1, 'to_f_reply_id' => $reply['id']))->cache('tutorial_lzl_count_' . $reply['id'], 60 * 5)->count();
        }
        return $reply;
    }


    public function delPostReply($id)
    {
        $reply = $this->getReply($id);
        $res = $this->where(array('id' => $id))->setField('status', -1);
        if ($res) {
            $lzlModel = D('Tutorial/TutorialLzlReply');
            $lzl = $lzlModel->getList(array('where' => array('to_f_reply_id' => $id, 'status' => 1)));
            foreach ($lzl as $v) {
                $lzlModel->delLzlReply($v);
            }
            D('TutorialPost')->where(array('id' => $reply['post_id']))->setDec('reply_count');
            S('tutorial_post_reply_' . $id, null);
            S('tutorial_post_' . $reply['post_id'], null);
        }
        return $res;
    }

    public function editReply($data)
    {

        $data = $this->create($data);
        if (!$data) return false;
        $result = $this->save($data);
        if (!$result) {
            return false;
        }
        action_log('edit_tutorial_reply', 'TutorialPostReply', $data['id'], is_login());
        S('tutorial_post_reply_' . $data['id'], null);
        return $result;

    }

    public function addReply($data)
    {
        $data = $this->create($data);
        //对帖子内容进行安全过滤
        if(!$data) return false;
        $result = $this->add($data);
        if(!$result) {
            return false;
        }
        action_log('add_tutorial_reply','TutorialPostReply',$result,is_login());
        //返回帖子编号
        return $result;
    }


}