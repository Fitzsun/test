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

            $content->header('轮播图');
            $content->description('一二级轮播图');

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

            $content->header('轮播图');
            $content->description('一二级轮播图');

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

            $content->header('轮播图');
            $content->description('一二级轮播图');

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
            $grid->slide_name('图片名称')->editable();
            // $grid->picture()->image();
            // $grid->imgUrl('图片地址')->image('http://127.0.0.1/',100,100);
            $grid->imgUrl('图片缩略图')->display(function ($path) {
                
                    // 记得带上端口号
                    return 'http://127.0.0.1:83/uploads/'. $path;
                
                })->image(200,200);
            $grid->path('跳转路径')->editable();
            $grid->level('轮播图等级')->editable('select', [1 => '一级轮播', 2 => '二级轮播']);
            $grid->order('排序');
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
            $levels = [
                1 => '一级轮播图',
                2 => '二级轮播图',
            ];
            $form->select('level','幻灯片等级')->options($levels)->help('一级轮播图尺寸1920*1080;二级轮播图尺寸800*700');
            // $form->textarea('path','路径');
            $form->text('order', '排序');
            // $form->file('title', '幻灯图片');
            // $form->image('slide_name','幻灯图片');
            $form->text('path','路径');
            // ->resize(1920, null, function ($constraint) {
            //     $constraint->aspectRatio();
            // })
            $form->image('imgUrl','选择轮播图')->rules('nullable')->removable();
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
            // resize用来调整大小  接一个函数进行约束

            // 修改图片上传路径和文件名
            // $form->image('imgUrl', '文件路径')->move('public', 'image2');
            
            // 剪裁图片
            // $form->image('title','图片裁剪')->crop('int 200', 'int 200');
            
            // 加水印
            // $form->image('title','添加水印')->insert('hello world', 'center');
            // $form->image($column[, $label])->removable();
            // $form->text('href', '链接地址');
            
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
        });
    }
}
