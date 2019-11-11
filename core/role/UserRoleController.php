<?php


namespace App\core\role;


use App\core\Controller;

class UserRoleController extends Controller
{
    public function __pre(){

 if ($this->getSession()->get('user_id', null) === null){
     $this->redirect('/aura1/getlogin');
 };
    }
}