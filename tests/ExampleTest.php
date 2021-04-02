<?php

namespace Skoellen\LaravelProductManager\Tests;

use SebastianBergmann\RecursionContext\InvalidArgumentException;
use PHPUnit\Framework\ExpectationFailedException;
use Skoellen\LaravelProductManager\Models\Category;

class ExampleTest extends TestCase 
{
    public function test_example_test()
    {
        $this->assertTrue(true);
    }

    public function test_it_can_hit_the_database()
    {
        $category = new Category();
        $category->name = "Whatever";
        $category->save();

        $pulled = Category::find($category->id);
        $this->assertSame($category->name, $pulled->name);
    }
}
