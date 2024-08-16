// COLOR MODES

var colorScheme = "light";
var invert = "dark";

if (window.matchMedia) {
  colorScheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light";
}

function set() {
  document.getElementById("body").setAttribute("data-bs-theme", colorScheme);
  invert = colorScheme == "light" ? "dark" : "light";
  document.getElementById("btn-mode").innerHTML = invert.toUpperCase() + " MODE";
}

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
  colorScheme = event.matches ? "dark" : "light";
  set();
});

function changeMode() {
  colorScheme = colorScheme == "light" ? "dark" : "light";
  set();
}

set();