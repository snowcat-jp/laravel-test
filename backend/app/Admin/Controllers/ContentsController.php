<?php

namespace App\Admin\Controllers;

use App\Models\Contents;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContentsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contents';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contents());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('detail', __('Detail'));
        $grid->column('create_datetime', __('Create datetime'));
        $grid->column('create_user', __('Create user'));
        $grid->column('update_datetime', __('Update datetime'));
        $grid->column('update_user', __('Update user'));
        $grid->column('delete_datetime', __('Delete datetime'));
        $grid->column('delete_user', __('Delete user'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Contents::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('detail', __('Detail'));
        $show->field('create_datetime', __('Create datetime'));
        $show->field('create_user', __('Create user'));
        $show->field('update_datetime', __('Update datetime'));
        $show->field('update_user', __('Update user'));
        $show->field('delete_datetime', __('Delete datetime'));
        $show->field('delete_user', __('Delete user'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Contents());

        $form->text('name', __('Name'));
        $form->text('detail', __('Detail'));

        return $form;
    }
}
