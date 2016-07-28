module.exports = {
  entry: './src/js/main.js',
  output: {
    path: __dirname + '/var/www/webroot/assets/js',
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
    extensions: ['', '.js']
  },
  plugins: []
}
