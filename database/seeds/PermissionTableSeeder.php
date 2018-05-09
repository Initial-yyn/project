<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //关闭外键约束
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //清空权限相关的数据表
        Permission::truncate();
        Role::truncate();
        User::truncate();
        DB::table('role_user')->delete();
        DB::table('permission_role')->delete();

        //开启外键约束
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        //创建初始的管理员用户
      $a = User::create([
        'name' => '测试管理员',
        'email' => 'admin@qq.com',
        'password' => bcrypt('123456')
       ]);

      $b = User::create([
        'name' => '测试教师',
        'email' => 'teacher@qq.com',
        'password' => bcrypt('123456')
      ]);

      $c = User::create([
        'name' => '测试学生',
        'email' => 'student@qq.com',
        'password' => bcrypt('123456')
      ]);

      //创建初始的Role
      $admin = Role::create([
        'name' => 'admin',
        'display_name' => '超级管理员',
        'description' => 'Super Admin Role'
      ]);

      $teacher = Role::create([
        'name' => 'teacher',
        'display_name' => '教师',
        'description' => 'Teacher Role'
      ]);

      $student = Role::create([
        'name' => 'student',
        'display_name' => '学生',
        'description' => 'Student Role'
      ]);

      //创建相应的初始权限
      $permissions = [
        [
          'name' => 'create_user',
          'display_name' => '创建用户',
          'description' => '管理用户'
        ],
        [
          'name' => 'edit_user',
          'display_name' => '编辑用户',
          'description' => '管理用户'
        ],
        [
          'name' => 'delete_user',
          'display_name' => '删除用户',
          'description' => '管理用户'
        ],
        [
          'name' => 'create_role',
          'display_name' => '创建角色',
          'description' => '管理角色'
        ],
        [
          'name' => 'edit_role',
          'display_name' => '编辑角色',
          'description' => '管理角色'
        ],
        [
          'name' => 'delete_role',
          'display_name' => '删除角色',
          'description' => '管理角色'
        ],
        [
          'name' => 'create_permission',
          'display_name' => '创建权限',
          'description' => '管理权限'
        ],
        [
          'name' => 'edit_permission',
          'display_name' => '编辑权限',
          'description' => '管理权限'
        ],
        [
          'name' => 'delete_permission',
          'display_name' => '删除权限',
          'description' => '管理权限'
        ]
      ];
      foreach ($permissions as $permission) {
        $manage_user = Permission::create($permission);
        //给角色赋予相应的权限
        $admin->attachPermission($manage_user);
      }

      //给用户赋予相应的角色
      $a->attachRole($admin);
      $b->attachRole($teacher);
      $c->attachRole($student);
    }
}
