<?php
class BaseController 
{
    const VIEW_PATH = 'views';
    const MODEL_PATH = 'models';
    protected function view($path, $data = [])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        require(self::VIEW_PATH . "/" . str_replace(".", "/", $path) . ".php");
    }
    protected function loadModel($modelName)
    {
        require(self::MODEL_PATH . "/" . $modelName . ".php");
    }
}