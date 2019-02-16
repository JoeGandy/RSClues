// prefer default export if available
const preferDefault = m => m && m.default || m

exports.components = {
  "component---cache-dev-404-page-js": () => import("/home/joe/projects/RSClues/.cache/dev-404-page.js" /* webpackChunkName: "component---cache-dev-404-page-js" */),
  "component---src-pages-about-js": () => import("/home/joe/projects/RSClues/src/pages/about.js" /* webpackChunkName: "component---src-pages-about-js" */),
  "component---src-pages-changelog-js": () => import("/home/joe/projects/RSClues/src/pages/changelog.js" /* webpackChunkName: "component---src-pages-changelog-js" */),
  "component---src-pages-clue-js": () => import("/home/joe/projects/RSClues/src/pages/clue.js" /* webpackChunkName: "component---src-pages-clue-js" */),
  "component---src-pages-index-js": () => import("/home/joe/projects/RSClues/src/pages/index.js" /* webpackChunkName: "component---src-pages-index-js" */)
}

exports.data = () => import(/* webpackChunkName: "pages-manifest" */ "/home/joe/projects/RSClues/.cache/data.json")

