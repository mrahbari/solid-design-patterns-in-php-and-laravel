<?php

namespace Arcsym\SolidPhp\DependencyInversion\Refactoring;

interface ConnectionInterface
{
  /**
   * This method will be implemented by each database connection type.
   */
  public function open(): void;
}
