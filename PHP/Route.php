<?php 
    class Route{
        private $id;
        private $start;
        private $end;

        public function __construct($start, $end)
        {
            $this->start = $start;
            $this->end = $end;
        }
    }

?>