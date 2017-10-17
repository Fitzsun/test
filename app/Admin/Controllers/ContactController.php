<?php

namespace App\Admin\Controllers;

use App\Contact;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ContactController extends Controller
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

            $content->header('联系我们');
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

            $content->header('联系我们');
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

            $content->header('联系我们');
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
        return Admin::grid(Contact::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->phone('电话号码')->editable();
            $grid->email('邮箱')->editable();
            $grid->address('公司地址')->editable('textarea');
            $grid->slogan('公司口号')->editable('textarea');
            $grid->created_at('创建日期')->sortable();
            $grid->updated_at('更新日期');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Contact::class, function (Form $form) {

            // 格式规则  $form->input类型('字段名','label名')-rules('验证规则')
            $form->display('id', 'ID');
            $form->mobile('phone','电话号码')->options(['mask' => '999-9999-9999']);
            $form->email('email','电子邮箱');
            $form->text('address','公司地址');
            $form->text('slogan','公司口号');
            $form->text('imgUrl','图片路径')->default('/');
        });
    }
}
