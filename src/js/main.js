// jq-components
require('./child/jq-components/foo');

// react-components
import React from 'react';
import ReactDom from 'react-dom';
import Hoge from './child/react-components/hoge';

ReactDom.render(<Hoge />, document.getElementById('example'));
