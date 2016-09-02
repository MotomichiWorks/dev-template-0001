import React, { Component } from 'react';
import Btn0001 from './btn-0001.jsx';

export default class Heading0001 extends Component {
  constructor(props) {
    super(props);
    this.state = {

    };
  }

  render() {
    return (
      <div className="hoge">
        Heading element.
        <Btn0001 />
      </div>
    );
  }
}
