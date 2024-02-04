#!/bin/bash

source=~/www/default.local/web-lina/assets/img
target=~/www/default.local/web-lina/www/img

cp -r $source/* $target
php run_captions.php $target
php run_optimize.php $target
