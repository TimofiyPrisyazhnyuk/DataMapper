<?php

namespace DataMapper\Tests;

use StorageAdapter;
use UserMapper;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class DataMapperTest
 * @package DataMapper\Tests
 */
class DataMapperTest
{
    /**
     * Test data mapper.
     */
    public function test()
    {
        $data = [
            1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com'],
            2 => ['username' => 'ffffsss', 'email' => 'ggfddd.sdffff@gmail.com'],
        ];
        $storage = new StorageAdapter($data);
        $mapper = new UserMapper($storage);
        print_r($mapper->findById(2));
    }
}

// Run test.
(new DataMapperTest())->test();