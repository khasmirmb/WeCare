"use strict";

console.log("test 2");

// CHARTING
const ctx = document.getElementById("adCharts");
console.log(ctx);

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Teen", "Young Adult", "Adults", "Senior", "Disabled", "Mental Ill"],
    datasets: [
      {
        label: "# of Admission",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});