<?php

namespace App\Core;

class Config
{
    private static ?Config $instance = null;
    protected array $data;

    protected function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public static function getValue($key)
    {
        return self::instance()->get($key);
    }

    private function get(string $key, $default = null)
    {
        $keys = explode('.', $key);
        $value = $this->data;

        foreach ($keys as $subKey) {
            if (!isset($value[$subKey])) {
                return $default;
            }

            $value = $value[$subKey];
        }

        return $value;
    }

    public static function instance(array $data = []): Config
    {
        if (null === self::$instance) {
            self::$instance = new self($data);
        }
        return self::$instance;
    }

    public function set(string $key, $value): void
    {
        $keys = explode('.', $key);
        $data = &$this->data;

        foreach ($keys as $subKey) {
            if (!isset($data[$subKey]) || !is_array($data[$subKey])) {
                $data[$subKey] = [];
            }

            $data = &$data[$subKey];
        }

        $data = $value;
    }
}