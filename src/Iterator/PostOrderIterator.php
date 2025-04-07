<?php declare(strict_types=1);

namespace Iterator;

use Node;

// Polymorphed PostOrder iterator to traverse the tree data structure in a PostOrder manner
class PostOrderIterator extends AbstractOrderIterator
{
    public function __construct(Node $root)
    {
        parent::__construct($root);
        $this->postorder($root);
    }
    private function postorder($node):void{
        if($node!=null){
            $this->postorder($node->getLeft());
            $this->postorder($node->getRight());
            $this->stack[] = $node;
        }
    }
}
