import React, {Component} from 'react'
import {FaSearch, FaQuestion, FaBook} from 'react-icons/fa';

export default class Header extends Component {
    render() {
        let window_is_alive = typeof (window) !== "undefined";
        return (
            <div className="_header">
                <div className="_logo"><a href="/">RSClues</a></div>
                <div className="_links">
                    <a href="/" title="Clue Solver"
                       className={window_is_alive && window.location.pathname === "/" ? "active" : ""}>
                        <FaSearch attr={{alt: 'Clue Solver', title: 'Clue Solver'}}/>
                        <span>Clue Solver</span>
                    </a>
                    <a href="/about" title="What is this"
                       className={window_is_alive && (window.location.pathname === "/about" || window.location.pathname === "/about/") ? "active" : ""}>
                        <FaQuestion attr={{alt: 'What is this', title: 'What is this'}}/>
                        <span>What is this</span></a>
                    <a href="/changelog" title="Changelog"
                       className={window_is_alive && (window.location.pathname === "/changelog" || window.location.pathname === "/changelog/") ? "active" : ""}>
                        <FaBook  attr={{alt: 'Changelog', title: 'Changelog'}}/>
                        <span>Changelog</span></a>
                </div>
            </div>
        )
    }
}