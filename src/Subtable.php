<?php

namespace JamesPatrickKeegan\SubtableHelper;

use Illuminate\Support\Facades\DB;

class Subtable {
    public static function from($query_builder, $subtable_name = "subtable")
    {
        return DB::table(DB::raw("({$query_builder->toSql()}) AS $subtable_name"))
            ->mergeBindings($query_builder->getQuery());
    }
}