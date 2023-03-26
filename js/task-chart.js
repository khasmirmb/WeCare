"use strict";

console.log("test 3");

// CHARTING
const ctx = document.getElementById("taskCharts");
console.log(ctx);

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Feedback", "Admission", "Appointment", "Request", "Account Checked", "Bug Fixes"],
    datasets: [
      {
        label: "# of Task Completed",
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