#!/bin/sh

# ----------------------------------------------------
# Zip
# ----------------------------------------------------

# Variables

PACKAGE_NAME=$(node -p -e "require('./package.json').name")

# Copy

cpx "./assets/**/*" "./dist/$PACKAGE_NAME/assets"
cpx "./components/**/*" "./dist/$PACKAGE_NAME/components"
cpx "./functions/**/*" "./dist/$PACKAGE_NAME/functions"
cpx "./languages/**/*" "./dist/$PACKAGE_NAME/languages"
cpx "./pages/**/*" "./dist/$PACKAGE_NAME/pages"
cpx "./comments.php" "./dist/$PACKAGE_NAME"
cpx "./functions.php" "./dist/$PACKAGE_NAME"
cpx "./index.php" "./dist/$PACKAGE_NAME"
cpx "./readme.txt" "./dist/$PACKAGE_NAME"
cpx "./screenshot.png" "./dist/$PACKAGE_NAME"
cpx "./style.css" "./dist/$PACKAGE_NAME"

# Compress

cd ./dist && bestzip "$PACKAGE_NAME.zip" $PACKAGE_NAME