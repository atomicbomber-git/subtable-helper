<?php

namespace JamesPatrickKeegan\SubtableHelper\Tests;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Database\Schema\Blueprint;

class BaseCase extends Orchestra {
    public function setUp()
    {
        parent::setUp();
        $this->setUpDatabase();
        $this->withFactories(__DIR__.'/Factories');
    }

    public function setUpDatabase()
    {
        /* Creates a fake database the same way as in Laravel Migrations */

        $schemaBuilder = $this->app['db']
            ->connection()
            ->getSchemaBuilder();

        $schemaBuilder->create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->decimal('price', 19, 4);
        });
    }
}