<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\SecondExample\Refactoring;

/*
 * Now, this interface is client specific.
 * Interface Segregation Principle is applying.
 */
interface TesterInterface
{
  /**
   * @return string
   */
  public function testing(): string;
}
