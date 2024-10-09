<?php
namespace Dsw\Company;
use Dsw\Company\Employee;

  class Company {
    private array $employees = [];

    public function getEmployees() : array {
      return $this->employees;
    }

    public function addEmployee(Employee $employee) : void {
      array_push($this->employees, $employee);
    }

    public function removeEmployee(Employee $employee) : void {
      $position = array_search($employee, $this->employees);
      if ($position !== false) {
        array_splice($this->employees, $position, 1);
      }
    }

    public function calculateSalaries() : int {
      $totalSalaries = 0;
      foreach ($this->employees as $employee) {
        $totalSalaries += $employee->getSalary();
      }
      return $totalSalaries;
    }
  }
?>