// Fichier de configuration à utiliser dans un environnement de production

const webpack = require("webpack");
const path = require("path");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const MiniCSSExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const autoprefixer = require('autoprefixer');

let config = {
  entry: [
    './app/js/app.js',
    './app/scss/main.scss',
  ],
  mode: 'production',
  output: {
    path: path.resolve(__dirname, "./public"),
    filename: "js/app.js"
  },
  optimization: {
    minimizer: [
      new UglifyJsPlugin({
        cache: true,
        parallel: true,
      }),
      new OptimizeCSSAssetsPlugin({})
    ]
  },
  module: {
    rules: [
      // Sass
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCSSExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              plugins: function () {
                return autoprefixer({
                  overrideBrowserslist: ['last 4 versions']
                });
              }
            }
          },
          'sass-loader'
        ]
      },
      // Fonts
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts/', // Je veux copier les fichiers de fonts dans le répertoire public/fonts
            publicPath: '../fonts' // J'informe à mon code CSS (dans css/style.css) que les polices de caractères seront dans le répertoire ../fonts
          }
        },
      },
      // Permet d'importer les images
      {
        test: /\.(jpg|jpeg|png|gif|svg)$/,
        use: {
          loader: "file-loader",
          options: {
            name: "[name].[ext]", // Nom du fichier généré
            outputPath: "images/", // Destination du fichier généré dans le répertoire public
            publicPath: "../images" // Chemin relatif depuis le fichier CSS vers le dossier des images
          }
        }
      }
    ]
  },
  plugins: [
    new MiniCSSExtractPlugin({
      filename: 'css/style.css'
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
    }),
    new CopyPlugin([
      {
        from: 'app/assets/**',
        to: '.',
        toType: 'dir',
        transformPath: (targetPath) => targetPath.replace(/^app\/assets\//, '')
      }
    ]),
    new webpack.ProvidePlugin({
      axios: 'axios'
    }),
  ]
};

module.exports = config;