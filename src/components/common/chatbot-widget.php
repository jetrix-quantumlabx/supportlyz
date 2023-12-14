<!-- Chatbot Box -->
<div class="bg-gradient-to-b from-secondary-900 to-tertiary-900 rounded-t-3xl">
  <div class="flex items-center justify-between p-6">
    <img src="assets/images/logo-white.svg" alt="logo" class="w-36" />
    <div class="flex items-center gap-3 -mt-16">
      <!-- Chatbot Notifications Box -->
      <div class="relative">
        <button class="button-icon chatbot-notification-handler">
          <span>
            <i class="icon-bell"></i>
          </span>
        </button>
        <div class="chatbot-notification-box">
          <p class="text-sm text-penitentiary-900">
            Notifications Settings
          </p>
          <div class="flex items-center gap-2">
            <div class="switch">
              <span class="switch-toggle"></span>
            </div>
            <span class="switch-label">OFF</span>
          </div>
        </div>
      </div>

      <!-- Chatbot Rating Box -->
      <div class="relative">
        <button class="button-icon chatbot-rating-handler">
          <span>
            <i class="icon-star"></i>
          </span>
        </button>

        <div class="chatbot-rating-box">
          <p class="text-sm">Rate this Conversation</p>
          <div class="flex items-center gap-2">
            <span class="text-lg cursor-pointer text-penitentiary-400 hover:text-yellow-300">
              <i class="icon-start-fill"></i>
            </span>
            <span class="text-lg cursor-pointer text-penitentiary-400 hover:text-yellow-300">
              <i class="icon-start-fill"></i>
            </span>
            <span class="text-lg cursor-pointer text-penitentiary-400 hover:text-yellow-300">
              <i class="icon-start-fill"></i>
            </span>
            <span class="text-lg cursor-pointer text-penitentiary-400 hover:text-yellow-300">
              <i class="icon-start-fill"></i>
            </span>
            <span class="text-lg cursor-pointer text-penitentiary-400 hover:text-yellow-300">
              <i class="icon-start-fill"></i>
            </span>
          </div>
        </div>
      </div>

      <!-- Close Chatbot Box -->
      <button class="button-icon">
        <span>
          <i class="icon-x"></i>
        </span>
      </button>
    </div>
  </div>
  <div class="flex items-center gap-2 px-4">
    <div class="relative w-16 h-16 rounded-full">
      <img src="assets/images/default-user.png" alt="default">
      <span class="absolute top-0 w-3 h-3 rounded-full right-[10px] bg-secondary-900"></span>
    </div>
    <div class="py-6">
      <h3 class="mb-3 text-3xl font-bold text-center text-white">
        Let’s chat! 🥳
      </h3>
      <p class="text-sm text-center text-white">
        Chat with Nike Shopify Store
      </p>
    </div>
  </div>

  <div class="flex items-center justify-start gap-3 p-4 bg-tertiary-900 rounded-t-3xl">
    <span class="w-3 h-3 rounded-full bg-secondary-900"></span>
    <p class="text-sm text-white">Answer Time: <span class="font-semibold">Immediately!</span> 😎 </p>
  </div>
</div>

<!-- Chatbot Body -->
<div class="p-6 bg-geyser-200 h-[300px] overflow-y-auto">
  <!-- Chat Sent -->
  <div class="flex items-start gap-4 mb-4">
    <div class="relative">
      <img src="assets/images/bot.png" alt="bot" class="w-12 h-12 rounded-full" />
      <span class="absolute top-0 right-0 w-3 h-3 rounded-full bg-secondary-900"></span>
    </div>

    <div class="relative">
      <div class="chatbot-sent bg-secondary-900">
        <p class="text-sm text-white">
          Hello 🙋 let me know with anything that i can help you!
        </p>
        <div class="-rotate-90 h-0 w-0 border-x-[10px] absolute -left-[15px] top-6 border-x-transparent border-b-[10px] border-b-secondary-900"></div>
      </div>
      <p class="text-xs text-penitentiary-500">Supportlyz - 9:39 AM</p>
    </div>
  </div>

  <!-- Chat Received -->
  <div class="flex items-start justify-end gap-4 mb-4">
    <div class="relative">
      <div class="p-3 rounded-xl bg-white max-w-[280px] mb-2 relative">
        <p class="text-sm text-penitentiary-900">
          Hey! 🙋I need some help, im looking for this shoes
        </p>
        <div class="rotate-90 h-0 w-0 border-x-[12px] absolute -right-4 top-6 border-x-transparent border-b-[14px] border-b-white"></div>
      </div>
      <p class="text-xs text-penitentiary-500">Zeta - 9:40 AM</p>
    </div>

    <div class="relative">
      <img src="assets/images/boy.png" alt="bot" class="w-12 h-12 rounded-full" />
      <span class="absolute top-0 right-0 w-3 h-3 rounded-full bg-secondary-900"></span>
    </div>
  </div>

  <!-- Chat Received width image -->
  <div class="flex items-start justify-end gap-4">
    <div class="relative">
      <div class="p-1 rounded-xl bg-white max-w-[280px] mb-2 relative">
        <img src="assets/images/shoes.png" alt="shoes" class="w-[280px] h-[160px]" />
        <div class="rotate-90 h-0 w-0 border-x-[12px] absolute -right-4 top-6 border-x-transparent border-b-[14px] border-b-white"></div>
      </div>
      <p class="text-xs text-penitentiary-500">Zeta - 9:40 AM</p>
    </div>

    <div class="relative">
      <img src="assets/images/boy.png" alt="bot" class="w-12 h-12 rounded-full" />
      <span class="absolute top-0 right-0 w-3 h-3 rounded-full bg-secondary-900"></span>
    </div>
  </div>
</div>

<!-- Chat Footer -->
<div class="relative p-4 bg-white rounded-b-3xl">
  <div class="relative flex items-center gap-4 mb-3">
    <div class="relative">
      <label class="chatbot-input-label" for="last">Enter your message...</label>
      <input type="text" class="chatbot-input" placeholder="Enter your message..." onblur="this.placeholder = 'Enter your message...'" onfocus="this.placeholder = ''" />
    </div>

    <div class="flex items-center">
      <span class="flex items-center justify-center w-10 h-10 text-3xl rounded-full cursor-pointer chatbot-emojis-handler text-secondary-900 hover:bg-secondary-900 hover:bg-opacity-30">
        <i class="icon-happy"></i>
      </span>
      <span class="flex items-center justify-center w-10 h-10 text-2xl rounded-full cursor-pointer text-secondary-900 hover:bg-secondary-900 hover:bg-opacity-30">
        <i class="icon-adjunct"></i>
      </span>
    </div>

    <!--Chat Emojis -->
    <div class="chatbot-emojis-box">
      <div class="flex items-center justify-between mb-4">
        <span class="px-5 py-2 text-2xl border-b cursor-pointer text-secondary-900 border-secondary-500">
          <i class="icon-clock"></i>
        </span>
        <span class="px-5 py-2 text-2xl cursor-pointer text-secondary-900">
          <i class="icon-happy"></i>
        </span>
        <span class="px-5 py-2 text-2xl cursor-pointer text-secondary-900">
          <i class="icon-coffe"></i>
        </span>
        <span class="px-5 py-2 text-2xl cursor-pointer text-secondary-900">
          <i class="icon-ball"></i>
        </span>
      </div>
      <div class="w-full mb-4 search">
        <div class="search-icon">
          <i class="icon-search"></i>
        </div>
        <input type="text" placeholder="Search here" class="search-input" />
      </div>
      <p class="text-xs font-medium text-secondary-900">Frequently used</p>
      <div class="grid items-center justify-center grid-cols-7 gap-1 py-4">
        <span class="text-2xl">😀</span>
        <span class="text-2xl">❤️</span>
        <span class="text-2xl">😄</span>
        <span class="text-2xl">😁</span>
        <span class="text-2xl">😆</span>
        <span class="text-2xl">😅</span>
        <span class="text-2xl">🤣</span>
        <span class="text-2xl">🤢</span>
        <span class="text-2xl">🙂</span>
        <span class="text-2xl">🙃</span>
        <span class="text-2xl">😉</span>
        <span class="text-2xl">😊</span>
        <span class="text-2xl">😇</span>
        <span class="text-2xl">😃</span>
        <span class="text-2xl">🥰</span>
        <span class="text-2xl">😍</span>
        <span class="text-2xl">🤩</span>
        <span class="text-2xl">😘</span>
        <span class="text-2xl">💩</span>
        <span class="text-2xl">💀</span>
        <span class="text-2xl">😙</span>
        <span class="text-2xl">😋</span>
        <span class="text-2xl">😛</span>
        <span class="text-2xl">😜</span>
        <span class="text-2xl">🤪</span>
        <span class="text-2xl">😝</span>
        <span class="text-2xl">🤑</span>
        <span class="text-2xl">🤗</span>
      </div>
    </div>

    <!-- Chat Sent -->
    <button class="chatbot-send">
      <span class="text-3xl h-7">
        <i class="icon-send"></i>
      </span>
    </button>
  </div>

  <div class="flex justify-center gap-4">
    <p class="text-xs text-penitentiary-400">Powered by</p>
    <img src="assets/images/logo.svg" alt="logo" class="w-20" />
  </div>
</div>
