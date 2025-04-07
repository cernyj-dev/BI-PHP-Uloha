<?php declare(strict_types=1);

class Node extends BaseNode implements IteratorAggregate
{
    protected int $value;

    function __construct(int $val){
        parent::__construct($val);
        $this->value = $val;
    }

    public function getIterator(): Iterator{
        return new \Iterator\InOrderIterator($this);
    }

}
