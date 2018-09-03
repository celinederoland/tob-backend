# usefull commands
docker-compose will install composer dependencies, create a container for test units, a container for database, and a local http server
````bash
docker-compose up -d
````

# configure phpstorm 
![Check docker configuration](configure-phpstorm/01-create-a-docker-config-for-the-project.png "Check docker configuration")
![Check docker configuration](configure-phpstorm/02-verify-docker-installation.png "Check docker configuration")
![Use one container as php interpreter](configure-phpstorm/03-go-to-cli-interpreter-interface.png "Use one container as php interpreter")
![Use one container as php interpreter](configure-phpstorm/04-add-cli-interpreter-from-docker.png "Use one container as php interpreter")
![Define the url of the local http server](configure-phpstorm/05-define-server-config.png "Define the url of the local http server")
![Use the composer container to manage composer.json file](configure-phpstorm/06-create-composer-interpreter.png "Use the composer container to manage composer.json file")
![Be ready to receive xdebug requests](configure-phpstorm/07-enable-xdebug.png "Be ready to receive xdebug requests")