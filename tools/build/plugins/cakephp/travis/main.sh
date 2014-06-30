#!/bin/bash -ex

./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr || exit $?
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,app/Plugin/$PLUGIN_NAME/Config/Migration,app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS app/Plugin/$PLUGIN_NAME || exit $?
phpmd app/Plugin/$PLUGIN_NAME text /etc/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app/Plugin/$PLUGIN_NAME
if [ -d ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
  ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
fi
