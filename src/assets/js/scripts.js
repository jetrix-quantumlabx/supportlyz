(function () {
  function init() {
    /**
     * Toggles between two classes on an element.
     * @param {HTMLElement} element - The element to toggle classes on.
     * @param {string} class1 - The first class to toggle.
     * @param {string} class2 - The second class to toggle.
     */
    const toggleClasses = (element, class1, class2) => {
      element.classList.toggle(class1);
      element.classList.toggle(class2);
    };

    /**
     * Toggles classes on an element based on an event and event handler.
     *
     * @param {string} event - The event to listen for.
     * @param {HTMLElement} handler - The event handler element.
     * @param {string} class1 - The first class to toggle.
     * @param {string} class2 - The second class to toggle.
     * @param {HTMLElement} element - The element on which to toggle the classes.
     */
    const toggleClassWithEvent = (event, handler, class1, class2, element) => {
      if (!handler) return;
      handler.addEventListener(event, () =>
        toggleClasses(element, class1, class2)
      );
    };

    /**
     *************** ACCOUNT DROPDOWN ****************
     */
    const account = document.querySelector(".account");
    const accountHandler = document.querySelector(".account-handler");
    const accountDropdown = document.querySelector(".account-dropdown");
    const accountMessageIcon = document.querySelector(".account-message-icon");

    toggleClassWithEvent(
      "click",
      accountHandler,
      "account",
      "account-is-active",
      account
    );

    toggleClassWithEvent(
      "click",
      accountHandler,
      "account-dropdown",
      "account-dropdown-is-active",
      accountDropdown
    );

    toggleClassWithEvent(
      "click",
      accountHandler,
      "account-message-icon",
      "account-message-icon-is-active",
      accountMessageIcon
    );

    /**
     *************** ACCOUNT WEBSITE ****************
     */

    const websiteHandler = document.querySelector(".website-handler");
    const websiteDropdown = document.querySelector(".website-dropdown");

    toggleClassWithEvent(
      "click",
      websiteHandler,
      "website-dropdown",
      "website-dropdown-is-active",
      websiteDropdown
    );

    /**
     *************** STATUS DROPDOWN ****************
     */
    const statusHandler = document.querySelector(".status-handler");
    const statusDropdown = document.querySelector(".status-dropdown");

    toggleClassWithEvent(
      "click",
      statusHandler,
      "status-dropdown",
      "status-dropdown-is-active",
      statusDropdown
    );

    /**
     *************** SITE LANGUAGE DROPDOWN ****************
     */
    const languageHandler = document.querySelector(".language-handler");
    const languageDropdown = document.querySelector(".language-dropdown");

    toggleClassWithEvent(
      "click",
      languageHandler,
      "language-dropdown",
      "language-dropdown-is-active",
      languageDropdown
    );

    /**
     *************** CHAT CONFIG LANGUAGE ****************
     */
    const chatLanguageHandler = document.querySelector(
      ".chat-language-handler"
    );
    const chatLanguageDropdown = document.querySelector(
      ".chat-language-dropdown"
    );

    toggleClassWithEvent(
      "click",
      chatLanguageHandler,
      "chat-language-dropdown",
      "chat-language-dropdown-is-active",
      chatLanguageDropdown
    );

    /**
     *************** NOTIFICATIONS ****************
     */
    const notificationHandler = document.querySelector(".notification-handler");
    const notificationCenter = document.querySelector(".notification-center");

    toggleClassWithEvent(
      "click",
      notificationHandler,
      "notification-center",
      "notification-center-is-active",
      notificationCenter
    );

    toggleClassWithEvent(
      "click",
      notificationHandler,
      "button-icon",
      "button-icon-is-active",
      notificationHandler
    );

    /**
     *************** SEARCH ****************
     */
    const searchHandler = document.querySelector(".search-input");
    const searchWrapper = document.querySelector(".search");

    toggleClassWithEvent(
      "focusin",
      searchHandler,
      "search",
      "search-is-active",
      searchWrapper
    );

    toggleClassWithEvent(
      "focusout",
      searchHandler,
      "search",
      "search-is-active",
      searchWrapper
    );

    /**
     *************** CHATBOT ****************
     */
    const chatbotHandler = document.querySelector(".chatbot-handler");
    const chatbotBox = document.querySelector(".chatbot-box");
    const chatbotBoxClose = document.querySelector(".chatbot-box-close");

    // Muestra el Chat
    toggleClassWithEvent(
      "click",
      chatbotHandler,
      "chatbot-box",
      "chatbot-box-is-active",
      chatbotBox
    );

    // Oculta el Chat
    toggleClassWithEvent(
      "click",
      chatbotBoxClose,
      "chatbot-box-is-active",
      "chatbot-box",
      chatbotBox
    );

    const chatbotIcon = document.querySelector(".chatbot-icon");

    // Cambia el icono del chatbot
    toggleClassWithEvent(
      "mouseover",
      chatbotHandler,
      "icon-pen",
      "icon-message",
      chatbotIcon
    );

    // Cambia el icono del chatbot
    toggleClassWithEvent(
      "mouseout",
      chatbotHandler,
      "icon-message",
      "icon-pen",
      chatbotIcon
    );

    const chatbotEmojisBox = document.querySelector(".chatbot-emojis-box");
    const chatbotEmojisHandler = document.querySelector(
      ".chatbot-emojis-handler"
    );

    // Muestra y oculta el box de emojis
    toggleClassWithEvent(
      "click",
      chatbotEmojisHandler,
      "chatbot-emojis-box",
      "chatbot-emojis-box-is-active",
      chatbotEmojisBox
    );

    const chatbotNotificationHandler = document.querySelector(
      ".chatbot-notification-handler"
    );
    const chatbotNotificationBox = document.querySelector(
      ".chatbot-notification-box"
    );

    // Muestra y oculta el box de notifications
    toggleClassWithEvent(
      "click",
      chatbotNotificationHandler,
      "chatbot-notification-box",
      "chatbot-notification-box-is-active",
      chatbotNotificationBox
    );

    const chatbotRatingHandler = document.querySelector(
      ".chatbot-rating-handler"
    );
    const chatbotRatingBox = document.querySelector(".chatbot-rating-box");

    // Muestra y oculta el box de rating
    toggleClassWithEvent(
      "click",
      chatbotRatingHandler,
      "chatbot-rating-box",
      "chatbot-rating-box-is-active",
      chatbotRatingBox
    );

    const chatbotInput = document.querySelector(".chatbot-input");
    const chatbotInputLabel = document.querySelector(".chatbot-input-label");

    // Focusin Chatbox input
    toggleClassWithEvent(
      "focusin",
      chatbotInput,
      "chatbot-input-label",
      "chatbot-input-label-is-active",
      chatbotInputLabel
    );

    // Focusout Chatbox input
    toggleClassWithEvent(
      "focusout",
      chatbotInput,
      "chatbot-input-label-is-active",
      "chatbot-input-label",
      chatbotInputLabel
    );

    /**
     *************** SIDEBAR ****************
     */
    const sidebarHandlers = document.getElementsByClassName("sidebar-handler");
    const sidebarLabels = document.getElementsByClassName("sidebar-label");

    [...sidebarHandlers].forEach((sidebarHandler, i) => {
      toggleClassWithEvent(
        "mouseover",
        sidebarHandler,
        "sidebar-label-is-active",
        "sidebar-label",
        sidebarLabels[i]
      );
      toggleClassWithEvent(
        "mouseout",
        sidebarHandler,
        "sidebar-label",
        "sidebar-label-is-active",
        sidebarLabels[i]
      );
    });

    /**
     *************** FORMULARIOS ****************
     */
    const inputHandlers = document.getElementsByClassName("input");
    const inputWrappers = document.getElementsByClassName("input-container");

    // Input focus
    [...inputHandlers].forEach((inputHandler, i) => {
      toggleClassWithEvent(
        "focusin",
        inputHandler,
        "input-container-is-active",
        "input-container",
        inputWrappers[i]
      );
      toggleClassWithEvent(
        "focusout",
        inputHandler,
        "input-container",
        "input-container-is-active",
        inputWrappers[i]
      );
    });

    const switchHandler = document.querySelector(".switch");
    const switchToggle = document.querySelector(".switch-toggle");
    const switchText = document.querySelector(".switch-label");

    // Switch
    toggleClassWithEvent(
      "click",
      switchHandler,
      "switch-toggle-is-active",
      "switch-toggle",
      switchToggle
    );
    toggleClassWithEvent(
      "click",
      switchHandler,
      "switch-is-active",
      "switch",
      switchHandler
    );
    toggleClassWithEvent(
      "click",
      switchHandler,
      "switch-label-is-active",
      "switch-label",
      switchText
    );

    // Change switch label
    const changeSwitchLabel = () => {
      if (!switchHandler) return;
      switchHandler.addEventListener("click", function () {
        switchText.textContent =
          switchText.textContent.trim() === "OFF" ? "ON" : "OFF";
      });
    };

    changeSwitchLabel();

    const selectHandlers = document.getElementsByClassName("select-handler");
    const selectDropdowns = document.getElementsByClassName("select-dropdown");

    [...selectHandlers].forEach((selectHandler, i) => {
      toggleClassWithEvent(
        "click",
        selectHandler,
        "select-dropdown-is-active",
        "select-dropdown",
        selectDropdowns[i]
      );
    });

    /**
     *************** STEPS ****************
     */
    const currentUrl = window.location.href;
    const linkSteps = document.querySelectorAll(".step-menu-item");

    // Itera sobre cada enlace
    linkSteps.forEach(function (link) {
      if (link.href === currentUrl) link.classList.add("step-menu-item-is-active");
    });

    const tabHandlers = document.getElementsByClassName("step3-tab");
    const tabContents = document.getElementsByClassName("step3-tab-content");
    const questions = document.querySelector(".questions");

    toggleClassWithEvent(
      "click",
      tabHandlers[1],
      "questions-is-disabled",
      "questions",
      questions
    );
    toggleClassWithEvent(
      "click",
      tabHandlers[0],
      "questions",
      "questions-is-disabled",
      questions
    );

    [...tabHandlers].forEach((tab, i) => {
      if (!tabHandlers) return;

      tabHandlers[i].addEventListener("click", function () {
        // Eliminar clase is-active de todos los tabs
        [...tabHandlers].forEach((tab) => {
          tab.classList.remove("step3-tab-is-active");
        });

        // Agregar clase is-active al tab clickeado
        tabHandlers[i].classList.add("step3-tab-is-active");

        // Ocultar todos los contenidos
        for (let j = 0; j < tabContents.length; j++) {
          tabContents[j].style.display = "none";
        }

        // Mostrar el contenido correspondiente al tab clickeado
        tabContents[i].style.display = "block";
      });
    });

    const messageInput = document.querySelector(".step3-message-input");
    const messageText = document.querySelector(".step3-message-text");

    const changeMessage = () => {
      if (!messageInput) return;
      messageInput.addEventListener("input", function () {
        // Cambia el texto del elemento messageElement al valor del textarea
        messageText.textContent = this.value;
      });
    };

    changeMessage();
  }

  init();
})();
