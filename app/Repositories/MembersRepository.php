<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 12/10/17
 * Time: 11:26 AM
 */

namespace App\Repositories;
use App\User;


class MembersRepository
{
    protected $users;

    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function retrieveAllMembers(){
        return json_encode(['data' => User::with('school')->get()]);
    }

    public function retrieveMembersById($id){

    }
}