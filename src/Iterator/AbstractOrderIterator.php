<?php declare(strict_types=1);

namespace Iterator;

use Node;

abstract class AbstractOrderIterator implements \Iterator
{
    // TODO: shared attributes?
    protected ?Node $node_ptr;
    protected ?Node $first_ptr;
    protected $stack;
    protected int $index;

    public function __construct(Node $root)
    {
        // TODO: Implement constructor.
        $this->node_ptr = $root;
        $this->first_ptr = $root;
        $this->stack= [];
        $index = 0;
    }

    public function current(): ?Node
    {
        // TODO: Implement current() method.
        return $this->stack[$this->index];
    }

    public function next(): void{
        $this->index++;
    }


    public function key(): bool|int|float|string|null
    {
        // TODO: Implement key() method.
        return $this->stack[$this->index]->getValue();
    }

    public function valid(): bool
    {
        // TODO: Implement valid() method.
        return isset($this->stack[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}
