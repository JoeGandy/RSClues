import React from "react"
import Layout from "../components/layout";
import Prismic from 'prismic-javascript';
import PrismicConfig from "../prismic-configuration";


export default class extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            data: null
        };

        this.buildContext().then((prismicCtx) => {
            prismicCtx.api.query(
                Prismic.Predicates.at('document.type', 'what_is_this_page'),
                {orderings: '[my.what_is_this_page.date desc]'}
            ).then(response => {
                this.setState({data: response.results[0]});
            });
        }).catch((e) => {
            console.error(`Cannot contact the API, check your prismic configuration:\n${e}`);
        });
    }

    render() {
        let data = this.state.data;
        let about_page_loaded = data !== null;

        return <Layout>
            {about_page_loaded ?
                data.data.sections.map(function (section, i) {
                    return <div className="_about_section" key={i}>
                        <h1>{section.section_title[0].text}</h1>
                        <p>{section.section_content[0].text}</p>
                    </div>
                }) : ""}
            {about_page_loaded ?
                <div className="_planned_features">
                    <h1>{data.data.planned_features[0].text}</h1>
                    <div>
                        <ul>
                            {data.data.planned_features1.map(function (planned_feature, i) {
                                return <li key={i}>{planned_feature.feature[0].text}</li>
                            })}
                        </ul>
                    </div>
                </div>
                : <b>Content Loading...</b>}
        </Layout>
    }

    buildContext() {
        const accessToken = PrismicConfig.accessToken;
        return Prismic.api(PrismicConfig.apiEndpoint, {accessToken}).then(api => ({
            api,
            endpoint: PrismicConfig.apiEndpoint,
            accessToken,
            linkResolver: PrismicConfig.linkResolver
        }));
    }
}