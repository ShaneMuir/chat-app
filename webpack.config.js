const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports  = {
    mode: 'production',
    entry: {
        bundle: path.resolve(__dirname, 'src/index.js')
    },
    output: {
        path: path.resolve(__dirname, 'dist/js'),
        filename: "[name].js",
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: path.join('..', 'css', '[name].css')
        }),
    ],
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader'
                ]
            },
        ]
    }
}