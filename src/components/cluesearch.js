import React from "react";
import {Typeahead} from 'react-bootstrap-typeahead';
import * as json_data from '../data/export.js';

const clues = json_data.export_data;

export default class ClueSearch extends React.Component {

    static onClueSelect(clues, test) {
        if (clues.length < 1) return;

        let clue = clues[0];
        
        window.location = '/clue?id=' + clue.id;

    }

    render() {
        return <div className="_clue_search">
            <label htmlFor="clue_search"><h1>{this.props.title}</h1>
                <Typeahead
                    name="clue_search"
                    labelKey="clue_text"
                    options={clues}
                    autoFocus
                    minLength={3}
                    renderMenuItemChildren={(option) => (
                        <div>
                            {option.clue_text}
                        </div>
                    )}
                    onChange={ClueSearch.onClueSelect}
                    clearButton={true}

                />
            </label>
        </div>
    }
}