Laravel 5.3 ACL (Access Control List)

This is a basic ACL setup in Laravel 5.3. The following files have been added or modified from the stanard installation:
Migrations
* roles
* users_roles
Seeders
* RoleTableSeeder
* UserRoleTableSeeder
* UserTableSeeder
Models
* User.php
* Role.php
Controllers
* AdminController.php
* UserController.php
Middleware
* CheckRole
Routes
* web.php
