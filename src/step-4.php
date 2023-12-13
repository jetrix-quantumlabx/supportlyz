<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz - Step 4</title>
</head>

<body>
  <main>
    <!-- Step 4 -->
    <div class="flex flex-col h-screen">

      <!-- Header -->
      <?php include 'components/steps/header.php'; ?>

      <div class="flex flex-col items-center justify-center h-full px-8 mx-auto max-w-screen-2xl">
        <div class="flex flex-col items-center justify-center">
          <span class="flex justify-center w-12 mb-4 text-6xl text-secondary-900">
            <i class="icon-circles"></i>
          </span>
          <h2 class="block text-2xl"> <span class="font-medium">Integrate</span> the chat with your Platform</h2>
          <p class="mb-8 text-sm text-penitentiary-400">Allow your visitors to contact you via live chat, by adding our widget to you website</p>

          <!-- Integrations -->
          <?php include 'components/steps/integrations.php'; ?>
        </div>


        <!-- Buttons -->
        <div class="flex items-center w-full gap-5">
          <div class="flex justify-end w-3/6">
            <a href="step-1.php">
              <button class="flex items-center justify-between w-64 px-4 text-base transition duration-500 bg-[#bfd9e9] border-0 rounded-full cursor-pointer h-11 text-secondary-900 shadow-gray-20">
                <i class="text-2xl rotate-180 icon-arrow"></i>
                <span>Go Back</span>
              </button>
            </a>
          </div>
          <div class="flex justify-start w-3/6">
            <a href="dashboard.php">
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
