// Notifications
const notificationHandler = document.getElementById("notification-handler");
const notificationCenter = document.getElementById("notification-center");

notificationHandler.addEventListener("click", () => {
  if (notificationCenter.classList.contains("hidden")) {
    notificationCenter.classList.remove("hidden");
    notificationCenter.classList.add("block");
  } else {
    notificationCenter.classList.remove("block");
    notificationCenter.classList.add("hidden");
  }
});

// Sidebar
const sidebarHandlers = document.getElementsByClassName("sidebar-handler");
const sidebarLabels = document.getElementsByClassName("sidebar-label");

[...sidebarHandlers].forEach((sidebarHandler, i) => {
  let resetTimeout = 0;

  sidebarHandler.addEventListener("mouseover", () => {
    clearTimeout(resetTimeout);
    resetTimeout = setTimeout(() => {
      if (sidebarLabels[i].classList.contains("opacity-0")) {
        sidebarLabels[i].classList.remove("opacity-0");
        sidebarLabels[i].classList.add("opacity-1");
      }
    }, 500);
  });
  sidebarHandler.addEventListener("mouseout", () => {
    clearTimeout(resetTimeout);
    if (sidebarLabels[i].classList.contains("opacity-1")) {
      sidebarLabels[i].classList.remove("opacity-1");
      sidebarLabels[i].classList.add("opacity-0");
    }
  });
});

// Sidebar
