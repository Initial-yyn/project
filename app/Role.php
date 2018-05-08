<?php
namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
  protected $fillable = [
      'name', 'display_name', 'description',
  ];

  public function is_admin($user)
  {
    $role_admin = $this -> name == 'admin';
    $user_admin = $user -> email == $user->getAdmin();

    if($role_admin && $user_admin){
      return 'disabled';
    }else{
      return ' ';
    }
  }
}
