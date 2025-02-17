document.getElementById("toggleSidebar").addEventListener("click", function () {
  let sidebar = document.getElementById("sidebar");
  let mainContent = document.querySelector(".main-content");

  // Only toggle sidebar on mobile (max-width: 768px)
  if (window.innerWidth <= 768) {
    sidebar.classList.toggle("open");
    mainContent.classList.toggle("open");
  }
});

// Date & Time Auto Update
function updateDateTime() {
  let now = new Date();
  let dateTimeStr = now.toLocaleDateString() + " " + now.toLocaleTimeString();
  document.getElementById("datetime").textContent = dateTimeStr;
}
setInterval(updateDateTime, 1000);
updateDateTime();
