const { hot } = require("react-hot-loader/root")

// prefer default export if available
const preferDefault = m => m && m.default || m


exports.components = {
  "component---cache-dev-404-page-js": hot(preferDefault(require("/home/joe/projects/RSClues/.cache/dev-404-page.js"))),
  "component---src-pages-about-js": hot(preferDefault(require("/home/joe/projects/RSClues/src/pages/about.js"))),
  "component---src-pages-changelog-js": hot(preferDefault(require("/home/joe/projects/RSClues/src/pages/changelog.js"))),
  "component---src-pages-clue-js": hot(preferDefault(require("/home/joe/projects/RSClues/src/pages/clue.js"))),
  "component---src-pages-index-js": hot(preferDefault(require("/home/joe/projects/RSClues/src/pages/index.js")))
}

