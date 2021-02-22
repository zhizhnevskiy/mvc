<?php


namespace FlowLearning\Aplication;


class Router
{
    public function dispatch(string $path): array
    {
        [
            'controller' => '',
            'action' => ''
        ];
    }

    public function addRoute(string $way, array $handler): this
    {

    }
}
