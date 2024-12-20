import './bootstrap';
import OrgChart from 'orgchart';
import 'orgchart/dist/css/orgchart.css';

let chart = new OrgChart("#tree", {
    // options
    nodeBinding: {
        field_0: "name"
    },
    nodes: [
        { id: 1, name: "Amber McKenzie" },
        { id: 2, pid: 1, name: "Ava Field" },
        { id: 3, pid: 1, name: "Peter Stevens" }
    ]
});