import PrismicConfig from '../prismic-configuration'
import Prismic from "prismic-javascript";

export function buildContext() {
    const accessToken = PrismicConfig.accessToken;

    return Prismic.api(PrismicConfig.apiEndpoint, {accessToken}).then(api => ({
        api,
        endpoint: PrismicConfig.apiEndpoint,
        accessToken,
        linkResolver: PrismicConfig.linkResolver
    }));
}