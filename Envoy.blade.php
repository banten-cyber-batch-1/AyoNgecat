@servers(['web' => 'u225968531@31.220.110.219 -p 65002'])

@task('build', ['on' => 'web'])
    cd public_html
    git pull
    php artisan cache:clear
@endtask

@task('build-plugins', ['on' => 'web'])
    cd ~/public_html/plugins/bantencyber
    git checkout master
    git pull origin master

    cd ~/public_html/plugins/cyberbridge
    git checkout master
    git pull origin master

    cd ~/public_html/plugins/cyberacademy
    git checkout master
    git pull origin master

    cd ~/public_html/plugins/cybershow
    git checkout master
    git pull origin master
@endtask
