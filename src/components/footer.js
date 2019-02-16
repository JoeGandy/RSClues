import React, {Component} from 'react'

export default class Footer extends Component {
    render() {
        return (
            <div className="_footer">
                <p>
                    <a href="/about">What is this?</a>
                    <a href="https://www.reddit.com/r/2007scape/comments/37a8mg/clue_solver_i_made_in_my_free_time_let_me_know/">Main Reddit post</a>
                </p>
                <p>
                    Thanks to the <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a> for the clue scroll data
                </p>
                <p>
                    Contribute to this project on <a href="https://github.com/JoeGandy/RSClues">Github</a>
                </p>
            </div>
        )
    }
}