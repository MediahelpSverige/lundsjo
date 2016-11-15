//libs
import React from 'react';
import { Router, Route, browserHistory, IndexRedirect} from 'react-router';

//components
import App from './components/App';
import Home from './components/Home';
import NotFound from './components/NotFound'

//Routes

const routes = (

		<Router history={browserHistory}>
		<Route component={App}>
			<Route path="/" component={Home} />
			<Route path="*" component={NotFound} />
		</Route>
	</Router>

);

export default routes;
