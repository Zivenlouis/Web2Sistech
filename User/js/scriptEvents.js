let button = document.getElementById("details");
button.addEventListener("click", () => {
  let element = $(".container-2");
  const rect = element.offset();
  const y = rect.top;
  setTimeout(function () {
    window.scrollTo({ top: y, behavior: "smooth" });
  }, 300);
});
