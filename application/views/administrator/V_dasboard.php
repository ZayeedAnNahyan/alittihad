<div class="card">
    <div class="card-header">
        <h3 class="text-uppercase text-center font-weight-bold" style="color: #000;">PENERIMAAN BEASISWA SMP IT AL-ITTIHAD KOTA BEKASI</h3>
    </div>
    <div class="card-body">
        <canvas id="myChart"></canvas>
    </div>
    <div class="card-footer">

    </div>
</div>
<!--scrip chart-->
<script>
    window.onload = function () {
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['20171', '20172', '20181', '20182', '20191', '20192'],
                datasets: [{
                        label: 'penerima beasiswa',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                }
            }
        });
    };
</script>