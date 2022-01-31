<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\SecondExample\Refactoring;

class Developer implements DeveloperInterface
{
  /**
   * @return string
   */
  public function developing(): string
  {
    return 'developing';
  }

  /**
   * @return string
   */
  public function testing(): string
  {
    return 'testing';
  }
}
