<?php

namespace App\Core;

class View
{
    private string $template;
    private array $data;
    /**
     * @var array|mixed|null
     */
    private mixed $defaultPath;

    public function __construct(string $template, array $data = [])
    {
        $this->defaultPath = ROOT_PATH . Config::getValue('config.view.path') . "/";
        $this->data = $data;
        $this->template = $template;

        $this->render();
    }

    public function render(): void
    {
        extract($this->data);
        require $this->defaultPath . $this->template . ".php";
    }

}