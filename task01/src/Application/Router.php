<?php


namespace FlowLearning\Application;


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
