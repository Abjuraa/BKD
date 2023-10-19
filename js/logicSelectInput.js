const labelPage = document.getElementById("dropdown-label");
const iconPage = document.getElementById("dropdown-icon");
const listPage = document.getElementById("dropdown-list");
const infoLabelPage = document.querySelector("#infoSizePage");



function viewSelect (label, icon, list, infoLabel){
    
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

}


viewSelect(labelPage, iconPage, listPage, infoLabelPage);
