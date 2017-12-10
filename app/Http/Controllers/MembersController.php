<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 12/10/17
 * Time: 9:23 AM
 */

namespace App\Http\Controllers;
use App\Repositories\MembersRepository;

class MembersController
{

    protected $members;

    public function __construct(MembersRepository $members)
    {
        $this->members = $members;
    }

    public function getAllMembers()
    {
        return $this->members->retrieveAllMembers();
    }
}