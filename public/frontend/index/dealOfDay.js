//! reverse timer

let future_time = new Date("2024-01-01 23:59:59").getTime();

let x = setInterval(function () {
  let now_time = new Date().getTime();

  let newTime = future_time - now_time;

  let days = Math.floor(newTime / (1000 * 60 * 60 * 24));
  let hours = Math.floor(
    (newTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  let minutes = Math.floor((newTime % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((newTime % (1000 * 60)) / 1000);

  document.getElementById("days").innerHTML =
    days + "<span class='text-gray-600'>Days</span>";
  document.getElementById("hour").innerHTML =
    hours + "<span class='text-gray-600'>Hours</span>";
  document.getElementById("minute").innerHTML =
    minutes + "<span class='text-gray-600'>Min</span>";
  document.getElementById("second").innerHTML =
    seconds + "<span class='text-gray-600'>Sec</span>";

  if (newTime < 0) {
    clearInterval(x);
    document.getElementById("reverseTimer").innerHTML = "FiniSh";
  }
}, 1000);
