"use strict";
const muinus = document.getElementById("minus");
const input = document.getElementById("input");
const plus = document.getElementById("plus");

if () {
  muinus.addEventListener("click", () => {
    console.log("minus");
    input.value--;
  });
}

plus.addEventListener("click", () => {
  console.log("plus");
  input.value++;
});
