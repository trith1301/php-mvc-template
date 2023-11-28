<?php

class Home extends Controller
{
    public function default()
    {
        $model = $this->model('homeModel');

        $baseURL = $this->getBaseURL();
        $this->view('homeView', ["baseURL" => $baseURL]);
    }

    public function action()
    {
        $model = $this->model('homeModel');
        $model->greet();
    }
}
