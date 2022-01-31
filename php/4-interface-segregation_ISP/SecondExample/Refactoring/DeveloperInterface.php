<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\SecondExample\Refactoring;

/*
 * Now, this interface is client specific.
 * Interface Segregation Principle is applying.
 */
interface DeveloperInterface
{
  /**
   * @return string
   */
  public function developing(): string;

  /**
   * @return string
   */
  public function testing(): string;
}
