const mix = require('laravel-mix');

// TODO ! follow a real tutorial on webpack and how to split dependencies

/**
 * Each app JS and custom SASS is added there
 * 
 * Indicate the name of the folder of app (must corespond to folder in ressources/apps)
 * Maybe in the futur I will iterate automaticly in the ressources/apps folder
 */

const addApp = (folder) => {
    mix.js('resources/apps/'+folder+'/js/app.js', 'public/'+folder+'Assets');
    mix.sass('resources/apps/'+folder+'/sass/app.scss', 'public/'+folder+'Assets');
}

addApp('Json');
addApp('Portfolio');

/**
 * Common ressources
 * 
 * Split dependencies with wepbpack : http://www.compulsivecoders.com/tech/how-to-build-multiple-vendors-using-laravel-mix/
 */

mix.js('resources/common/js/common.js', 'public/common');
mix.sass('resources/common/sass/common.scss', 'public/common');

// Extract is used to split vendors (need to be at the end to be in common folder)
mix.extract();