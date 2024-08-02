laravel new project-name
php artisan serve
php artisan make:controller ControllerName
php artisan make:component componentName
php artisan make:middleware MiddlewareName
php artisan make:role RoleName
php artisan make:request RequestName

php artisan vendor:publish --tag=laravel-errors

// migrations
php artisan make:migration create_tableName_table
php artisan migrate
php artisan migrate:status
php artisan migrate:rollback
php artisan migrate:rollback --step=2
php artisan migrate:reset
php artisan migrate:refresh
php artisan migrate:refresh --step=2
php artisan migrate:fresh
php artisan make:migration dropping_tableName_table
php artisan make:migration rename_student_to_employee
