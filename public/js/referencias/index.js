import funciones from "./funciuones.js";
// import './modales.js';
//import { paintRow, addDataRow } from "./sources.js";

const d = document;
const w = window;
console.log("adsasd");
d.addEventListener("DOMContentLoaded", (e) => {
    console.log("asdasdas");
    General.initComponents();
});
d.addEventListener("animationend", (e) => {
    if (e.animationName === "pulse") {
        e.target.classList.remove("animate__pulse");
    }
});
d.addEventListener("mouseover", (e) => {
    if (e.target.matches("#logo-esys")) {
        e.target.classList.add("animate__animated", "animate__pulse");
    }
});
w.addEventListener("error", (e) => {
    console.log(e.target);
});
w.addEventListener("storage", (e) => {
    console.log(e);
});

addDataRow();
paintRow();
