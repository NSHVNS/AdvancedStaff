<?php

namespace async\session;

class Session {

    public function __construct(
        public string $name,
        public string $timestamp,
    ){}

    public function getName(): string {
        return $this->name;
    }

    public function getTimestamp(): string {
        return $this->timestamp;
    }

    public function toArray(): array {
        return [
            'name' => $this->name,
            'timestamp' => $this->timestamp,
        ];
    }

    public static function fromArray(array $array): self {
        return new self(
            $array['name'],
            $array['timestamp'],
        );
    }

}