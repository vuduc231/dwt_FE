const doughnut = document.getElementById('doughnutChart');

new Chart(doughnut, {
    type: 'doughnut',
    data: {
        labels: ['Phòng nhân sự', 'Phòng Marketing', 'Phòng Tuyển Dụng', 'Phòng Kiếm Soát'],
        datasets: [
            {
                label: '# of Votes',
                data: [12, 19, 3, 5],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: {
                scaleLabel: {
                    display: true,
                    labelString: 'probability',
                },
                ticks: {
                    beginAtZero: true,
                },
            },
        },
        plugins: {
            legend: {
                position: 'right',
                labels: {
                    usePointStyle: true,
                    pointStyle: 'rectRounded',
                },
            },
            tooltip: { enabled: false },
        },
    },
});
