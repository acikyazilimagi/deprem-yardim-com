<?php

namespace Deployer;

task('yarn:build', function () {
    run('cd {{release_path}} && yarn build && yarn build:filament');
});
