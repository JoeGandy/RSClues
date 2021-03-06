import React from "react"
import Header from "./header";
import Footer from "./footer";
import Helmet from "react-helmet";
require('../scss/main.scss');

export default class extends React.Component {
    render(){
        return <div className="_main_content_wrapper">
            <Helmet title={"RSClues - Old School Runescape"}>
                <meta charSet="utf-8"/>
                <meta name="description"
                      content="RSClues an oldschool runescape clue solver, desigin to make solving clues simple and quick osrs"/>
                <meta name="keywords" content="rsclues clue solver runescape solution oldschool osrs"/>
                <html lang="en"/>
            </Helmet>
            <Header/>
            <div className="_main_window">
                <div className="_main_window_content">
                    {this.props.children}
                    <Footer/>
                    <div style={{clear: 'both'}}/>
                </div>
            </div>
        </div>
    }
}