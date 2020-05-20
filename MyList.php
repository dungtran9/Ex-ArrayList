<?php


class MyList
{
    public $size;
    public $element;
   public function __construct()
   {

       $this->element=[];
   }

    public function add($obj)
    {
        array_push($this->element, $obj);
    }

    public function clear()
    {
        $this->element = array();
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->element[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function isEmpty()
    {
        if (count($this->element) == 0) {
            return true;
        }
        return false;
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->element = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    public function size()
    {
        return $this->size=count($this->element);
    }
    public function sort()
    {
        sort($this->element);
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function insert($index,$obj){
     array_splice($this->element,$index,0,$obj);
     return $this->element;
    }
    public function addAll($arr){
       $this->element=array_merge($this->element,$arr);
       return $this->element;
    }
    public function indexOf($obj){
       $arrKey =[];
       foreach ($this->element as $key => $value){
           if ($value==$obj){
               array_push($arrKey,$key);
           }
       }
       echo "vi tri ".implode("vi tri ",$arrKey);
    }

}