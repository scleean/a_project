<?php
namespace app\tool;

/**
 * Class UserAgent
 * 用户代理相关的功能
 * @package app\common
 */
class UserAgent
{
    /**
     * 获取用户代理类型
     * @return string
     */
    public static function type()
    {
        $user_agent_type = '';  //ua类型

        if (self::isMicroMessenger()) {
            $user_agent_type = '微信浏览器';
        }

        return $user_agent_type;
    }

    /**
     * 判断是不是微信浏览器
     * @return bool
     */
    public static function isMicroMessenger()
    {
        $res = false;

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
            $res = true;
        }
        return $res;
    }
}