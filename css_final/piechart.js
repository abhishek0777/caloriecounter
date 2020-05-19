 Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'What should be include in your meal'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'contains',
        colorByPoint: true,
        data: [{
            name: 'Carbohydrates',
            y: 33.00,
            sliced: true,
            selected: true
        }, {
            name: 'Protein',
            y: 12.00
        }, {
            name: 'Fats & Sugars',
            y: 7.00
        }, {
            name: 'Milk & Dairy Products',
            y: 15.00
        }, {
            name: 'Fruit & Vegetables',
            y: 33.00
        }]
    }]
});