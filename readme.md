# Contexis Base Theme for Wordpress

Wordpress boilerplate theme for quick and easy development, based on [Zurb Foundation](http://foundation.zurb.com/). Fancy things are yet to come. For this project, a lot of other projects have been partially reused, such as

* sage (https://github.com/roots/sage)
* generator-gulp-foundation (https://github.com/niallobrien/generator-gulp-foundation)

## Prerequisites

For best dev-experience, you should have nodejs > 0.12.1 installed. Also, [bower](http://bower.io) and [gulp](http://gulpjs) sould be installed globally.

## Install

To install, clone this repository into your wordpress theme folder. Then, open a terminal on your webserver and type:

```bash
bower install && npm install && gulp
```

To let gulp watch your files, type

```bash
gulp watch
```

When you've finished (a stage of) your development, you might want to type

```bash
gulp --production
```

to compile your assets for production.