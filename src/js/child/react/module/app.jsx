import React, { Component } from 'react';

import { Router, Route, IndexRoute, Link, hashHistory } from 'react-router';

export default class App extends Component {
  render() {
    return (
      <div>
        <h1>App</h1>
        <ul>
          <li><Link to="/">Home</Link></li>
          <li><Link to="/about">About</Link></li>
          <li><Link to="/inbox">Inbox</Link></li>
          <li><Link to="/inbox/messages/123">Inbox/Messages</Link></li>
          <li><Link to="/no-match">NoMatch</Link></li>
        </ul>
        {this.props.children}
      </div>
    );
  }
}
