let cells;
let newCells;
let start = false;
let intervalId;
let numRows = 50;
let numCols = 50;

window.onload = () => {
  cells = createCells();
  setStartingGrid();
};

function setStartingGrid() {
  let gameDiv = document.getElementById("game");
  for (let i = 0; i < numRows; i++) {
    let row = document.createElement("div");
    row.classList.add("row");
    for (let j = 0; j < numCols; j++) {
      let num = i * numRows + j;
      let button = document.createElement("button");
      button.classList.add("testButton");
      button.setAttribute("id", num);
      row.appendChild(button);
      button.setAttribute("onclick", "gridClicked(this.id)");
    }
    gameDiv.appendChild(row);
  }
}

function createCells() {
  let arr = [numRows];
  for (let x = 0; x < numRows; x++) {
    let cols = [numCols];
    for (let y = 0; y < numCols; y++) {
      cols[y] = false;
    }
    arr[x] = cols;
  }
  return arr;
}

function gridClicked(clickedId) {
  let button = document.getElementById(clickedId);
  let x = Math.floor(clickedId / numRows);
  let y = clickedId % numCols;
  if (cells[x][y] == true) {
    cells[x][y] = false;
  } else {
    cells[x][y] = true;
  }
  drawCells();
}

function showPattern(value) {
  start = false;
  clearInterval(intervalId);
  switch (value) {
    case "block":
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      cells[24][24] = true;
      cells[24][25] = true;
      cells[25][24] = true;
      cells[25][25] = true;
      drawCells();
      break;
    case "blinker":
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      cells[24][23] = true;
      cells[24][24] = true;
      cells[24][25] = true;
      drawCells();
      break;
    case "beacon":
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      cells[23][23] = true;
      cells[23][24] = true;
      cells[24][23] = true;
      cells[26][25] = true;
      cells[26][26] = true;
      cells[25][26] = true;
      drawCells();
      break;
    case "glider":
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      cells[24][24] = true;
      cells[25][25] = true;
      cells[26][23] = true;
      cells[26][24] = true;
      cells[26][25] = true;
      drawCells();
      break;
    case "random":
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      for (let y = 0; y < numRows; y++) {
        for (let x = 0; x < numCols; x++) {
          if (Math.random() < 0.5) cells[x][y] = true;
        }
      }
      drawCells();
      break;
    default:
      for (let i = 0; i < numRows; i++) {
        cells[i].fill(false);
      }
      drawCells();
  }
}

function drawCells() {
  for (let x = 0; x < numRows; x++) {
    for (let y = 0; y < numCols; y++) {
      let num = x * numRows + y;
      let button = document.getElementById(num);
      if (cells[x][y]) {
        button.style.backgroundColor = "red";
      } else {
        button.style.backgroundColor = "white";
      }
    }
  }
}

function step() {
  newCells = createCells();
  for (let y = 0; y < numRows; y++) {
    for (let x = 0; x < numCols; x++) {
      const neighbors = getNeighborNumber(x, y);
      if (cells[x][y] && neighbors >= 2 && neighbors <= 3)
        newCells[x][y] = true;
      else if (!cells[x][y] && neighbors == 3) newCells[x][y] = true;
    }
  }
  cells = newCells;
  drawCells();
}

function getNeighborNumber(x, y) {
  let count = 0;
  for (let yy = -1; yy < 2; yy++) {
    for (let xx = -1; xx < 2; xx++) {
      if (yy === 0 && xx === 0) continue;
      if (x + xx < 0 || x + xx > numRows - 1) continue;
      if (y + yy < 0 || y + yy > numCols - 1) continue;
      if (cells[x + xx][y + yy]) count++;
    }
  }
  return count;
}

function startGame() {
  if (!start) {
    start = true;
    intervalId = setInterval(step, 100);
  }
}

function stopGame() {
  clearInterval(intervalId);
  start = false;
}

function resetGame() {
  location.reload();
}
