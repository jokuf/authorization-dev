<?php

namespace Jokuf\Contract\Authorization;

use Jokuf\Contract\User\UserInterface;

interface AuthorizationInterface
{
    public function getUserFromToken(?string $serializedToken=''): UserInterface;
    public function createTokenFor(UserInterface $user): string;
    public function revokeToken(string $token): void;
    public function authorize(UserInterface $user, string $url, string $method): bool;
}