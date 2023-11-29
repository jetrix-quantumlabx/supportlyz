// Utils

// Handler
const handlerFunction = (handler, element) => {
  return handler.addEventListener("click", () => {
    if (element.classList.contains("hidden")) {
      element.classList.remove("hidden");
      element.classList.add("block");
    } else {
      element.classList.remove("block");
      element.classList.add("hidden");
    }
  });
}

// Notifications
const notificationHandler = document.getElementById("notification-handler");
const notificationCenter = document.getElementById("notification-center");
handlerFunction(notificationHandler, notificationCenter);

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

// Account
const accountHandler = document.getElementById("account-handler");
const accountDropdown = document.getElementById("account-dropdown");
handlerFunction(accountHandler, accountDropdown);

// Status Dropdown
const statusHandler = document.getElementById("status-handler");
const statusDropdown = document.getElementById("status-dropdown");
handlerFunction(statusHandler, statusDropdown);
