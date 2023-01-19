<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/immanuelkumar87/Laravel-CRUD.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('139.162.19.129')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', 'var/www/html/Laravel-CRUD');

// Tasks

task('build', function () {
    cd('{{release_path}}');
    run('npm run build');
});

after('deploy:failed', 'deploy:unlock');
