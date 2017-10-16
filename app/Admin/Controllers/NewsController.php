<?php

namespace App\Admin\Controllers;

use App\News;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NewsController extends Controller
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

            $content->header('新闻列表');
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

            $content->header('新闻列表');
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

            $content->header('新闻列表');
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
        return Admin::grid(News::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('title','新闻标题')->editable();
            $grid->category_id('所属类别')->editable('select', [0 => '公司', 1 => '产品']);
            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
                'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
            ];
            $grid->is_index('显示在首页 ?')->switch();
            $grid->is_hot('最热 ?')->switch();
            $grid->is_latest('最新 ?')->switch();
            $grid->publish_at('日期')->editable();
            $grid->created_at();
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
        return Admin::form(News::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->select('category_id','所属类别')->options([0=>'公司',1=>'产品']);
            $form->datetime('publish_at','发布日期')->format('YYYY-MM-DD');
            $form->image('sm_image_url','选择缩略图片')->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->help('缩略图尺寸为200*200');
            $form->image('lg_image_url','选择正文图片')->resize(800, 322, function ($constraint) {
                $constraint->aspectRatio();
            })->help('正文图尺寸为800*322');
            $form->editor('meta_decription','新闻概述');
            $form->editor('content','新闻主体');
            $form->switch('is_hot','是否设为最热')->options(['true' => '是', 'false'=> '否'])->default('false');
            $form->switch('is_latest','是否设为最新')->options(['true' => '是', 'false'=> '否'])->default('false');
        });
    }
}
