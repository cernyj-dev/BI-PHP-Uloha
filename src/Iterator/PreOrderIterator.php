<?php declare(strict_types=1);

namespace Iterator;

use Node;

class PreOrderIterator extends AbstractOrderIterator
{
    // TODO specific methods
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
