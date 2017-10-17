<?php

namespace App\Admin\Controllers;

use App\Product;

use App\ProductNav;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProductController extends Controller
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

            $content->header('产品列表');
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

            $content->header('产品列表');
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

            $content->header('产品列表');
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
        return Admin::grid(Product::class, function (Grid $grid) {

            $grid->id('产品ID')->sortable();
            $grid->product_name('产品名称')->editable();
            $grid->product_order('产品排序')->editable();
            $grid->category_id('所属类别')->editable('select',[2=>'家用新风系统',3=>'别墅新风系统',4=>'商用新风系统',6=>'item1',7=>'item2',9=>'item3',10=>'item4']);
            $grid->product_thumbnail_url('图片缩略图')->display(function($path) {
                return 'http://127.0.0.1:83/uploads/'. $path;
            })->image(200,200);
            $grid->product_display_url('参数缩略图')->display(function($path) {
                return 'http://127.0.0.1:83/uploads/'. $path;
            })->image(200,200);
            $grid->product_intro_url('展示缩略图')->display(function($path) {
                return 'http://127.0.0.1:83/uploads/'. $path;
            })->image(200,200);
            $grid->created_at('创建时间')->sortable();
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
        return Admin::form(Product::class, function (Form $form) {

            $form->display('id', '产品ID');
            $form->text('product_name','产品名称');
            $form->select('category_id','所属类别')->options([2=>'家用新风系统',3=>'别墅新风系统',4=>'商用新风系统',6=>'item1',7=>'item2',9=>'item3',10=>'item4']);
            $form->image('product_thumbnail_url','产品缩略图')->resize(280,280)->rules('nullable')->removable();
            $form->image('product_display_url','产品展示图')->resize(800,280)->rules('nullable')->removable();
            $form->image('product_intro_url','产品参数图')->resize(1200,1284)->rules('nullable')->removable();
            $form->slider('product_order','产品排序')->options(['max' => 100, 'min' => 1, 'step' => 1])->help('请注意:排序靠前的优先显示!!!');
        });
    }
}
