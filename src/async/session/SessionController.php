<?php

namespace async\session;

use Exception;
use pocketmine\utils\SingletonTrait;

class SessionController {

    use SingletonTrait;

    private array $sessions = [];

    public function addSession(Session $session): void {
        if (isset($this->sessions[$session->getName()])) return;

        $this->sessions[$session->getName()] = $session;
    }

    public function getSession(string $name): ?Session {
        return $this->sessions[$name] ?? null;
    }

    public function removeSession(string $name): void {
        if (!isset($this->sessions[$name])) {
            throw new Exception('session does not exist');
        }
        
        unset($this->sessions[$name]);
    }

}