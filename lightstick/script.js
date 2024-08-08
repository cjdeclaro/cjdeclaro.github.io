var colors = [
  "#F4A261",
  "#2A9D8F",
  "#E76F51",
  "#264653",
  "#E9C46A",
  "#8A2BE2",
  "#FF6347",
  "#7FFFD4",
  "#FFD700",
  "#FF4500"
]

function myFunction(lastDigit) {
  document.getElementById("body").style.backgroundColor = colors[lastDigit];
}

function triggerAtExactSecond() {
  const now = new Date();
  const millisecondsUntilNextSecond = 1000 - now.getMilliseconds();

  setTimeout(() => {
      const nextNow = new Date();
      const lastDigitOfSecond = nextNow.getSeconds() % 10;

      myFunction(lastDigitOfSecond);
      setInterval(() => {
          const currentNow = new Date();
          const lastDigit = currentNow.getSeconds() % 10;
          myFunction(lastDigit);
      }, 1000);
  }, millisecondsUntilNextSecond);
}

triggerAtExactSecond();
