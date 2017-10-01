const path = require("path");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const extractSass = new ExtractTextPlugin({
    filename: "../css/[name].css",
});

module.exports = {
    entry: './src/js/main.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, "./public/js")
    },
    devtool: "source-map",
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: extractSass.extract({
                    use: [{
                        loader: "css-loader"
                    }, {
                        loader: "sass-loader"
                    }],
                    // use style-loader in development
                    fallback: "style-loader"
                })
            },
            {
                test: /\.(png|jpg)$/,
                loader: 'file-loader',
                include: path.join(__dirname, 'src'),
                options: {
                    name: '../images/[name].[ext]'
                }
            },
            {
                test: /\.vue$/,
                loader: "vue-loader",
                options: {
                    loaders: {
                        js: "babel-loader"
                    }
                }
            }
        ]
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.js'
        }
    },
    plugins: [
        extractSass,
        new BrowserSyncPlugin({
            proxy: 'http://localhost:8888/mtc/byui/cit230/assignments/salmonriver/public/'
        })
    ]
}