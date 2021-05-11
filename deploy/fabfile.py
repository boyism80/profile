from fabric.api import *

env.hosts = ['192.168.0.180']
env.user = 'ubuntu'
env.key_filename = '/ssh/fb'
env.port = 22
env.timeout = 60

@task
def deploy():
    local('zip -qq -r profile.zip .')

    sudo('rm -rf profile', quiet=True)
    sudo('mkdir -p profile', quiet=True)
    with cd('profile'):
        put('profile.zip', '.', use_sudo=True)
        sudo('unzip profile.zip', quiet=True)
        sudo('rm profile.zip', quiet=True)

        with settings(warn_only=True):
            sudo('docker stop profile', quiet=True)
            sudo('docker rm profile', quiet=True)

        sudo('docker build -t php:profile .', quiet=True)
        sudo('docker run --name profile -d -v $PWD:/var/www/html -p 80:80 php:profile', quiet=True)

    local('rm profile.zip')