import React, {Component} from 'react'

export default class Header extends Component {
    render() {
        let window_is_alive = typeof(window) !== "undefined";
        return (
            <div className="_header">
                <div className="_logo">RSClues</div>
                <a href="/" className={window_is_alive && window.location.pathname === "/" ? "active" : ""}>Clue Solver</a>
                <a href="/about" className={window_is_alive && window.location.pathname === "/about" ? "active" : ""}>What is this?</a>
                <a href="/changelog" className={window_is_alive && window.location.pathname === "/changelog" ? "active" : ""}>Changelog</a>
            </div>
        )
    }
}