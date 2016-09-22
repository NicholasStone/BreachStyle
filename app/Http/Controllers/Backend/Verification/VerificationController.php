<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class VerificationController extends Controller
{
    /**
     * 显示审核列表界面
     *
     * @return mixed
     */
    public abstract function index();

    /**
     * 获取列表数据
     *
     * @param int $v 1为通过 0为未审核 -1为驳回 2为已删除
     * @return mixed 适用于前台的Json数据
     */
    public abstract function gets($v = 0);

    /**
     * 通过审核
     *
     * @param $id 数据ID
     * @return mixed 操作成功或失败
     */
    public abstract function grant($id);

    /**
     * 驳回请求
     *
     * @param Request $request 驳回理由
     * @param $id 数据ID
     * @return mixed 操作成功或失败
     */
    public abstract function deny(Request $request, $id);

    /**
     * 软删除
     *
     * @param Request $request 删除理由
     * @param $id 数据ID
     * @return mixed 操作成功或失败
     */
    public abstract function delete(Request $request, $id);

    /**
     * 恢复数据
     *
     * @param $id 数据ID
     * @return mixed 操作成功或失败
     */
    public abstract function restore($id);

    /**
     * 显示详细信息字段
     *
     * @param $id 数据ID
     * @return mixed 详情视图
     */
    public abstract function detail($id);

    /**
     * 导出Excel
     *
     * @return mixed Excel文件
     */
    public abstract function excel();
}
