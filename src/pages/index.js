import React from "react";
import Layout from "../components/layout";
import ClueSearch from "../components/cluesearch";

export default () => (
    <Layout>
        <ClueSearch title={"Start typing your clue below:"}/>
        <div className="_latest_news">
            <h6>Latest update: </h6>
            <p>The whole site has been rebuilt again, i apologise profusely for this downtime, it shouldn't ever
                happen again</p>
        </div>
    </Layout>
)