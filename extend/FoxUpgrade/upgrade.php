<?php

namespace FoxUpgrade;

class upgrade
{

    /**
     * 获取更新
     * @param string $version 当前版本
     */
    public function getVersionList($version)
    {
        return errorJson('仅用于学习测试不支持在线升级');
    }

    /**
     * 获取历史版本
     * @param string $version 当前版本
     */
    public function getHistoryList($version, $page = 1, $pagesize = 10)
    {
        return errorJson('仅用于学习测试不支持在线升级');
    }
}