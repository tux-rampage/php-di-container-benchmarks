<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class26
{
    private $dependency;

    public function __construct(Class25 $dependency)
    {
        $this->dependency = $dependency;
    }
}
