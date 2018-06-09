<?php declare(strict_types=1);

namespace MidnightLuke\GroupSecurityBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

interface GroupMembershipInterface
{
    const GROUP_ROLE_PREFIX = 'GROUP_ROLE_';

    public function getRoles(): array;
    public function addRole(string $role);
    public function removeRole(string $role);
    public function hasRole(string $role): bool;

    public function getStatus(): ?bool;
    public function setStatus(bool $status);

    public function getMember(): ?GroupMemberInterface;
    public function setMember(GroupMemberInterface $member);

    public function getGroup(): ?GroupInterface;
    public function setGroup(GroupInterface $group);

    public function getExpiry(): ?\DateTimeInterface;
    public function setExpiry(?\DateTimeInterface $expiry);
    public function isExpired(): bool;
}
