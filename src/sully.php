<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Sully Dashboard</title>
</head>

<body>
  <main>

    <?php include 'components/dashboard/header.php'; ?>

    <div class="flex">
      <!-- Sidebar -->
      <?php include 'components/dashboard/sidebar.php'; ?>

      <!-- <Content /> -->
      <div class="relative w-full p-6 rounded-tl-3xl bg-geyser-200">
        <div class="flex items-start w-full gap-4">
          <div class="w-full">
            <div class="flex w-full gap-5 mb-5">
              <div class="w-1/5">
                <h3 class="text-2xl font-medium text-penitentiary-900">Data Sources</h3>
                <p class="flex items-center gap-2 text-sm text-penitentiary-400">
                  <span class="text-lg text-secondary-900">
                    <i class="icon-inbox"></i>
                  </span>
                  Data sources
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
