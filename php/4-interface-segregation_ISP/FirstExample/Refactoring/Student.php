<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\FirstExample\Refactoring;

class Student implements StudentInterface
{
  /**
   * @return string
   */
  public function learning(): string
  {
    return 'learning';
  }
}
