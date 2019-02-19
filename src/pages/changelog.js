import React from "react"
import Layout from "../components/layout";
import Prismic from "prismic-javascript";
import * as PrismicHelper from "../data/prismic";


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
            <h1>RsClues - Changelog</h1>
            {!change_log_loaded ? "Content is Loading..." : <div className="_changelog">
                {data.map(function (change, i) {
                    return <div className="_changelog_item" key={i}>
                        <h3>{change.data.date}</h3>
                        <ul>
                            {change.data.changes.map(function (change_item, i) {
                                return <li key={i}>- {change_item.change[0].text}</li>
                            })}
                        </ul>
                    </div>
                })}
            </div>
            }
            <br />
        </Layout>
    }
}