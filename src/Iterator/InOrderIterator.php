<?php declare(strict_types=1);

namespace Iterator;

use Node;

class InOrderIterator extends AbstractOrderIterator
{
    // TODO specific methods

    public function __construct(Node $root)
    {
        parent::__construct($root);
        $this->move_left($root);
    }

    private function move_left(?Node $nod):void{
        while($nod != null){
            $this->stack[] = $nod;
            $nod = $nod->getLeft();
        }
    }

    public function next(): void{
        $node = array_pop($this->stack);
        if($node->getRight() != null){
            $this->move_left($node->getRight());
        }
    }
    public function rewind(): void
    {
        $this->stack = [];
        $this->move_left($this->first_ptr);

    }
    public function current(): ?Node
    {
        // TODO: Implement current() method.
        return end($this->stack);
    }
    public function key(): bool|int|float|string|null
    {
        // TODO: Implement key() method.
        return $this->node_ptr->getValue();
    }
    public function valid(): bool
    {
        // TODO: Implement valid() method.
        return !empty($this->stack);
    }
}
