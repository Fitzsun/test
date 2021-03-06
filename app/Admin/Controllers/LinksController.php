<?php

namespace App\Admin\Controllers;

use App\Links;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class LinksController extends Controller
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

            $content->header('友情链接');
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

            $content->header('友情链接');
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

            $content->header('友情链接');
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
        return Admin::grid(Links::class, function (Grid $grid) {

            $grid->id('链接ID')->sortable();
            $grid->link_name('链接名称')->editable();
            $grid->link_href('链接地址')->editable();
            $grid->level('排序')->editable();
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Links::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('link_name','链接名称');
            $form->url('link_href','链接地址');
            $form->slider('level','排序')->options(['max' => 100, 'min' => 1, 'step' => 1])->help('请注意:排序靠前的优先显示');
        });
    }
}
