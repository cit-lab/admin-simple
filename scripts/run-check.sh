#!/usr/bin/env bash

cd ..

# composer dump-autoload
composer dump-autoload -o

# a shortcut for running all test commands

./vendor/bin/phpunit

# phpcs

./vendor/bin/phpcs -p --standard=PSR2 ./src