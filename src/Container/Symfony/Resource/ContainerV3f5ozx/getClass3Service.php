<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'class3' shared autowired service.

return $this->services['class3'] = new \DiContainerBenchmarks\Fixture\Class3(${($_ = isset($this->services['class2']) ? $this->services['class2'] : $this->services['class2'] = new \DiContainerBenchmarks\Fixture\Class2(${($_ = isset($this->services['class1']) ? $this->services['class1'] : $this->services['class1'] = new \DiContainerBenchmarks\Fixture\Class1()) && false ?: '_'})) && false ?: '_'});