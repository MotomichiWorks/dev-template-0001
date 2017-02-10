import React, { Component } from 'react';
import Btn0001 from './btn-0001.jsx';

// ## 参考ページ
// http://stackoverflow.com/questions/35839184/how-to-solve-the-component-should-be-written-as-a-pure-function-error-in-esl
// http://yukidarake.hateblo.jp/entry/2015/08/11/210227

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
