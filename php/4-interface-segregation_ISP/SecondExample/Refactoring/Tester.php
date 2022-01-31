<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\SecondExample\Refactoring;

class Tester implements TesterInterface
{
  /**
   * @return string
   */
  public function testing(): string
  {
    return 'testing';
  }
}
