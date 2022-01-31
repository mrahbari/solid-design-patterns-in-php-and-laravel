<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\SecondExample\Violation;

class Developer implements WorkerInterface
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
