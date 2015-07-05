<?php

require APPPATH . 'libraries/Input.php';

class Test extends CI_Controller
{
    public function instance()
    {
        echo html_escape($this->input->get('username'));
    }

    public function static_call()
    {
        echo html_escape(Input::get('username'));
    }
}
