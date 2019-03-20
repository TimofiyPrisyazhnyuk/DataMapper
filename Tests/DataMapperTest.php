<?php

namespace DataMapper\Tests;

use DataMapper\StorageAdapter;
use DataMapper\User;
use DataMapper\UserMapper;

foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

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

(new DataMapperTest())->test();