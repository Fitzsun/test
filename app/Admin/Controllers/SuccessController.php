<?php

namespace App\Admin\Controllers;

use App\Success;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SuccessController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('成功案例');
            $content->description('图表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('成功案例');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('成功案例');
            $content->description('新建');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Success::class, function (Grid $grid) {

            $grid->id('案例ID')->sortable();
            $grid->sm_image_url('图片缩略图')->display(function ($path) {
                
                    // 记得带上端口号
                    return 'http://127.0.0.1:83/uploads/'. $path;
                
                })->image(294,220);
            $grid->lg_image_url('案例正文图')->display(function ($path) {
                
                    // 记得带上端口号
                    return 'http://127.0.0.1:83/uploads/'. $path;
                
                })->image(200,200);
            $grid->category_id('所属类别')->editable('select',[1 => '室内除甲醛', 2 => '车内除甲醛', 3 => '新风系统', 4 => '空气检测']);
            $grid->column('title','案例名称')->editable();
            $grid->serve_time('服务时间')->editable('date');
            $grid->area('面积/型号等')->editable();
            $grid->serve_content('服务内容')->substr(1, 20)->editable('textarea');
            $grid->created_at()->sortable();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Success::class, function (Form $form) {

            $form->date('serve_time','服务时间')->format('YYYY-MM-DD');
            $form->display('id', '案例ID');
            $form->select('category_id','所属类别')->options([1 => '室内除甲醛', 2 => '车内除甲醛', 3 => '新风系统', 4 => '空气检测']);
            $form->text('title','案例标题');
            $form->text('area','面积/型号等');
            $form->image('sm_image_url','选择缩略图片')->rules('nullable')->resize(294,220)->removable();
            $form->editor('serve_content','服务内容');
        });
    }
}
