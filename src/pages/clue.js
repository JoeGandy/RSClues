import React from "react"
import Layout from "../components/layout";
import ClueSearch from "../components/cluesearch";
import * as json_data from '../data/export.js';
import queryString from 'query-string';

const clues = json_data.export_data;

export default class extends React.Component {

    render() {
        let _GET = queryString.parse(this.props.location.search);
        let id = typeof (_GET.id) !== "undefined" ? _GET.id : -1;
        if (clues[id] === undefined) {
            return <Layout>
                <h1>Clue id is not valid!</h1>
                <ClueSearch title={"Search your next step:"}/>
            </Layout>
        }

        let clue = clues[id];

        return <Layout>
            <ClueSearch title={"Search your next step:"}/>
            <br/>
            <div className="_clue_result">
                {clue.clue_text ? <div>
                    <h2>Clue:</h2>
                    <div dangerouslySetInnerHTML={{__html: clue.clue_text}}/>
                </div> : ""}
                {clue.clue_answer ? <div>
                    <h2>Solution:</h2>
                    <div dangerouslySetInnerHTML={{__html: clue.clue_answer}}/>
                </div> : ""}
                {clue.clue_image ? <div>
                    <h2>Image:</h2>
                    <div dangerouslySetInnerHTML={{__html: clue.clue_image}}/>
                </div> : ""}
            </div>
        </Layout>
    }
}