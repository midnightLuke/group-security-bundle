<?php declare(strict_types=1);

namespace MidnightLuke\GroupSecurityBundle\Model;

/**
 * Represents an entity that can be a member of a group.
 */
interface GroupableInterface
{
    public function getGroups();
    public function addGroup(GroupInterface $group);
    public function removeGroup(GroupInterface $group);
    public function hasGroup(GroupInterface $group): bool;
}
