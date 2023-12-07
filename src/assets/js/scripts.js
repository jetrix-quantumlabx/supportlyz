// Utils

// Toggle Classes
// Sirve para cambiar de una clase a otra
const toggleClasses = (element, class1, class2) => {
  if (element.classList.contains(class1)) {
    element.classList.remove(class1);
    element.classList.add(class2);
  } else {
    element.classList.remove(class2);
    element.classList.add(class1);
  }
};

// Click Away
// Sirve para cerrar un dropdown al hacer click fuera de él

// TODO: Solucionar bug que hace que se cierre el dropdown al hacer click en el handler
const handleClickAway = (event, handler, dropdown) => {
  const isClickInside =
    handler.contains(event.target) || dropdown.contains(event.target);

  if (!isClickInside) {
    toggleClasses(dropdown, "block", "hidden");
  }

  // if (!isClickInside) {
  //   dropdown.classList.remove("block");
  // }
};

// Handler Click
// Sirve para mostrar y ocultar un dropdown al hacer click en un elemento
const handlerToggleDisplay = (handler, element) => {
  handler?.addEventListener("click", () =>
    toggleClasses(element, "hidden", "block")
  );
};

// Sirve para agregar y quitar una clase al hacer click en un elemento
const handlerToggleClass = (handler, class1, class2, element) => {
  handler?.addEventListener("click", () =>
    toggleClasses(element, class1, class2)
  );
};

// Handler Mouseover
// Sirve para mostrar y ocultar un elemento al pasar el mouse sobre otro
const handleMouseOver = (sidebarLabel) =>
  toggleClasses(sidebarLabel, "opacity-0", "opacity-1");

// Handler Mouseout
// Sirve para mostrar y ocultar un elemento al pasar el mouse sobre otro
const handleMouseOut = (sidebarLabel) =>
  toggleClasses(sidebarLabel, "opacity-1", "opacity-0");

// Notifications
const notificationHandler = document.querySelector(".notification-handler");
const notificationCenter = document.querySelector(".notification-center");
handlerToggleDisplay(notificationHandler, notificationCenter);

// document.addEventListener("click", (event) =>
//   handleClickAway(event, notificationHandler, notificationCenter)
// );

// Sidebar
const sidebarHandlers = document.getElementsByClassName("sidebar-handler");
const sidebarLabels = document.getElementsByClassName("sidebar-label");

[...sidebarHandlers].forEach((sidebarHandler, i) => {
  sidebarHandler.addEventListener("mouseover", () =>
    handleMouseOver(sidebarLabels[i])
  );
  sidebarHandler.addEventListener("mouseout", () =>
    handleMouseOut(sidebarLabels[i])
  );
});

// Account
const accountHandler = document.getElementById("account-handler");
const accountDropdown = document.getElementById("account-dropdown");

handlerToggleDisplay(accountHandler, accountDropdown);


// Status Dropdown
const statusHandler = document.getElementById("status-handler");
const statusDropdown = document.getElementById("status-dropdown");

handlerToggleDisplay(statusHandler, statusDropdown);

// Language Dropdown
const languageHandler = document.querySelector(".language-handler");
const languageDropdown = document.querySelector(".language-dropdown");

handlerToggleDisplay(languageHandler, languageDropdown);

// Chatbot
const chatbotHandler = document.querySelector(".chatbot-handler");
const chatbotIcon = document.querySelector(".chatbot-icon");
const chatbotBox = document.querySelector(".chatbot-box");
const chatbotBoxClose = document.querySelector(".chatbot-box-close");
const chatbotEmojisBox = document.querySelector(".chatbot-emojis-box");
const chatbotEmojisHandler = document.querySelector(".chatbot-emojis-handler");
const chatbotNotificationHandler = document.querySelector(
  ".chatbot-notification-handler"
);
const chatbotNotificationBox = document.querySelector(
  ".chatbot-notification-box"
);
const chatbotRatingHandler = document.querySelector(".chatbot-rating-handler");
const chatbotRatingBox = document.querySelector(".chatbot-rating-box");

// Hover Handler
chatbotHandler.addEventListener("mouseover", () =>
  toggleClasses(chatbotIcon, "icon-pen", "icon-message")
);

// Hover Handler
chatbotHandler.addEventListener("mouseout", () =>
  toggleClasses(chatbotIcon, "icon-message", "icon-pen")
);

// Muestra el Chat
handlerToggleClass(chatbotHandler, "chatbot-box", "chatbot-box-is-active", chatbotBox);

// Oculta el Chat
handlerToggleClass(chatbotBoxClose, "chatbot-box-is-active", "chatbot-box", chatbotBox);

// Muestra y oculta el box de emojis
handlerToggleClass(
  chatbotEmojisHandler,
  "chatbot-emojis-box",
  "chatbot-emojis-box-is-active",
  chatbotEmojisBox
);

// Muestra y oculta el box de notifications
handlerToggleClass(
  chatbotNotificationHandler,
  "chatbot-notification-box",
  "chatbot-notification-box-is-active",
  chatbotNotificationBox
);

// Muestra y oculta el box de rating
handlerToggleClass(
  chatbotRatingHandler,
  "chatbot-rating-box",
  "chatbot-rating-box-is-active",
  chatbotRatingBox
);
