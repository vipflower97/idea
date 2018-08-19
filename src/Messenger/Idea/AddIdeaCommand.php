<?php

/*
 * This file is part of the ceo project.
 *
 * (c) Aula de Software Libre de la UCO <aulasoftwarelibre@uco.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Messenger\Idea;

use App\Entity\Group;
use App\Entity\User;

class AddIdeaCommand
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var User
     */
    private $user;
    /**
     * @var Group
     */
    private $group;

    /**
     * AddIdeaCommand constructor.
     *
     * @param string $title
     * @param string $description
     * @param User   $user
     * @param Group  $group
     */
    public function __construct(
        string $title,
        string $description,
        User $user,
        Group $group
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->user = $user;
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }
}