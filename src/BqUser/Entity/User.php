<?php
namespace BqUser\Entity;

use Zend\Db\RowGateway\RowGateway;
use BqCore\Entity\EntityInterface;

class User extends RowGateway implements EntityInterface, UserInterface
{
    public function getId() { return $this->id; }

    public function getNickname() { return $this->nickname; }
    public function setNickname($nickname) {
        $this->nickname;
        return $this;
    }

    public function getEmail() { return $this->email; }
    public function setEmail($email) {
        $this->email;
        return $this;
    }

    public function getProfileImage($size) {
    }
}
