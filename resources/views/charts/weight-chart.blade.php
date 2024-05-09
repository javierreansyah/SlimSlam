<canvas id="weightChart" width="800" height="400"></canvas>

<script>
    var ctx = document.getElementById('weightChart').getContext('2d');
    var weightData = {!! json_encode($weightData) !!};
    var dates = {!! json_encode($dates) !!};

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Weight',
                data: weightData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        unit: 'day'
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'Weight'
                    }
                }]
            }
        }
    });
</script>
