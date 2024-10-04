<?php
    namespace Dsw\Company;

    class Person {
        private string $name;
        private int $age;

        public function __construct(string $name, int $age)
        {
            
        }

        public function getName() : string {
            return $this->name;
        }
    }
?>