#!/usr/bin/env bash
ROOT_PATH=$(cd `dirname $0`; pwd);


echo "Your theme name:";
read theme_name;
echo "Your theme folder(eg:~/www/wordpress/wp-content/themes):";
read theme_path;


## create symbol:
echo $ROOT_PATH/dist;
echo $theme_path/$theme_name;
rm -rf $theme_path/$theme_name;
ln -s $ROOT_PATH/dist $theme_path/$theme_name;


## destroy:
unset ROOT_PATH;
