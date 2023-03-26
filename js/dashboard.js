"use strict";

console.log("test 1");

// CHARTING
const ctx = document.getElementById("myChart");
console.log(ctx);

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Teen", "Young Adult", "Adults", "Senior", "Disabled", "Mental Ill"],
    datasets: [
      {
        label: "# of Appointments",
        data: [2, 9, 13, 15, 2, 3],
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