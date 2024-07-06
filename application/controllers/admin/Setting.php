<?php

class Setting extends CI_Controller
{
	public function index()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view('admin/setting', $data);
	}
}