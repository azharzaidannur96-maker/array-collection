<?php
require_once 'DataStructureInterface.php';

class CollectionStack implements DataStructureInterface
{
    private SplDoublyLinkedList $items;

    public function __construct()
    {
        $this->items = new SplDoublyLinkedList();
    }

    public function insert($element)
    {
        $this->items->push($element);
    }

    public function remove()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("CollectionStack is empty");
        }
        return $this->items->pop();
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->items->top();
    }

    public function isEmpty(): bool
    {
        return $this->items->isEmpty();
    }

    public function size(): int
    {
        return $this->items->count();
    }
}
