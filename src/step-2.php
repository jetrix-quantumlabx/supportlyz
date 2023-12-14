<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz - Step 2</title>
</head>

<body>
  <main>
    <!-- Step 2 -->
    <div class="flex flex-col h-screen">

      <!-- Header -->
      <?php include 'components/steps/header.php'; ?>

      <div class="flex flex-col items-center justify-center h-full px-8 mx-auto max-w-screen-2xl">
        <div class="flex flex-col items-center justify-center">
          <span class="flex justify-center w-12 mb-4 text-6xl text-secondary-900">
            <i class="icon-happy"></i>
          </span>
          <h2 class="block mb-8 text-2xl">Customize the <span class="font-medium">Experience</span></h2>
        </div>

        <div class="flex items-center justify-between w-full mb-4">
          <h3 class="block w-3/6 text-lg">What is your main focus?</h3>
          <h3 class="block w-3/6 text-lg">How do you want to do that?</h3>
        </div>

        <div class="flex items-center mb-8 gap-28">
          <!-- Experience Item -->
          <li class="experience-item group">
            <div class="translate-y-0 group-hover:-translate-y-[20px] transition">
              <i class="block text-7xl icon-hands text-secondary-900 group-hover:text-white"></i>
              <p class="block text-center text-penitentiary-900 text-xs w-[130px] group-hover:text-white">I want to solve customers problems</p>
            </div>
            <div class="experience-item-check">
              <div class="relative flex items-center rounded-full cursor-pointer">
                <input type="checkbox" class="checkbox peer" />
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
            </div>
          </li>

          <!-- Experience Item -->
          <li class="experience-item group">
            <div class="translate-y-0 group-hover:-translate-y-[20px] transition">
              <i class="block text-7xl icon-briefcase text-secondary-900 group-hover:text-white"></i>
              <p class="block text-center text-penitentiary-900 text-xs w-[130px] group-hover:text-white">I want to increase sales</p>
            </div>

            <div class="experience-item-check">
              <div class="relative flex items-center rounded-full cursor-pointer">
                <input type="checkbox" class="checkbox peer" />
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
            </div>
          </li>

          <!-- Experience Item -->
          <li class="experience-item group">
            <div class="translate-y-0 group-hover:-translate-y-[20px] transition">
              <i class="block text-7xl icon-message text-secondary-900 group-hover:text-white"></i>
              <p class="block text-center text-penitentiary-900 text-xs w-[130px] group-hover:text-white">I want to talk to customers</p>
            </div>
            <div class="experience-item-check">
              <div class="relative flex items-center rounded-full cursor-pointer">
                <input type="checkbox" class="checkbox peer" />
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
            </div>
          </li>

          <!-- Experience Item -->
          <li class="experience-item group">
            <div class="translate-y-0 group-hover:-translate-y-[20px] transition">
              <i class="block text-7xl icon-sully text-secondary-900 group-hover:text-white"></i>
              <p class="block text-center text-penitentiary-900 text-xs w-[130px] group-hover:text-white">I want to automate conversations</p>
            </div>
            <div class="experience-item-check">
              <div class="relative flex items-center rounded-full cursor-pointer">
                <input type="checkbox" class="checkbox peer" />
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
            </div>
          </li>
        </div>

        <div class="flex items-center justify-between w-full mb-8">
          <h3 class="block w-3/6 text-lg">How many support agents will use de Supportlyz?</h3>
          <h3 class="block w-3/6 text-lg">How many inquiries do you get monthly?</h3>
        </div>

        <div class="flex items-center w-full mb-8">
          <div class="w-3/6">
            <div class="input-container w-[500px]">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-user"></i>
              </span>
              <input type="text" class="input" placeholder="Number of Support Agents">
            </div>
          </div>
          <div class="w-3/6">
            <div class="select-container">
              <div class="select-handler">
                <p class="text-sm">Type of Industry</p>
                <span class="text-xs">
                  <i class="icon-chevron"></i>
                </span>
              </div>

              <div class="select-dropdown">
                <li class="select-dropdown-item">Online Store</li>
                <li class="select-dropdown-item">Beauty and Wellness</li>
                <li class="select-dropdown-item">Real Estate</li>
                <li class="select-dropdown-item">Restaurant and Foos</li>
                <li class="select-dropdown-item">Services</li>
                <li class="select-dropdown-item">Agency</li>
                <li class="select-dropdown-item">Blog</li>
                <li class="select-dropdown-item">Other</li>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center w-full mb-8">
          <div class="w-3/6">
            <div class="select-container">
              <div class="select-handler">
                <p class="text-sm">Number of customers</p>
                <span class="text-xs">
                  <i class="icon-chevron"></i>
                </span>
              </div>

              <div class="select-dropdown">
                <li class="select-dropdown-item">0 - just getting started</li>
                <li class="select-dropdown-item">1-5</li>
                <li class="select-dropdown-item">26-150</li>
                <li class="select-dropdown-item">250+</li>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center w-full gap-5">
          <div class="flex justify-end w-3/6">
            <a href="step-1.php">
              <button class="flex items-center justify-between w-64 px-4 text-base transition duration-500 bg-[#bfd9e9] border-0 rounded-full cursor-pointer h-[44px] text-secondary-900 shadow-gray-20">
                <i class="text-2xl rotate-180 icon-arrow"></i>
                <span>Go Back</span>
              </button>
            </a>
          </div>
          <div class="flex justify-start w-3/6">
            <a href="step-3.php">
              <button class="flex items-center justify-between w-64 px-4 text-base transition duration-500 bg-white border-0 rounded-full cursor-pointer hover:bg-secondary-900 hover:text-white h-[44px] text-secondary-900 shadow-gray-20">
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

      <!-- Footer -->
      <?php include 'components/steps/footer.php'; ?>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
