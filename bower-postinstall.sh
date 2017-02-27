#!/bin/bash

BASE=$(pwd)/src/lib
COMPONENTS=$(pwd)/bower_components

# Folders
JS_DIR=$BASE/js
CSS_DIR=$BASE/css
FONT_DIR=$BASE/fonts

# Create dirs
mkdir -p $JS_DIR $CSS_DIR $FONT_DIR

# Mode
# Will link by default, pass --copy to copy the files instead
MODE="ln -sf"
if [ -n "$1" ] && [ "$1" == "--copy" ]; then
	MODE="cp -a"
fi

# jQuery
if [ -d "$COMPONENTS/jquery" ]; then
	echo -n "processing jquery..."
	$MODE $COMPONENTS/jquery/dist/jquery.min.js $JS_DIR/~jquery.min.js
	echo "done"
fi

# Bootstrap
if [ -d "$COMPONENTS/bootstrap" ]; then
	echo -n "processing bootstrap..."
	$MODE $COMPONENTS/bootstrap/dist/js/bootstrap.min.* $JS_DIR
	$MODE $COMPONENTS/bootstrap/dist/css/bootstrap.min.* $CSS_DIR
	$MODE $COMPONENTS/bootstrap/dist/fonts/* $FONT_DIR
	echo "done"
fi

# Masonry
if [ -d "$COMPONENTS/masonry" ]; then
	echo -n "processing masonry..."
	$MODE $COMPONENTS/masonry/dist/masonry.pkgd.min.* $JS_DIR
	echo "done"
fi
