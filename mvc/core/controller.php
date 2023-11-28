<?php

class Controller
{
    public function getBaseURL()
    {

        $baseURL = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $baseURL .= 's';
        }
        $baseURL .= '://' . $_SERVER['HTTP_HOST'];
        $baseURL .= $_SERVER['REQUEST_URI'];

        return $baseURL;
    }

    public function model($model)
    {
        require_once './mvc/models/' . $model . '.php';

        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('./mvc/views/' . $view . '.php')) {
            require_once './mvc/views/' . $view . '.php';
        }
    }
}
