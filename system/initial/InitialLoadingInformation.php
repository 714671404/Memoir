<?php
namespace System\Initial;

/*
 *  初始加载.env文件方法加载文件，
 *  处理成对应的格式分发给对象。
 */
class InitialLoadingInformation
{
    private $_env = [];

    /*
     * 获取文件url，处理之后返回数组。
     */
    public function __construct($_env)
    {
        if (!is_string($_env)) {
            return false;
        }
        return $this->read_the_file($_env);
    }

    /*
     * 抓取文件内容处理
     */
    protected function read_the_file($_string)
    {
        $_file = file($_string);
        foreach ($_file as $v) {
            if (trim($v)) {
                $value = explode('=', trim($v));
                $this->_env[strtolower($value[0])] = $value[1];
            }
        }

        return $this->_env;
    }
}