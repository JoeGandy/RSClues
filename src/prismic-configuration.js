export default {
    apiEndpoint: 'https://rsclues.cdn.prismic.io/api/v2',

    // -- Links resolution rules
    linkResolver(doc) {
        //if (doc.type === 'page') return `/page/${doc.uid}`;
        return '/';
    },
};