import React from "react";
import Layout from "../components/layout";
import ClueSearch from "../components/cluesearch";
import * as PrismicHelper from "../data/prismic"
import Prismic from "prismic-javascript";


export default class extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            data: null
        };

        PrismicHelper.buildContext().then((context) => {
            context.api.query(
                Prismic.Predicates.at('document.type', 'changelog_change'),
                {orderings: '[my.changelog_change.date desc]'}
            ).then(response => {
                this.setState({data: response.results});
            });
        }).catch((e) => {
            console.error(`Cannot contact the API, check your prismic configuration:\n${e}`);
        });
    }

    render() {
        let data = this.state.data;
        let change_log_loaded = data !== null;

        return <Layout>
            <ClueSearch title={"Start typing your clue below:"}/>
            {!change_log_loaded ? "Content is Loading..." : <div className="_latest_news">
                <h6>Latest update ({data[0].data.date}): </h6>
                <ul>
                    {data[0].data.changes.map(function (change_item, i) {
                        return <li key={i}>- {change_item.change[0].text}</li>
                    })}
                </ul>
            </div>}
        </Layout>
    }
}