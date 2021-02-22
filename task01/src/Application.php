<?php


namespace FlowLearning;


use FlowLearning\Application\Router;

class Application
{
    private Router $router;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->initialize();
    }

    public function initialize()
    {

    }


    public function handle(string $path): string
    {
        //todo: создать роутер, получить из него маршрут, по маршруту создать контроллер и вызвать экшн
    }
}