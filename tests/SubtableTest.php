<?php

namespace JamesPatrickKeegan\SubtableHelper\Tests;
use JamesPatrickKeegan\SubtableHelper\Tests\Models\Item;
use JamesPatrickKeegan\SubtableHelper\Subtable;

class SubtableTest extends BaseCase {
    public function testItCanCreateSubtableQuery()
    {
        factory(Item::class, 100)->create();

        $items = Subtable::from(Item::query())
            ->get();

        $this->assertCount(100, $items);
    }
}