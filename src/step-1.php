<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz - Step 1</title>
</head>

<body>
  <main>
    <!-- Step 1 -->
    <div class="flex flex-col h-screen">

      <?php include 'components/steps/header.php'; ?>

      <div class="flex items-center justify-center h-full gap-20 px-8">

        <div class="flex justify-end w-3/6">
          <div class="w-[490px]">
            <?php include 'components/common/chatbot-widget.php'; ?>
          </div>
        </div>

        <div class="relative flex justify-start w-3/6">
          <div class="w-full max-w-[530px]">
            <span class="flex justify-center w-12 mb-4 text-6xl text-secondary-900">
              <i class="icon-cog"></i>
            </span>
            <h2 class="block mb-6 text-2xl"><span class="font-medium">Configure</span> your live chat</h2>
            <div class="mb-4 input-container">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-user"></i>
              </span>
              <input type="text" class="input" onblur="this.placeholder = 'Username'" onfocus="this.placeholder = ''">

            </div>
            <div class="mb-6">
              <h5 class="mb-2 text-base text-penitentiary-900">Set your Chat colors!</h5>
              <div class="flex items-center gap-4">
                <span class="flex items-center justify-center w-12 h-12 text-white rounded-full cursor-pointer bg-gradient-to-b from-secondary-900 to-tertiary-900">
                  <i class="icon-check"></i>
                </span>
                <span class="flex items-center justify-center w-12 h-12 text-white rounded-full cursor-pointer bg-gradient-to-b from-[#13DDEA] to-[#915EFF]">
                  <i class="opacity-0 icon-check"></i>
                </span>
                <span class="flex items-center justify-center w-12 h-12 text-white rounded-full cursor-pointer bg-gradient-to-b from-[#FF0000] to-[#FFBE5E]">
                  <i class="opacity-0 icon-check"></i>
                </span>
                <span class="flex items-center justify-center w-12 h-12 rounded-full cursor-pointer text-secondary-900 bg-geyser-300">
                  <i class="icon-add-1"></i>
                </span>
              </div>
            </div>
            <div class="flex items-center gap-4 mb-6">
              <button class="button-secondary">Upload Profile Picture</button>

              <!-- Chat Language -->
              <div class="relative transition bg-white rounded-full text-penitentiary-900 hover:shadow-secondary-40">
                <div class="chat-language-handler">
                  <p class="text-sm">Language</p>
                  <span class="text-xs">
                    <i class="icon-chevron"></i>
                  </span>
                </div>

                <!-- Language Dropdown -->
                <div class="chat-language-dropdown">
                  <div class="flex items-center w-full h-10 gap-3 p-3 transition rounded-full cursor-pointer hover:bg-white hover:text-secondary-900">
                    <img src="assets/images/spanish.png" alt="shape" class="w-5 h-5 rounded-full">
                    <p class="text-sm">Español</p>
                  </div>
                  <div class="flex items-center w-full h-10 gap-3 p-3 transition rounded-full cursor-pointer hover:bg-white hover:text-secondary-900">
                    <img src="assets/images/france.png" alt="shape" class="w-5 h-5 rounded-full">
                    <p class="text-sm">Francais</p>
                  </div>
                  <div class="flex items-center w-full h-10 gap-3 p-3 transition rounded-full cursor-pointer hover:bg-white hover:text-secondary-900">
                    <img src="assets/images/italy.png" alt="shape" class="w-5 h-5 rounded-full">
                    <p class="text-sm">Italiano</p>
                  </div>
                  <div class="flex items-center w-full h-10 gap-3 p-3 transition rounded-full cursor-pointer hover:bg-white hover:text-secondary-900">
                    <img src="assets/images/portugal.png" alt="shape" class="w-5 h-5 rounded-full">
                    <p class="text-sm">Portugues</p>
                  </div>
                  <div class="flex items-center w-full h-10 gap-3 p-3 transition rounded-full cursor-pointer hover:bg-white hover:text-secondary-900">
                    <img src="assets/images/german.png" alt="shape" class="w-5 h-5 rounded-full">
                    <p class="text-sm">Deutsch</p>
                  </div>
                </div>
              </div>

            </div>
            <a href="step-2.php">
              <button class="flex items-center h-[44px] justify-between w-64 px-4 text-base transition duration-500 bg-white border-0 rounded-full cursor-pointer hover:bg-secondary-900 hover:text-white text-secondary-900 shadow-gray-20">
                <span>Continue</span>
                <i class="text-2xl icon-arrow"></i>
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- Internal Chabot -->
      <section>
        <div class="fixed bottom-14 right-4">
          <?php include 'components/common/chatbot-handler.php'; ?>
        </div>
        <div class="fixed z-30 right-5 chatbot-box bottom-6">
          <?php include 'components/common/chatbot.php'; ?>
          <div>
      </section>
      <?php include 'components/steps/footer.php'; ?>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
