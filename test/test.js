function setStartingGrid() {
  let gameDiv = document.getElementById("game");
  for (let i = 0; i < 50; i++) {
    let row = document.createElement("div");
    row.classList.add("row");
    for (let j = 0; j < 50; j++) {
      let num = i * 50 + j;
      let button = document.createElement("button");
      button.classList.add("testButton");
      button.setAttribute("id", num);
      row.appendChild(button);
      button.setAttribute("onclick", "gridClicked(this.id)");
      button.setAttribute("value", "1");
      // button
      // let n = num.toString();
      // row.innerHTML += "<input type='button' id='"+n+"' onclick='gridClicked(this.id);' style='width:10px;height:10px;' >";
      // row.innerHTML += "</div>";
    }
    gameDiv.appendChild(row);
  }
}

function gridClicked(clickedId) {
  let button = document.getElementById(clickedId);
  // button.remo
if(button.style.backgroundColor != "red"){
  button.style.backgroundColor = "red";

}
else{
button.style.backgroundColor = "white";
}
}

setStartingGrid();
