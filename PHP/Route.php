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
        public function getId(){
            return $this->id;
        }
        public function getStart(){
            return $this->start;
        }
        public function getEnd(){
            return $this->end;
        }
        public function setStart($start){
            $this->start = $start;
        }
        public function setEnd($end){
            $this->end = $end;
        }
    }

?>