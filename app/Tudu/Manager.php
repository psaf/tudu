<?php 

namespace Tudu;

interface Manager {
    public function create();
    public function fetch($id);
}