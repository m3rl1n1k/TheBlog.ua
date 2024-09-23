<?php

namespace App\Core;

use App\Core\Exceptions\ServiceNotFoundException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class Container implements ContainerInterface
{

    private static ?Container $instance = null;
    private array $dependencies;

    private function __construct($dependencies = [])
    {
        $this->dependencies = $dependencies;
    }

    public static function getInstance($dependencies = []): self
    {
        if (null === self::$instance) {
            self::$instance = new self($dependencies);
        }
        return self::$instance;
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function getService($id)
    {
        return (self::$instance)->get($id);
    }

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new ServiceNotFoundException("Dependency {$id} not found");
        }
        $dependency = $this->dependencies[$id];

        if (is_callable($dependency)) {
            return $dependency($this);
        }

        return $dependency;
    }

    public function has($id): bool
    {
        return array_key_exists($id, $this->dependencies);
    }
}