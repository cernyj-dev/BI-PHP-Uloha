<?php declare(strict_types=1);

namespace Iterator;

use Node;

// Polymorphed PreOrder iterator to traverse the tree data structure in a PreOrder manner
class PreOrderIterator extends AbstractOrderIterator
{
    public function __construct(Node $root)
    {
        parent::__construct($root);
        $this->preorder($root);
    }
    private function preorder($node):void{
        if($node != null){
            $this->stack[] = $node;
            $this->preorder($node->getLeft());
            $this->preorder($node->getRight());
        }
    }

}
