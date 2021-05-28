const modalOpen = document.getElementById("modal-open");
const modalContainer = document.getElementById("modal-container");
const modalClose = document.getElementById("modal-close");

modalOpen.addEventListener("click", function() {
  modalContainer.classList.add("show");
});

modalClose.addEventListener("click", function() {
  modalContainer.classList.remove("show");
});