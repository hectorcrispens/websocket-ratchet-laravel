import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ClienteWs extends Component {
    constructor(props){
        super(props);
        console.log('data construct => '+ this.props.data);
    }
    render() {

        return (
            <div className="container">
            <div className="row justify-content-center">
            <div className="col-md-8">
            <div className="card">
            <div className="card-header">Example Component</div>

        <div className="card-body">I'm an example component!</div>
        </div>
        </div>
        </div>
        </div>
    );
    }
}

if (document.getElementById('clienteWs')) {
    var data = document.getElementById('clienteWs').getAttribute('data');
    ReactDOM.render(<ClienteWs data={data}/>, document.getElementById('clienteWs'));
}
