function createLineObject(x, y, name, color) {
    return {
        x: x,
        y: y,
        mode: 'lines',
        name: name,
        line: {
            dash: 'dot',
            width: 4,
            color: color
        }
    }
}

function createBarObject(x, y, name, color) {
    return {
        x: x,
        y: y,
        type: 'bar',
        name: name,
        width: 0.4,
        marker: {
            color: color,
            line: {
                width: 2
            }
        }
    }
}

function createGraph(elementId, data, layout) {
    Plotly.newPlot(elementId, data, layout, {
        displayModeBar: false
    });
}

var dateArray = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']

console.log(vegeVal);
// vegeVal = [2, 4, 3, 4, 5, , , ]
// fruitsVal = [2, 4, 3, 4, 5, 2, 2]
// dairyVal = [2, 4, 3, 4, 1, 2, 2]

var vege1 = createLineObject(dateArray, vegeVal, 'Vege', 'rgb(32, 165, 98)');
var vege2 = createBarObject(dateArray, vegeVal, 'Vege', 'rgb(37, 212, 124)');

var fruits1 = createLineObject(dateArray, fruitsVal, 'Fruits', 'rgb(217, 176, 72)');
var fruits2 = createBarObject(dateArray, fruitsVal, 'Fruits', 'rgb(255, 205, 78)');

var dairy1 = createLineObject(dateArray, dairyVal, 'Dairy', 'rgb(193, 171, 130)');
var dairy2 = createBarObject(dateArray, dairyVal, 'Dairy', 'rgb(224, 198, 148)');

var snack1 = createLineObject(dateArray, snackVal, 'Snack', 'rgb( 181, 60, 0)');
var snack2 = createBarObject(dateArray, snackVal, 'Snack', 'rgb(245, 113, 84)');

var vege = [vege1, vege2];
var fruits = [fruits1, fruits2];
var dairy = [dairy1, dairy2];
var snack = [snack1, snack2];

createGraph('vege', vege, {
    title: 'Vegetable',
    showlegend: false
});
createGraph('fruits', fruits, {
    title: 'Fruits',
    showlegend: false
});
createGraph('dairy', dairy, {
    title: 'Dairy',
    showlegend: false
});
createGraph('snack', snack, {
    title: 'Snack',
    showlegend: false
});