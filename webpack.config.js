module.exports = {
  entry: './src/js/main.js',
  output: {
    path: __dirname + '/var/www/webroot/assets/js', // CakePHP
    // path: __dirname + '/var/www/react-router__webroot/js', // react-rooter
    filename: 'bundle.js'
  },
  module: {
    loaders: [
      {
        loader: 'babel',
        exclude: /node_modules/,
        test: /\.js[x]?$/,
        query: {
            cacheDirectory: true,
            presets: ['react', 'es2015']
        }
      },
      {
        test: /\.html$/,
        loader: "html"
      }
    ]
  },
  resolve: {
    extensions: ['', '.js'],
    alias: {
      'vue$': 'vue/dist/vue.common.js'
    }
  },
  plugins: []
}
