(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{139:function(e,t,n){"use strict";n.r(t),n.d(t,"default",function(){return m});var a=n(7),l=n.n(a),c=n(0),r=n.n(c),o=n(153),i=n(188),s=n.n(i),u=n(167),m=function(e){function t(t){var n;return(n=e.call(this,t)||this).state={data:null},n.buildContext().then(function(e){e.api.query(s.a.Predicates.at("document.type","changelog_change"),{orderings:"[my.changelog_change.date desc]"}).then(function(e){n.setState({data:e.results})})}).catch(function(e){console.error("Cannot contact the API, check your prismic configuration:\n"+e)}),n}l()(t,e);var n=t.prototype;return n.render=function(){var e=this.state.data,t=null!==e;return r.a.createElement(o.a,null,r.a.createElement("h1",null,"RsClues - Changelog"),t?r.a.createElement("div",{className:"_changelog"},e.map(function(e,t){return r.a.createElement("div",{className:"_changelog_item",key:t},r.a.createElement("h3",null,e.data.date),r.a.createElement("ul",null,e.data.changes.map(function(e,t){return r.a.createElement("li",{key:t},"- ",e.change[0].text)})))})):"Content is Loading...",r.a.createElement("br",null))},n.buildContext=function(){var e=u.a.accessToken;return s.a.api(u.a.apiEndpoint,{accessToken:e}).then(function(t){return{api:t,endpoint:u.a.apiEndpoint,accessToken:e,linkResolver:u.a.linkResolver}})},t}(r.a.Component)},153:function(e,t,n){"use strict";var a=n(7),l=n.n(a),c=n(0),r=n.n(c),o=n(186),i=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){var e="undefined"!=typeof window;return r.a.createElement("div",{className:"_header"},r.a.createElement("div",{className:"_logo"},r.a.createElement("a",{href:"/"},"RSClues")),r.a.createElement("div",{className:"_links"},r.a.createElement("a",{href:"/",title:"Clue Solver",className:e&&"/"===window.location.pathname?"active":""},r.a.createElement(o.c,null),r.a.createElement("span",null,"Clue Solver")),r.a.createElement("a",{href:"/about",title:"What is this",className:!e||"/about"!==window.location.pathname&&"/about/"!==window.location.pathname?"":"active"},r.a.createElement(o.b,null),r.a.createElement("span",null,"What is this")),r.a.createElement("a",{href:"/changelog",title:"Changelog",className:!e||"/changelog"!==window.location.pathname&&"/changelog/"!==window.location.pathname?"":"active"},r.a.createElement(o.a,null),r.a.createElement("span",null,"Changelog"))))},t}(c.Component),s=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){return r.a.createElement("div",{className:"_footer"},r.a.createElement("p",null,r.a.createElement("a",{href:"/about"},"What is this?"),r.a.createElement("a",{href:"https://www.reddit.com/r/2007scape/comments/37a8mg/clue_solver_i_made_in_my_free_time_let_me_know/"},"Main Reddit post")),r.a.createElement("p",null,"Thanks to the ",r.a.createElement("a",{href:"http://2007.runescape.wikia.com/wiki/2007scape_Wiki"},"OSRS wikia")," for the clue scroll data"),r.a.createElement("p",null,"Contribute to this project on ",r.a.createElement("a",{href:"https://github.com/JoeGandy/RSClues"},"Github")))},t}(c.Component),u=n(166),m=n.n(u);n.d(t,"a",function(){return h}),n(154);var h=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){return r.a.createElement("div",{className:"_main_content_wrapper"},r.a.createElement(m.a,{title:"RSClues - Old School Runescape"},r.a.createElement("meta",{charSet:"utf-8"}),r.a.createElement("meta",{name:"description",content:"RSClues an oldschool runescape clue solver, desigin to make solving clues simple and quick osrs"}),r.a.createElement("meta",{name:"keywords",content:"rsclues clue solver runescape solution oldschool osrs"}),r.a.createElement("html",{lang:"en"})),r.a.createElement(i,null),r.a.createElement("div",{className:"_main_window"},r.a.createElement("div",{className:"_main_window_content"},this.props.children,r.a.createElement(s,null),r.a.createElement("div",{style:{clear:"both"}}))))},t}(r.a.Component)},154:function(e,t,n){},167:function(e,t,n){"use strict";t.a={apiEndpoint:"https://rsclues.cdn.prismic.io/api/v2",linkResolver:function(e){return"/"}}}}]);
//# sourceMappingURL=component---src-pages-changelog-js-1077f9dbe16813950317.js.map