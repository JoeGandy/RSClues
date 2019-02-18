(window.webpackJsonp=window.webpackJsonp||[]).push([[6],{138:function(e,t,n){"use strict";n.r(t),n.d(t,"default",function(){return m});var a=n(7),l=n.n(a),r=n(0),c=n.n(r),o=n(153),i=n(168),s=n.n(i),u=n(155),m=function(e){function t(t){var n;return(n=e.call(this,t)||this).state={data:null},n.buildContext().then(function(e){e.api.query(s.a.Predicates.at("document.type","what_is_this_page"),{orderings:"[my.what_is_this_page.date desc]"}).then(function(e){n.setState({data:e.results[0]})})}).catch(function(e){console.error("Cannot contact the API, check your prismic configuration:\n"+e)}),n}l()(t,e);var n=t.prototype;return n.render=function(){var e=this.state.data,t=null!==e;return c.a.createElement(o.a,null,t?e.data.sections.map(function(e,t){return c.a.createElement("div",{className:"_about_section",key:t},c.a.createElement("h1",null,e.section_title[0].text),c.a.createElement("p",null,e.section_content[0].text))}):"",t?c.a.createElement("div",{className:"_planned_features"},c.a.createElement("h1",null,e.data.planned_features[0].text),c.a.createElement("div",null,c.a.createElement("ul",null,e.data.planned_features1.map(function(e,t){return c.a.createElement("li",{key:t},e.feature[0].text)})))):c.a.createElement("b",null,"Content Loading..."))},n.buildContext=function(){var e=u.a.accessToken;return s.a.api(u.a.apiEndpoint,{accessToken:e}).then(function(t){return{api:t,endpoint:u.a.apiEndpoint,accessToken:e,linkResolver:u.a.linkResolver}})},t}(c.a.Component)},153:function(e,t,n){"use strict";var a=n(7),l=n.n(a),r=n(0),c=n.n(r),o=n(187),i=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){var e="undefined"!=typeof window;return c.a.createElement("div",{className:"_header"},c.a.createElement("div",{className:"_logo"},c.a.createElement("a",{href:"/"},"RSClues")),c.a.createElement("div",{className:"_links"},c.a.createElement("a",{href:"/",title:"Clue Solver",className:e&&"/"===window.location.pathname?"active":""},c.a.createElement(o.c,null),c.a.createElement("span",null,"Clue Solver")),c.a.createElement("a",{href:"/about",title:"What is this",className:!e||"/about"!==window.location.pathname&&"/about/"!==window.location.pathname?"":"active"},c.a.createElement(o.b,null),c.a.createElement("span",null,"What is this")),c.a.createElement("a",{href:"/changelog",title:"Changelog",className:!e||"/changelog"!==window.location.pathname&&"/changelog/"!==window.location.pathname?"":"active"},c.a.createElement(o.a,null),c.a.createElement("span",null,"Changelog"))))},t}(r.Component),s=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){return c.a.createElement("div",{className:"_footer"},c.a.createElement("p",null,c.a.createElement("a",{href:"/about"},"What is this?"),c.a.createElement("a",{href:"https://www.reddit.com/r/2007scape/comments/37a8mg/clue_solver_i_made_in_my_free_time_let_me_know/"},"Main Reddit post")),c.a.createElement("p",null,"Thanks to the ",c.a.createElement("a",{href:"http://2007.runescape.wikia.com/wiki/2007scape_Wiki"},"OSRS wikia")," for the clue scroll data"),c.a.createElement("p",null,"Contribute to this project on ",c.a.createElement("a",{href:"https://github.com/JoeGandy/RSClues"},"Github")))},t}(r.Component),u=n(167),m=n.n(u);n.d(t,"a",function(){return p}),n(154);var p=function(e){function t(){return e.apply(this,arguments)||this}return l()(t,e),t.prototype.render=function(){return c.a.createElement("div",{className:"_main_content_wrapper"},c.a.createElement(m.a,{title:"RSClues - Old School Runescape"},c.a.createElement("meta",{charSet:"utf-8"}),c.a.createElement("meta",{name:"description",content:"RSClues an oldschool runescape clue solver, desigin to make solving clues simple and quick osrs"}),c.a.createElement("meta",{name:"keywords",content:"rsclues clue solver runescape solution oldschool osrs"}),c.a.createElement("html",{lang:"en"})),c.a.createElement(i,null),c.a.createElement("div",{className:"_main_window"},c.a.createElement("div",{className:"_main_window_content"},this.props.children,c.a.createElement(s,null),c.a.createElement("div",{style:{clear:"both"}}))))},t}(c.a.Component)},154:function(e,t,n){},155:function(e,t,n){"use strict";t.a={apiEndpoint:"https://rsclues.cdn.prismic.io/api/v2",linkResolver:function(e){return"/"}}}}]);
//# sourceMappingURL=component---src-pages-about-js-a878995bb3b8455d23ff.js.map