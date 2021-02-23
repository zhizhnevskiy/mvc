<?php


namespace FlowLearning;


use FlowLearning\Application\Router;

class Application
{
    private Router $router;

    private array $config;

    /**
     * Application constructor.
     * @param array $config
     */

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->initialize();
    }

    public function initialize()
    {
        foreach ($this->config as $array => $path) {
            print_r($path['path']);
        }
        foreach ($this->router as $array => $path) {
            print_r($path);
        }
    }

    public function handle(string $path): string
    {
        $segments = trim($path, "/");
        $segments = explode("/", $path);
        $this->router = $segments[0];

        print_r($this->router);
        $this->initialize();
        //создать роутер, получить из него маршрут, по маршруту создать контроллер и вызвать экшн
    }
}