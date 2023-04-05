$(document).ready(function () {
    showGraph();
});

const showGraph = () => {
    {
        $.post("../../include/data.php",function (data)
        {
            console.log(data);
            var name = [];
            var marks = [];

            for (var i in data) {
                name.push(data[i].LEVEL);
                marks.push(data[i].TOTAL);
            }

            var chartdata = {
                labels: name,
                datasets: [
                    {
                        label: 'Grade Level',
                        backgroundColor: ['#A5DADE', '#FCE096', '#FFB282', '#E5A9AB'],
                        hoverBackgroundColor: '#D2DD9B',
                        data: marks,
                        barPercentage: 1.0,
                        categoryPercentage: 1.0
                        
                    }
                ],
            };

            var graphTarget = $("#graph");

            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    }
}