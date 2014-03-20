<?php

namespace Tudu;

class ListManager implements Manager
{

    public function create()
    {
        return new \Tudu\Lists\TodoList;
    }

    public function fetch($id)
    {
        // TODO: Write logic here
    }
}
