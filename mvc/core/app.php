<?php

class App
{
    protected $controller = 'home';
    protected $action = 'default';
    protected $params = [];

    public function __construct()
    {
        $array = $this->urlProcess();
        if (isset($array[0])) {
            if (file_exists('./mvc/controllers/' . $array[0] . '.php')) {
                $this->controller = $array[0];
                unset($array[0]);
            }
        }

        require_once './mvc/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        if (isset($array[1])) {
            if (method_exists($this->controller, $array[1])) {
                $this->action = $array[1];
            }
            unset($array[1]);
        }

        $this->params = $array ? array_values($array) : [];

        call_user_func_array([$this->controller, $this->action ? $this->action : 'default'], $this->params);
    }

    public function urlProcess()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}
