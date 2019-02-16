import React from "react"
import Layout from "../components/layout";

export default () => (
    <Layout>
        <h1>What is this?</h1>
        <p>This website is a simple clue solver for Old School Runescape, it negates the need to be consistantly typing
            your clues into google! I developed this for fun in one day, so please don't rip it apart too much :) The
            data is taken from the OSRS wikia, I will try keep all the clue information/relevant, but if you need more
            up to date information check out the OSRS wikia.</p>
        <h1>Who am I?</h1>
        <p>I started this as a student whilst at The University of Nottingham, I play Old School Runescape in my free
            time (IGN is 'Jofo'). I made this website for free and at the request of nobody, using information supplied
            by the Old School Runescape wikia. I've recently opened this project up so this is no longer a solo project,
            feel free to contribute on github.</p>
        <h1>Planned Features</h1>
        <div>
            <ul>
                <li>Requirements to be listed on each clue</li>
                <li>Allow abbreviations for coordinate clues</li>
                <li>Maintain a working version</li>
            </ul>
        </div>
    </Layout>
)