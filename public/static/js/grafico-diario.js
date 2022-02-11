// Color variables based on css variable.
// ----------------------------------------------
const _body = getComputedStyle(document.body);
let primaryColor, textColor, secondaryColor;



// Chart and data variable
// ----------------------------------------------
let networkChart;
const areaData = [
    { periodo: "Dia 01", cadastrado: 94, aprovado: 2 },
    { periodo: "Dia 02", cadastrado: 97, aprovado: 22 },
    { periodo: "Dia 03", cadastrado: 93, aprovado: 7 },
    { periodo: "Dia 04", cadastrado: 92, aprovado: 6 },
    { periodo: "Dia 05", cadastrado: 98, aprovado: 17 },
    { periodo: "Dia 06", cadastrado: 90, aprovado: 15 },
    { periodo: "Dia 07", cadastrado: 80, aprovado: 17 },
    { periodo: "Dia 08", cadastrado: 80, aprovado: 7 },
    { periodo: "Dia 09", cadastrado: 77, aprovado: 18 },
    { periodo: "Dia 10", cadastrado: 96, aprovado: 18 },
    { periodo: "Dia 11", cadastrado: 86, aprovado: 18 },
    { periodo: "Dia 12", cadastrado: 103, aprovado: 29 },
    { periodo: "Dia 13", cadastrado: 100, aprovado: 23 },
    { periodo: "Dia 14", cadastrado: 114, aprovado: 10 },
    { periodo: "Dia 15", cadastrado: 110, aprovado: 22 },
    { periodo: "Dia 16", cadastrado: 109, aprovado: 7 },
    { periodo: "Dia 17", cadastrado: 100, aprovado: 6 },
    { periodo: "Dia 18", cadastrado: 105, aprovado: 17 },
    { periodo: "Dia 19", cadastrado: 110, aprovado: 15 },
    { periodo: "Dia 20", cadastrado: 105, aprovado: 17 },
    { periodo: "Dia 21", cadastrado: 107, aprovado: 7 },
    { periodo: "Dia 22", cadastrado: 60, aprovado: 18 },
    { periodo: "Dia 23", cadastrado: 67, aprovado: 18 },
    { periodo: "Dia 24", cadastrado: 76, aprovado: 18 },
    { periodo: "Dia 25", cadastrado: 73, aprovado: 29 },
    { periodo: "Dia 26", cadastrado: 94, aprovado: 13 },
    { periodo: "Dia 27", cadastrado: 105, aprovado: 2 },
    { periodo: "Dia 28", cadastrado: 115, aprovado: 22 },
    { periodo: "Dia 29", cadastrado: 110, aprovado: 7 },
    { periodo: "Dia 30", cadastrado: 100, aprovado: 6 }
];

const hddData = [
    { periodo: "Seg", data: 57 },
    { periodo: "Ter", data: 69 },
    { periodo: "Qua", data: 70 },
    { periodo: "Qui", data: 62 },
    { periodo: "Sex", data: 73 },
    { periodo: "Sab", data: 79 },
    { periodo: "Dom", data: 76 }
]

const earningData = [
    { periodo: "Seg", data: 57 },
    { periodo: "Ter", data: 69 },
    { periodo: "Qua", data: 70 },
    { periodo: "Qui", data: 62 },
    { periodo: "Sex", data: 73 },
    { periodo: "Sab", data: 79 },
    { periodo: "Dom", data: 76 }
]



// Initialize the chart when the document is ready
// ----------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
    updateColorVars();


    // Network Chart - Area Chart
    networkChart = new Chart(
        document.getElementById("_dm-networkChart"), {
        type: "bar",
        data: {
            datasets: [
                {
                    label: "Cadastradas",
                    data: areaData,
                    borderColor: primaryColor,
                    backgroundColor: primaryColor,
                    fill: "start",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "cadastrado"
                    }
                },
                {
                    label: "Aprovadas",
                    data: areaData,
                    borderColor: secondaryColor,
                    backgroundColor: secondaryColor,
                    fill: "start",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "aprovado"
                    }
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            //resizeDelay: 250,
            plugins: {
                legend: {
                    display: true,
                    align: "start",
                    labels: {
                        boxWidth: 10,
                    }
                },
            },

            interaction: {
                mode: "index",
                intersect: false,
            },

            scales: {
                y: {
                    display: false,
                    suggestedMax: 200,
                },
                x: {
                    grid: {
                        borderWidth: 0,
                        drawOnChartArea: false
                    },
                    ticks: {
                        font: { size: 11 },
                        color: textColor,
                        autoSkip: true,
                        maxRotation: 0,
                        minRotation: 0,
                        maxTicksLimit: 9
                    }
                }
            },

            // Dot width
            radius: 1,

            // Smooth lines
            elements: {
                line: {
                    tension: 0.25
                }
            }
        }
    }
    );



    // HDD  chart - Area chart
    const hddChart = new Chart(
        document.getElementById("_dm-hddChart"), {
        type: "bar",
        data: {
            datasets: [
                {
                    label: "Usage",
                    data: hddData,
                    borderColor: "white",
                    backgroundColor: "rgba(255,255,255,.4)",
                    fill: "start",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "data"
                    }
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            resizeDelay: 250,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    caretSize: 0,
                    yAlign: "center",
                    callbacks: {
                        label: (context) => {
                            let label = context.dataset.label || "";
                            if (context.parsed.y !== null) label += " : " + context.parsed.y + "%";
                            return label;
                        }
                    }
                }
            },

            interaction: {
                mode: "index",
                intersect: false,
            },

            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                }
            },
            radius: 1,
            elements: {
                line: {
                    tension: 0.15
                }
            }
        }
    }
    )


    // Earning chart - Line chart
    const earningChart = new Chart(
        document.getElementById("_dm-earningChart"), {
        type: "bar",
        data: {
            datasets: [
                {
                    label: "Earning",
                    data: earningData,
                    //borderWidth: 2,
                    //borderColor: "white",
                    backgroundColor: "rgba(255,255,255, .6)",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "data"
                    }
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            resizeDelay: 250,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    caretSize: 0,
                    yAlign: "center",
                    callbacks: {
                        label: (context) => {
                            let label = context.dataset.label || "";
                            if (context.parsed.y !== null) label += " : $" + context.parsed.y + ".00";
                            return label;
                        }
                    }
                }
            },

            interaction: {
                mode: "index",
                intersect: false,
            },

            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                }
            },
            radius: .5,
            elements: {
                line: {
                    tension: 0.5
                }
            }
        }
    }
    )



    // Sales Chart - Bar chart
    const salesChart = new Chart(
        document.getElementById("_dm-salesChart"), {
        type: "bar",
        data: {
            datasets: [
                {
                    data: earningData,
                    drawBorder: false,
                    borderRadius: 3,
                    backgroundColor: "rgba(255,255,255, .6)",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "data"
                    }
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            resizeDelay: 250,
            layout: {
                padding: 0
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    caretSize: 0,
                    yAlign: "center",
                    callbacks: {
                        label: (context) => {
                            let label = context.dataset.label || "";
                            if (context.parsed.y !== null) label += ` ${context.parsed.y} Sales`;
                            return label;
                        }
                    }
                }
            },

            interaction: {
                mode: "index",
                intersect: false,
            },

            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                }
            }
        }
    }
    );



    // Task Chart - Horizontal bar
    const taskChart = new Chart(
        document.getElementById("_dm-taskChart"), {
        type: "bar",
        data: {
            datasets: [
                {
                    data: earningData,
                    drawBorder: false,
                    borderRadius: 3,
                    backgroundColor: "rgba(255,255,255, .6)",
                    parsing: {
                        xAxisKey: "periodo",
                        yAxisKey: "data"
                    }
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            resizeDelay: 250,
            layout: {
                padding: 0
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    caretSize: 0,
                    yAlign: "center",
                    callbacks: {
                        label: (context) => {
                            let label = context.dataset.label || "";
                            if (context.parsed.y !== null) label += ` ${context.parsed.y} Sales`;
                            return label;
                        }
                    }
                }
            },

            interaction: {
                mode: "index",
                intersect: false,
            },

            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                }
            }
        }
    }
    );

});




// Update the chart"s colors when the color scheme changes.
// ----------------------------------------------
document.addEventListener("scheme-changed", async () => {

    // Update all color variables
    updateColorVars();

    // Update network chart
    networkChart.data.datasets[0].borderColor = primaryColor;
    networkChart.data.datasets[0].backgroundColor = primaryColor;
    networkChart.data.datasets[1].borderColor = secondaryColor;
    networkChart.data.datasets[1].backgroundColor = secondaryColor;
    networkChart.update();

});



// Get a secondary color based on the selected primary color.
// ----------------------------------------------
let getSecondaryColor = (rgb) => {
    rgb = rgb.split(",");
    let r = rgb[0] / 255, g = rgb[1] / 255, b = rgb[2] / 255;
    let v = Math.max(r, g, b), c = v - Math.min(r, g, b), f = (1 - Math.abs(v + v - c - 1));
    let h = c && ((v == r) ? (g - b) / c : ((v == g) ? 2 + (b - r) / c : 4 + (r - g) / c));
    let l = getBgLightness();

    return hslToHex(Math.round(60 * (h < 0 ? h + 6 : h)), l > 70 ? Math.round(f ? c / f : 0 * 100) + 30 : 15, l > 70 ? .95 : .25);
}



// Convert hsl color to hex
// ----------------------------------------------
function hslToHex(h, s, l) {
    const a = s * Math.min(l, 1 - l) / 100;
    const f = n => {
        const k = (n + h / 30) % 12;
        const color = l - a * Math.max(Math.min(k - 3, 9 - k, 1), -1);
        return Math.round(255 * color).toString(16).padStart(2, '0');   // convert to Hex and prefix "0" if needed
    };
    return `#${f(0)}${f(8)}${f(4)}`;
}



// Get a lighting value from the background to determine if it is a dark or light scheme.
// ----------------------------------------------
let getBgLightness = () => {
    let clr = _body.getPropertyValue("--bs-card-bg-rgb").split(",");
    clr[0] /= 255, clr[1] /= 255, clr[2] /= 255;
    let x = Math.max(clr[0], clr[1], clr[2]), n = x - Math.min(clr[0], clr[1], clr[2]);
    return Math.round((x + x - n) / 2 * 100);
}



// Update colors
// ----------------------------------------------
let updateColorVars = () => {
    primaryColor = _body.getPropertyValue("--bs-comp-active-bg");
    textColor = _body.getPropertyValue("--bs-body-color");
    secondaryColor = getSecondaryColor(_body.getPropertyValue("--bs-primary-rgb"));
    return;
}