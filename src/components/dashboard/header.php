<div class="flex items-center p-6 bg-geyser-100">
  <div class="flex items-center justify-between w-full">
    <div class="relative h-10 w-52">
      <img src="assets/images/logo.svg" alt="logo" fill priority />
    </div>
    <!-- Search -->
    <div class="w-2/5 search">
      <div class="search-icon">
        <i class="icon-search"></i>
      </div>
      <input type="text" placeholder="Search something cool..." class="search-input" />
    </div>

    <div class="relative flex items-center gap-5">
      <button class="button-icon">
        <i class="icon-magnet"></i>
      </button>
      <button class="button-icon">
        <i class="icon-earphones"></i>
      </button>

      <!-- Notifications -->
      <div class="relative">
        <div class="relative">
          <button class="button-icon notification-handler">
            <i class="icon-bell"></i>
          </button>
          <span class="absolute flex items-center justify-center w-5 h-5 text-xs text-white rounded-full bg-tertiary-900 -top-1 -right-1">
            2
          </span>
        </div>

        <!-- Notifications Center -->
        <div class="notification-center">
          <div class="flex items-center justify-between mb-4">
            <h4 class="font-medium">Notifications Center</h4>
            <div class="cursor-pointer text-penitentiary-400 hover:text-secondary-900">
              <i class="icon-cog"></i>
            </div>
          </div>
          <div class="items-start chatbox">
            <div class="relative">
              <img src="assets/images/girl.png" class="rounded-full w-11 h-11 max-w-fit" alt="user" />
              <img src="assets/images/shopify.png" class="absolute w-6 h-6 border-2 border-white rounded-full -bottom-1 -right-1" alt="brand" />
            </div>
            <div>
              <h5 class="text-xs text-penitentiary-900">
                <b class="font-medium">Wanda Nara</b> sent you a message in the chat
                <b class="font-medium">#13654</b>
              </h5>
              <p class="text-xs text-penitentiary-400">2 minutes ago</p>
            </div>
            <div class="text-sm text-secondary-900">
              <i class="icon-bell"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Account -->
      <div class="account group">

        <!-- Account Handler -->
        <div class="account-handler group">
          <div class="relative">
            <img src="assets/images/boy.png" alt="boy" class="rounded-full w-11 h-11" />
            <img src="assets/images/nike.png" class="absolute w-4 h-4 border-white rounded-full border-1 -bottom-1 -right-1" alt="brand" />
          </div>
          <div>
            <h4 class="text-sm font-medium">Zeta</h4>
            <p class="flex items-center gap-1 text-xs">
              <span class="account-message-icon">
                <i class="icon-message"></i>
              </span>
              Nike Shopify Store
            </p>
          </div>
          <span class="px-3 text-[8px] text-secondary-90">
            <i class="icon-chevron"></i>
          </span>
        </div>

        <!-- Account Dropdwon -->
        <div class="account-dropdown">
          <div class="p-3">
            <div class="flex items-center w-10 gap-1 px-1 bg-white rounded-full">
              <img src="assets/images/english.png" alt="flag" class="w-4 h-4 rounded-full">
              <span class="text-[6px]">
                <i class="icon-chevron"></i>
              </span>
            </div>

            <div class="flex flex-col items-center justify-center py-5">
              <div class="relative">
                <img src="assets/images/nike.png" alt="brand" class="w-16 h-16 mb-3 rounded-full">
                <span class="absolute top-0 right-0 block w-4 h-4 border-2 border-white rounded-full bg-secondary-900"></span>
              </div>

              <!-- Account Website -->
              <div class="relative">
                <h5 class="website-handler">
                  Nike Shopify Store
                  <span class="text-secondary-900">
                    <i class="icon-chevron text-[8px]"></i>
                  </span>
                </h5>
                <div class="website-dropdown">
                  <li class="flex items-center gap-2 py-2">
                    <img src="assets/images/nike.png" alt="brand" class="w-5 h-5 rounded-full">
                    <p class="text-sm font-medium text-penitentiary-900 hover:text-secondary-900">Nike Shopify Store</p>
                  </li>
                  <li class="flex items-center gap-2 py-2">
                    <img src="assets/images/nike-blue.png" alt="brand" class="w-5 h-5 rounded-full">
                    <p class="text-sm font-medium text-penitentiary-900 hover:text-secondary-900">Nike Hypebeast Store</p>
                  </li>
                  <li class="flex items-center gap-2 py-2">
                    <img src="assets/images/nike-red.png" alt="brand" class="w-5 h-5 rounded-full">
                    <p class="text-sm font-medium text-penitentiary-900 hover:text-secondary-900">Just Do It Store</p>
                  </li>
                  <li class="flex items-center gap-2 py-2">
                    <img src="assets/images/nike-orange.png" alt="brand" class="w-5 h-5 rounded-full">
                    <p class="text-sm font-medium text-penitentiary-900 hover:text-secondary-900">Swoosh Store</p>
                  </li>
                  <button class="flex items-center justify-center gap-2 mt-2 text-sm transition cursor-pointer text-secondary-900 hover:text-tertiary-900">
                    <span class="text-lg"><i class="icon-add"></i></span>
                    <p>Add new website</p>
                  </button>
                </div>
              </div>
              <p class="flex items-center text-sm text-penitentiary-600">
                <span class="text-base icon-invoice text-secondary-900"></span>
                Professional Plan
              </p>
            </div>

          </div>
          <div class="p-4 bg-white rounded-t-2xl">
            <div class="flex items-center justify-between mb-3">
              <h5 class="text-sm font-medium text-penitentiary-900">Status</h5>
              <div class="flex gap-3 -mt-12">
                <button class="button-icon-small">
                  <i class="icon-magnet"></i>
                </button>
                <a href="index.php">
                  <button class="button-icon-small">
                    <i class="icon-logout"></i>
                  </button>
                </a>
              </div>
            </div>

            <!-- Account Status -->
            <div class="relative">
              <div class="status-handler">
                <p class="text-sm font-medium text-secondary-900">Connected</p>
                <span class="text-secondary-900 text-[8px]"><i class="icon-chevron"></i></span>
              </div>

              <div class="status-dropdown">
                <button class="mb-2 button-gray-small">
                  Connected
                </button>
                <button class="mb-2 button-gray-small">
                  Disconnected
                </button>
                <button class="button-gray-small">
                  Attention Hour
                </button>
              </div>
            </div>

            <!-- Account Operators -->
            <div class="flex items-center justify-between mb-3">
              <h5 class="py-2 font-medium text-penitentiary-900">Operators</h5>
              <span class="flex items-center justify-center w-10 h-5 text-xs text-white rounded-full line-normal bg-secondary-900">22</span>
            </div>

            <div class="flex items-center gap-2 mb-2 last:mb-0">
              <img src="assets/images/boy.png" alt="user" class="w-5 h-5 rounded-full">
              <h6 class="text-xs font-semibold text-penitentiary-900">Zeta</h6>
            </div>
            <div class="flex items-center gap-2 mb-2 last:mb-0">
              <img src="assets/images/girl.png" alt="user" class="w-5 h-5 rounded-full">
              <h6 class="text-xs transition text-penitentiary-900 hover:font-semibold">Cilia</h6>
            </div>

            <button class="flex items-center justify-center gap-2 mb-3 text-sm transition cursor-pointer text-secondary-900 hover:text-tertiary-900">
              <span class="text-lg"><i class="icon-add"></i></span>
              <p>Add new operator</p>
            </button>

            <button class="button-secondary-small">
              Settings
            </button>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
