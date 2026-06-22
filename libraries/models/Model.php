<?php

namespace Models;

abstract class Model
{
    protected $table;
    public function __construct()
    {
        // No database connection needed - using static data
    }
}
