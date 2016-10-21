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

    /**
     * 搜索功能
     *
     * @param Request $request
     * @return mixed
     */
    public abstract function search(Request $request);


    /**
     * 获得 DataTable 中状态数据
     *
     * @param Model $model
     * @return string
     */
    protected function getVerificationLabel($model){
        $color   = '';
        $message = '';
        if ($model->trashed()) {
            $color   = 'bg-red';
            $message = '已删除';
        } else {
            switch ($model->verification) {
                case 0;
                    $color   = 'label-default';
                    $message = "待审核";
                    break;
                case -1;
                    $color   = 'bg-yellow';
                    $message = "已驳回";
                    break;
                case 1;
                    $color   = 'bg-green';
                    $message = "已通过";
                    break;
            }
        }

        return "<label class='label $color'>" . $message . "</label>";
    }
}
