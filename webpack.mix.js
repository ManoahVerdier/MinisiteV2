const mix = require('laravel-mix');
const exec = require('child_process').exec
require('dotenv').config()
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 const glob = require('glob')
const path = require('path')
 

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

 function mixAssetsDir(query, cb) {
    ;(glob.sync('resources/' + query) || []).forEach(f => {
      f = f.replace(/[\\\/]+/g, '/')
      cb(f, f.replace('resources', 'public'))
    })
  }
  
  const sassOptions = {
    precision: 5,
    includePaths: ['node_modules', 'resources/assets/'],
    prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'
  }
  
  // plugins Core stylesheets
  mixAssetsDir('scss/base/plugins/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
  )
  
  // pages Core stylesheets
  mixAssetsDir('scss/base/pages/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
  )
  
  // Core stylesheets
  mixAssetsDir('scss/base/core/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
  )
  
  // script js
  mixAssetsDir('js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest))
  
/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

 mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest))
 mixAssetsDir('vendors/css/**/*.css', (src, dest) => mix.copy(src, dest))
 mixAssetsDir('vendors/**/**/images', (src, dest) => mix.copy(src, dest))
 mixAssetsDir('vendors/css/editors/quill/fonts/', (src, dest) => mix.copy(src, dest))
 mixAssetsDir('fonts', (src, dest) => mix.copy(src, dest))
 mixAssetsDir('fonts/**/**/*.css', (src, dest) => mix.copy(src, dest))
 mix.copyDirectory('resources/images', 'public/images')
 

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/productList.js', 'public/js')
  .js('resources/js/product.js', 'public/js')
    .copy('resources/js/custom_voyager.js','public/js')
    .sass('resources/sass/app.scss', 'public/css', { prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';' })
    .js('resources/js/core/app-menu.js', 'public/js/core')
    .js('resources/js/core/app.js', 'public/js/core')
    .sass('resources/scss/base/themes/dark-layout.scss', 'public/css/base/themes', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .sass('resources/scss/base/themes/bordered-layout.scss', 'public/css/base/themes', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .sass('resources/scss/base/themes/semi-dark-layout.scss', 'public/css/base/themes', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .sass('resources/scss/core.scss', 'public/css', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .sass('resources/scss/overrides.scss', 'public/css', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .sass('resources/scss/base/custom-rtl.scss', 'public/css-rtl', { sassOptions,prependData: '$customColor:' + process.env.PRIMARY_COLOR + ';'  })
    .version();

mix.then(() => {
    if (process.env.MIX_CONTENT_DIRECTION === 'rtl') {
        let command = `node ${path.resolve('node_modules/rtlcss/bin/rtlcss.js')} -d -e ".css" ./public/css/ ./public/css/`
        exec(command, function (err, stdout, stderr) {
        if (err !== null) {
            console.log(err)
        }
        })
    }
    })

mix.browserSync(process.env.APP_URL);