var webpack = require('webpack');
var node_dir = __dirname + '/node_modules';


module.exports = {
	entry: ['./app.js'],

	output: {
		filename: 'bundle.js'
	},

	devtool: 'source-map',

	module: {
		loaders: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loaders: ['babel-loader']
			},

			 {
        test: /masonry-layout/,
        loader: 'imports?define=>false&this=>window'
      },

			{ test: /\.html$/, loaders: ['raw-loader','file-loader'] },

			{
				test: /\.json$/,
				exclude: /node_modules/,
				loaders: ['json']

			},

			{
				test: /\.scss$/,
				loaders:['style-loader', 'css-loader?sourceMap', 'sass-loader?sourceMap']
			},

			{
				test: /\.(jpg|png|woff|woff2|eot|ttf|svg)$/,
				loader: 'url-loader?limit=100000'
			},

		]

	},

	resolve: {
        alias: {
            jquery: "jquery/src/jquery"
        }
    },

	plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jQuery",
            "windows.jQuery": "jquery"
        }),
    ],


}
