// Imports
const path = require('path');
const babelRegister = require("babel-register");

// Webpack Configuration
const config = {

    // Entry
    entry: './assets/js/app.js',

    // Output
    output: {
        path: path.resolve(__dirname, './public/js'),
        filename: 'app.js'
    },

    // Loaders
    module: {
        rules : [
            // JavaScript/JSX Files
            {
                test: /\.jsx$/,
                exclude: /node_modules/,
                use: ['babel-loader']
            },
            // CSS Files
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    },

    // Plugins
    plugins: [
    ],

    // OPTIONAL
    // Reload On File Change
    watch: true,
    // Development Tools (Map Errors To Source File)
    devtool: 'source-map',
};

// Exports
module.exports = config;