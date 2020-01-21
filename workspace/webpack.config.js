const path = require('path');
const glob = require("glob");

const entries = glob.sync("./src_client/**/*.js");

const VueLoaderPlugin = require("vue-loader/lib/plugin");

module.exports = {
    mode: 'development',
    entry: {
        lib: entries
    },
    output: {
        path: path.join(__dirname, 'public/assets/js'),
        filename: `[name].js`,
    },
    plugins: [
        new VueLoaderPlugin()
    ],
    resolve: {
        extensions: [".vue", ".js"],
        alias: {
            "vue$": "vue/dist/vue.esm.js"
        }
    },
    module: {
        rules: [
            {
                enforce: "pre",
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "eslint-loader",
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel-loader',
                options: {
                    presets: [
                        [
                            '@babel/preset-env',
                            {
                                modules: false,// import文をそのままにする
                                useBuiltIns: 'usage', // 必要なpolyfillだけ自動的に使う
                                targets: '> 0.25%, not dead', // 対応する対象
                                corejs: 3,
                                // debug: true  // polyfillの情報が出力される
                            }
                        ]
                    ]
                }
            },
            {
                test: /\.vue$/,
                loader: "vue-loader",
            }
        ]
    },
    watchOptions: {
        poll: 1000
    }
};