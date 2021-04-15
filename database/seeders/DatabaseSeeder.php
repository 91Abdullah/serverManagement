<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**  
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('users')->truncate();

        $this->call([ UsersTableSeeder::class]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(ActivationsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(EmailLogTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(Laravel2stepTableSeeder::class);
        $this->call(LaravelBlockerTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(SolutionTypeTableSeeder::class);
        $this->call(SolutionLocationTableSeeder::class);
        $this->call(SocialLoginsTableSeeder::class);
        $this->call(ServersTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(LaravelLoggerActivityTableSeeder::class);
        $this->call(LaravelBlockerTypesTableSeeder::class);
    }
}
