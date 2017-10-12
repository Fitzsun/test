<?php

namespace App\Admin\Controllers;

use App\Slides;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SlidesController extends Controller
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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Slides::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->slide_name('图片名称');
            $grid->imgUrl('图片地址');
            $grid->level('排序');
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
        return Admin::form(Slides::class, function (Form $form) {

            $form->display('id', 'ID');
            // 添加text类型的input框
            $form->text('slide_name', '幻灯名称');
            $form->text('level', '排序');
            // $form->file('title', '幻灯图片');
            // $form->image('slide_name','幻灯图片');
            $form->image('imgUrl','选择图片')->name(function ($file) {
                return 'test.'.$file->guessExtension();
            })->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            // resize用来调整大小  接一个函数进行约束

            // 修改图片上传路径和文件名
            // $form->image('imgUrl', '文件路径')->move('public', 'image2');
            
            // 剪裁图片
            // $form->image('title','图片裁剪')->crop('int 200', 'int 200');
            
            // 加水印
            // $form->image('title','添加水印')->insert('hello world', 'center');
            // $form->image($column[, $label])->removable();
            // $form->text('href', '链接地址');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
