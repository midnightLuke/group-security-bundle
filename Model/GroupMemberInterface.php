<?php declare(strict_types=1);

namespace MidnightLuke\GroupSecurityBundle\Model;

interface GroupMemberInterface
{
    public function getMemberships();
    public function addMembership(GroupMembershipInterface $membership);
    public function removeMembership(GroupMembershipInterface $membership);
    public function hasMembership(GroupMembershipInterface $membership): bool;
}
