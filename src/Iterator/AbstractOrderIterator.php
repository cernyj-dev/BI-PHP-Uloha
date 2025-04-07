<?php declare(strict_types=1);

namespace Iterator;

use Node;
// Represents Abstract Iterator from which specific iterators will inherit from
abstract class AbstractOrderIterator implements \Iterator
{
    protected ?Node $node_ptr;
    protected ?Node $first_ptr;
    protected $stack;
    protected int $index;

    public function __construct(Node $root)
    {
        $this->node_ptr = $root;
        $this->first_ptr = $root;
        $this->stack= [];
        $index = 0;
    }

    public function current(): ?Node
    {
        return $this->stack[$this->index];
    }

    public function next(): void{
        $this->index++;
    }


    public function key(): bool|int|float|string|null
    {
        return $this->stack[$this->index]->getValue();
    }

    public function valid(): bool
    {
        return isset($this->stack[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}
