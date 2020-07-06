# Statamic Fields Extension

## Install

```bash
composer require ambersive/statamic-fields
```

### Adapt the webpack.mix.js

```js
mix.webpackConfig({
    resolve: {
      extensions: ['.js', '.vue', '.json'],
      alias: {
        '@ambersive': __dirname + '/vendor/ambersive/'
      }
    }
});
```

Make sure the cp.js file will be created.

```js
/*
 |--------------------------------------------------------------------------
 | Statamic Control Panel
 |--------------------------------------------------------------------------
 |
 | Feel free to add your own JS or CSS to the Statamic Control Panel.
 | https://statamic.dev/extending/control-panel#adding-css-and-js-assets
 |
 */

mix.js('resources/js/cp.js', 'public/vendor/app/js')
   .postCss('resources/css/cp.css', 'public/vendor/app/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('postcss-preset-env')({stage: 0})
]);
```

### Add import statement to cp.js

```js
/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

require('@ambersive/statamic-fields'); 
```