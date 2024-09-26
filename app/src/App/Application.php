<?php

namespace App;

class Application
{
    private ?string $data;
    public function __construct(string $data = null)
    {
        $this->data = $data;
    }

    public function run(): array
    {
        if (is_null($this->data)) {
            http_response_code(400);
            return ['code' => 400, 'message' => 'Bad Request'];
        }

        if (!$this->checkData()) {
            http_response_code(400);
            return ['code' => 400, 'message' => 'Bad Request'];
        }

        http_response_code(200);
        return ['code' => 200, 'message' => 'OK'];
    }

    private function checkData(): bool
    {
        $opened = 0;
        $closest = 0;
        for ($i = 0, $i < strlen($this->data); $i++;) {
            if ($this->data[$i] === '(') {
                $opened++;
            }
            if ($this->data[$i] === ')') {
                $closest++;
            }
        }

        $result = $opened - $closest;

        return $result === 0;
    }
}