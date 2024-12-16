<?php

namespace App\Services;

class CustomInstance{
    private ?string $data = null;
    public function setData (string $msg):void {
        $this->data = $msg;
    }

    public function getData(): string{
        if ($this->data === null ) {
            return "데이터가 없어용";
        };
        return $this->data;
    }
}