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
    <!-- Step 3 -->
    <div class="flex flex-col h-screen">
      <!-- Header -->
      <?php include 'components/steps/header.php'; ?>

      <div class="flex flex-col justify-center h-full px-8 mx-auto max-w-screen-2xl">

        <div class="grid items-center grid-cols-2 gap-20 mb-20">
          <div class="relative">
            <div class="flex items-center gap-5">
              <span class="flex justify-center w-12 mb-4 text-6xl text-secondary-900">
                <i class="icon-message"></i>
              </span>
              <h2 class="block mb-8 text-2xl">
                Set up your first Chatbot
              </h2>
            </div>
            <p class="block w-4/6 mb-10 text-sm text-penitentiary-900">How would you like to engage your visitors when they enter your site for the very first time?</p>

            <div class="relative">
              <li class="flex items-center gap-5 p-4 mb-4 border rounded-lg border-secondary-900">
                <span class="w-4 h-4 rounded-full bg-secondary-900"></span>
                <p class="text-penitentiary-900">Ask them if they’d like to get a closer look at your offer</p>
              </li>
              <li class="flex items-center gap-5 p-4 mb-4 border rounded-lg border-secondary-900">
                <span class="w-4 h-4 rounded-full bg-secondary-900"></span>
                <p class="text-penitentiary-900">Ask them if they’d like to order a phone call</p>
              </li>
              <li class="flex items-center gap-5 p-4 mb-4 border rounded-lg border-secondary-900">
                <span class="w-4 h-4 rounded-full bg-secondary-900"></span>
                <p class="text-penitentiary-900">Ask them if they’d like to get a closer look at your offer</p>
              </li>
              <div class="flex items-center gap-3">
                <span>
                  <i class="text-2xl icon-bell text-secondary-900"></i>
                </span>
                <p class="text-penitentiary-900">You can change this later in the Chatbots menu.</p>
              </div>

            </div>
          </div>

          <div class="relative">
            <div class="flex items-center w-full gap-5">
              <li class="flex items-center justify-center w-3/6 gap-2 py-2 border-b text-secondary-900 border-secondary-900">
                <span>
                  <i class="icon-message"></i>
                </span>
                <p>Preview</p>
              </li>
              <li class="flex items-center justify-center w-3/6 gap-2 py-2 text-penitentiary-900">
                <span>
                  <i class="icon-pen"></i>
                </span>
                <p>Customize this message</p>
              </li>
            </div>
          </div>
        </div>


        <!-- Buttons -->
        <div class="flex items-center w-full gap-5">
          <div class="flex justify-end w-3/6">
            <a href="step-2.php">
              <button class="flex items-center justify-between w-64 px-4 text-base transition duration-500 bg-[#bfd9e9] border-0 rounded-full cursor-pointer h-11 text-secondary-900 shadow-gray-20">
                <i class="text-2xl rotate-180 icon-arrow"></i>
                <span>Go Back</span>
              </button>
            </a>
          </div>
          <div class="flex justify-start w-3/6">
            <a href="step-2.php">
              <button class="flex items-center justify-between w-64 px-4 text-base transition duration-500 bg-white border-0 rounded-full cursor-pointer hover:bg-secondary-900 hover:text-white h-11 text-secondary-900 shadow-gray-20">
                <span>Continue</span>
                <i class="text-2xl icon-arrow"></i>
              </button>
            </a>
          </div>
        </div>

      </div>


      <!-- Footer -->
      <?php include 'components/steps/footer.php'; ?>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
