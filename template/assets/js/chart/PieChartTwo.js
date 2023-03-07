const pieChartTwo = document.getElementById('pieChartTwo');
new Chart(pieChartTwo, {
    type: 'pie',
    data: {
        labels: ['Phòng nhân sự', 'Phòng Marketing', 'Phòng Tuyển Dụng', 'Phòng Kiếm Soát'],
        datasets: [
            {
                label: '# of Votes',
                data: [10, 5, 30, 55],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            y: {
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
