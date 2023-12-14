<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Messages Dashboard</title>
</head>

<body>
  <main>

    <?php include 'components/dashboard/header.php'; ?>

    <div class="layout-with-navigation">
      <!-- Sidebar -->
      <?php include 'components/dashboard/sidebar.php'; ?>

      <div class="bg-[#e6edf1] p-6 h-full">
        <h3 class="mb-5 text-xl font-medium text-penitentiary-900">Navigation</h3>

        <ul class="relative">
          <!-- Live Conversation -->
          <li class="mb-2 text-penitentiary-900 last:mb-0">
            <div class="navigation-handler">
              <h4 class="flex items-center text-base">
                <span class="mr-2 text-xl">
                  <i class="icon-chat"></i>
                </span>
                Live conversations
              </h4>
              <span>
                <i class="icon-chevron"></i>
              </span>
            </div>

            <ul class="navigation-drowdown">
              <li class="navigation-drowdown-item">
                🖐 Unassigned
              </li>
              <li class="navigation-drowdown-item">
                📬 On-Going
              </li>
              <li class="navigation-drowdown-item">
                🥳 Completed
              </li>
            </ul>
          </li>

          <!-- Tickets -->
          <li class="mb-2 text-penitentiary-900 last:mb-0">
            <div class="navigation-handler">
              <h4 class="flex items-center text-base">
                <span class="mr-2 text-xl">
                  <i class="icon-ticket"></i>
                </span>
                Tickets
              </h4>
              <span>
                <i class="icon-chevron"></i>
              </span>
            </div>

            <ul class="navigation-drowdown">
              <li class="navigation-drowdown-item">
                🖐 Unassigned
              </li>
              <li class="navigation-drowdown-item">
                📬 On-Going
              </li>
              <li class="navigation-drowdown-item">
                🥳 Completed
              </li>
            </ul>
          </li>

          <!-- Views -->
          <li class="mb-2 text-penitentiary-900 last:mb-0">
            <div class="navigation-handler">
              <h4 class="flex items-center text-base">
                <span class="mr-2 text-xl">
                  <i class="icon-show"></i>
                </span>
                Views
              </h4>
              <span>
                <i class="icon-chevron"></i>
              </span>
            </div>

            <ul class="navigation-drowdown">
              <li class="navigation-drowdown-item">
                <img src="assets/images/messages-logo.png" alt="logo" class="w-5 mr-3">
                Messenger
              </li>
              <li class="navigation-drowdown-item">
                <img src="assets/images/instagram-logo.png" alt="logo" class="w-5 mr-3">
                Instagram
              </li>
              <li class="navigation-drowdown-item">
                <img src="assets/images/whatsapp-logo.png" alt="logo" class="w-5 mr-3">
                WhatsApp
              </li>
            </ul>
          </li>

          <!-- Operators -->
          <li class="mb-2 text-penitentiary-900 last:mb-0">
            <div class="navigation-handler">
              <h4 class="flex items-center text-base">
                <span class="mr-2 text-xl">
                  <i class="icon-users"></i>
                </span>
                Operators
              </h4>
              <span>
                <i class="icon-chevron"></i>
              </span>
            </div>

            <ul class="navigation-drowdown">
              <li class="navigation-drowdown-item">
                <img src="assets/images/boy.png" alt="logo" class="w-5 mr-3">
                Maluma
              </li>
              <li class="navigation-drowdown-item">
                <img src="assets/images/girl.png" alt="logo" class="w-5 mr-3">
                Zeta
              </li>
              <li class="navigation-drowdown-item">
                <span class="mr-2 text-xl">
                  <i class="icon-robot"></i>
                </span>
                Suly AI
              </li>
            </ul>
          </li>

        </ul>
      </div>

      <!-- <Content /> -->
      <div class="relative h-full p-6 rounded-tl-3xl bg-geyser-200">
        <div class="flex items-start w-full gap-4">
          <div class="w-full">
            <div class="flex w-full gap-5 mb-5">
              <div class="w-1/5">
                <h3 class="text-2xl font-medium text-penitentiary-900">Inbox</h3>
                <p class="flex items-center gap-2 text-sm text-penitentiary-400">
                  <span class="text-lg text-secondary-900">
                    <i class="icon-inbox"></i>
                  </span>
                  Unassigned
                </p>
              </div>

            </div>

          </div>

        </div>

        <section>
          <div class="fixed bottom-14 right-4">
            <?php include 'components/common/chatbot-handler.php'; ?>
          </div>
          <div class="fixed z-30 right-5 chatbot-box bottom-6">
            <?php include 'components/common/chatbot.php'; ?>
          <div>
        </section>
        <?php include 'components/dashboard/footer.php'; ?>
      </div>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
