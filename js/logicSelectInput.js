const label = document.getElementById("dropdown-label");
const icon = document.getElementById("dropdown-icon");
const list = document.getElementById("dropdown-list");
const infoLabel = document.querySelector("#infoSizePage");

label.addEventListener("click", () => {
  list.classList.toggle("active");
  label.classList.toggle("active");
});

list.addEventListener("click", (e) => {
  if (e.target.tagName === "LI") {
    label.innerHTML = e.target.textContent + `<i class="ri-arrow-down-s-line"></i>`;
    infoLabel.innerHTML = e.target.textContent;
    list.classList.remove("active");
    label.classList.remove("active");
  }
});

document.addEventListener("click", (e) => {
  if (e.target !== label && e.target !== icon) {
    list.classList.remove("active");
    label.classList.remove("active");
  }
});