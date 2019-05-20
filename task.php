<?php
    class Task {
        
        protected $description;
        protected $completed = false;

        public function __construct($description)
        {
            $this->description  = $description;
            
        }

        public function complete()
        {
            $this->completed = true;
        }
        
        public function description()
        {
            return description;
        }

        public function isComplete()
        {
            return $this->completed;

        }
    }
?>
