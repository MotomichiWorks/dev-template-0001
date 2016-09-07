// react, react-dom
import React from 'react';
import ReactDom from 'react-dom';

// react-router
import { Router, Route, IndexRoute, Link, hashHistory } from 'react-router';

// components
import App from './module/app.jsx';
import Home from './module/home.jsx';
import About from './module/about.jsx';
import Inbox from './module/inbox.jsx';
import InboxStats from './module/inbox-stats.jsx';
import Message from './module/message.jsx';
import NoMatch from './module/no-match.jsx';

ReactDom.render(
  <Router history={hashHistory}>
    <Route path="/" component={App}>
      <IndexRoute component={Home} />
      <Route path="about" component={About} />
      <Route path="inbox" component={Inbox}>
        <IndexRoute component={InboxStats} />
        <Route path="messages/:id" component={Message} />
      </Route>
      <Route path="*" component={NoMatch} />
    </Route>
  </Router>,
  document.getElementById('reactApp')
);
