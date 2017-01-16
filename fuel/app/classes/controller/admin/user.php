<?php

class Controller_Admin_User extends Controller_Template
{
    public $template = 'admin/template';

    /**
     * before コンストラクタ処理
     *
     * @access public
     * @return void
     */
    public function before()
    {
        parent::before();

        $this->template->set_global('environment', \Fuel::$env);
        $this->template->set_global('current_user', Model_User::find_by_username(Auth::get_screen_name(), []));

        $this->template->title = Config::get('title.admin.user.'.Request::active()->action);
    }

    /**
     * INDEX
     *
     * @access  public
     * @return  void
     */
    public function action_index()
    {
        $users = Model_User::find('all');

        $this->template->content = View::forge('admin/user/index', [
            'users' => $users
        ]);
    }
}