<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz Dashboard</title>
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
                <h3 class="text-2xl font-medium text-penitentiary-900">Welcome!</h3>
                <p class="flex items-center gap-2 text-sm text-penitentiary-400">
                  <span class="text-lg text-secondary-900">
                    <i class="icon-house"></i>
                  </span>
                  Dashboard Overview
                </p>
              </div>

              <!-- <Payment Notification /> -->
              <div class="h-[70px] text-white bg-gradient-to-b overflow-hidden from-secondary-900 to-tertiary-700 rounded-3xl w-4/5 flex justify-between">
                <p class="flex items-center w-2/3 gap-3 px-5 text-sm">
                  <span class="text-3xl">
                    <i class="icon-invoice"></i>
                  </span>
                  You have a Pending Payment of $98.37
                </p>
                <div class="flex items-center justify-between w-1/3 px-6 bg-gradient-to-b from-secondary-700 to-tertiary-700 rounded-3xl">
                  <div>
                    <p class="text-xs">Current Plan</p>
                    <p class="text-sm">Professional</p>
                  </div>
                  <button class="button-outline-white">Billing</button>
                </div>
              </div>
            </div>
            <div class="flex w-full gap-5 mb-5">
              <!-- Setup Progress  -->
              <a href="#" class="w-full max-w-[341px] bg-white bg-opacity-50 rounded-3xl h-[310px] p-5 flex flex-col justify-between group overflow-hidden">
                <h4 class="text-lg font-medium text-center text-penitentiary-900">
                  Set Up Progress
                </h4>

                <div id="set-up-progress-chart" class="flex items-center justify-center"></div>

                <div class="transition-all duration-500 h-[32px] group-hover:h-[68px] relative group-hover:translate-y-5">
                  <div class="flex justify-between items-center relative z-10 duration-500 transition-all h-[32px] group-hover:h-[68px]">
                    <p class="text-xs font-light tracking-[0.1px] text-firefly-900 max-w-[238px] block transition-all duration-500 group-hover:translate-y-[calc(100%+1.25rem)] group-hover:opacity-0">Complete all the steps in order to set-up your Support Bot correctly.</p>

                    <span class="relative z-10 text-2xl text-secondary-900 group-hover:text-white">
                      <i class="icon-arrow"></i>
                    </span>
                  </div>
                  <div class="bg-secondary-900 opacity-0 h-[39px] transition-all duration-500 group-hover:opacity-100 group-hover:h-[68px] bottom-0 absolute translate-y-5 group-hover:-translate-y-0 -left-5 -right-5 rounded-[20px] z-0 flex items-center ps-6">
                    <p class="absolute text-base font-medium tracking-[0.1px] text-white transition-all duration-500 translate-y-[calc(100%+1.25rem)]  group-hover:translate-y-0">Complete Set-Up</p>
                  </div>
                </div>
              </a>

              <!-- Goals -->
              <div class="w-4/5">
                <div class="flex gap-5 mb-5">
                  <div class="group goals">
                    <div class="relative z-10 p-5">
                      <div class="flex items-start justify-between">
                        <img src="assets/images/hand.png" alt="hand" class="w-12 h-12">
                        <span class="flex items-center justify-center w-10 h-5 text-xs text-white transition rounded-full line-normal bg-secondary-900 group-hover:bg-white group-hover:text-secondary-900">4</span>
                      </div>
                      <h6 class="text-base font-medium text-penitentiary-900 group-hover:text-white">Unassigned Messages</h6>
                      <h3 class="text-3xl font-light text-secondary-900 group-hover:text-white">156</h3>
                      <div class="flex justify-between">
                        <p class="text-sm font-light text-penitentiary-400 group-hover:text-white">23 Not Read</p>
                        <span class="relative z-10 text-xl text-secondary-900 group-hover:text-white">
                          <i class="icon-arrow"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="group goals">
                    <div class="relative z-10 p-5">
                      <div class="flex items-start justify-between">
                        <img src="assets/images/inbox.png" alt="hand" class="w-12 h-12">
                        <span class="flex items-center justify-center w-10 h-5 text-xs text-white transition rounded-full bg-secondary-900 group-hover:bg-white group-hover:text-secondary-900 line-normal">76</span>
                      </div>
                      <h6 class="text-base font-medium text-penitentiary-900 group-hover:text-white">On-Going Conversations</h6>
                      <h3 class="text-3xl font-light text-secondary-900 group-hover:text-white">198</h3>
                      <div class="flex justify-between">
                        <p class="text-sm font-light text-penitentiary-400 group-hover:text-white">76 New Messages</p>
                        <span class="relative z-10 text-xl transition text-secondary-900 group-hover:text-white">
                          <i class="icon-arrow"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="group goals">
                    <div class="relative z-10 p-5">
                      <div class="flex items-start justify-between">
                        <img src="assets/images/emoji.png" alt="emoji" class="w-12 h-12">
                        <span class="flex items-center justify-center w-10 h-5 text-xs text-white transition rounded-full bg-secondary-900 group-hover:bg-white group-hover:text-secondary-900 line-normal">23</span>
                      </div>
                      <h6 class="text-base font-medium text-penitentiary-900 group-hover:text-white">Completed Conversations</h6>
                      <h3 class="text-3xl font-light text-secondary-900 group-hover:text-white">823</h3>
                      <div class="flex justify-between">
                        <p class="text-sm font-light text-penitentiary-400 group-hover:text-white">23 Not Rated</p>
                        <span class="relative z-10 text-xl transition text-secondary-900 group-hover:text-white">
                          <i class="icon-arrow"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex gap-5">

                  <!-- Integration -->
                  <div class="integrations group">
                    <div class="relative z-10 flex flex-col justify-center p-6">
                      <p class="mb-2 text-base text-penitentiary-400 group-hover:text-white">
                        Integrated with
                      </p>
                      <div class="flex items-center gap-3">
                        <span class="text-2xl text-secondary-900 group-hover:text-white">
                          <i class="icon-square"></i>
                        </span>
                        <img src="assets/images/shopify-logo.png" class="w-6 h-6" alt="logo" />
                        <img src="assets/images/messages-logo.png" class="w-6 h-6" alt="logo" />
                      </div>
                    </div>
                    <span class="relative z-10 text-3xl text-white transition translate-x-20 group-hover:translate-x-0">
                      <i class="icon-arrow"></i>
                    </span>
                  </div>

                  <!-- Statistics  -->
                  <div class="statistics group">
                    <div class="relative z-30 flex items-center justify-around h-full pl-8 transition translate-x-0 group-hover:-translate-x-8 [&>*:nth-child(2)]:border-x">
                      <div class="flex items-center gap-3 px-6 border-gray-300 group-hover:text-white">
                        <span class="text-5xl text-secondary-900 group-hover:text-white">
                          <i class="icon-user"></i>
                        </span>
                        <div>
                          <p class="text-sm text-penitentiary-400 group-hover:text-white">
                            Total Users
                          </p>
                          <h5 class="text-3xl text-penitentiary-900 group-hover:text-white">
                            82,938
                          </h5>
                        </div>
                      </div>

                      <div class="flex items-center gap-3 px-6 border-gray-300 group-hover:text-white">
                        <span class="text-5xl text-secondary-900 group-hover:text-white">
                          <i class="icon-browser"></i>
                        </span>
                        <div>
                          <p class="text-sm text-penitentiary-400 group-hover:text-white">
                            Satisfaction Ratio
                          </p>
                          <h5 class="text-3xl text-penitentiary-900 group-hover:text-white">
                            +87%
                          </h5>
                        </div>
                      </div>

                      <div class="flex items-center gap-3 px-6 border-gray-300 group-hover:text-white">
                        <span class="text-5xl text-secondary-900 group-hover:text-white">
                          <i class="icon-message"></i>
                        </span>
                        <div>
                          <p class="text-sm text-penitentiary-400 group-hover:text-white">
                            Successful Clients
                          </p>
                          <h5 class="text-3xl text-penitentiary-900 group-hover:text-white">
                            33293
                          </h5>
                        </div>
                      </div>

                      <span class="text-5xl text-white transition translate-x-20 group-hover:translate-x-5">
                        <i class="icon-arrow"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex w-full gap-5 mb-5">
              <!-- Performance Overview  -->
              <div class="w-2/5 bg-white bg-opacity-50 rounded-3xl h-[420px] flex flex-col pb-5">
                <h3 class="text-lg font-medium text-penitentiary-900 px-8 pt-7 pb-3.5">Performance Overview</h3>
                <div id="performance-overview-chart" class="grow"></div>
              </div>

              <!-- Active Campaigns -->
              <div class="w-3/5 bg-white bg-opacity-50 rounded-3xl h-[420px] p-6">
                <div class="">
                  <h3 class="text-lg font-medium text-penitentiary-900">Conversations started by visitors</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Recent Chats  -->
          <div class="bg-white w-[400px] rounded-2xl p-5 bg-opacity-50">
            <div class="flex items-center justify-between w-full mb-5">
              <h1 class="flex items-center gap-3 text-lg text-penitentiary-900">
                <span class="text-2xl text-secondary-900">
                  <i class="icon-inbox"></i>
                </span>
                <b class="font-medium">Recent Chats</b>
              </h1>
              <span class="px-3 py-px text-sm text-white rounded-full bg-secondary-900">5</span>
            </div>
            <div class="max-h-screen">

              <!-- Message Box -->
              <div class="items-center chatbox">
                <div class="relative">
                  <img src="assets/images/girl.png" class="w-12 h-12 rounded-full max-w-fit" alt="user" />
                  <img src="assets/images/shopify.png" class="absolute w-6 h-6 border-2 border-white rounded-full -bottom-1 -right-1" alt="brand" />
                </div>
                <div class="relative">
                  <div class="flex items-center justify-between w-full mb-1">
                    <b class="text-sm font-medium text-penitentiary-900">Cilia Flores</b>
                    <div class="flex items-center gap-3">
                      <span class="rounded-full text-white text-[10px] w-5 h-5 bg-secondary-900 flex items-center justify-center">
                        25
                      </span>
                      <b class="flex items-center justify-center h-5 px-2 py-1 text-xs font-medium leading-none bg-gray-300 rounded-full text-penitentiary-900">
                        #39872
                      </b>
                    </div>
                  </div>
                  <p class="text-sm leading-4 text-penitentiary-400 line-clamp-2">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </div>

              <!-- Message Box -->
              <div class="items-center chatbox">
                <div class="relative">
                  <img src="assets/images/girl.png" class="w-12 h-12 rounded-full max-w-fit" alt="user" />
                  <img src="assets/images/shopify.png" class="absolute w-6 h-6 border-2 border-white rounded-full -bottom-1 -right-1" alt="brand" />
                </div>
                <div class="relative">
                  <div class="flex items-center justify-between w-full mb-1">
                    <b class="text-sm font-medium text-penitentiary-900">Valerie Smith</b>
                    <div class="flex items-center gap-3">
                      <span class="rounded-full text-white text-[10px] w-5 h-5 bg-secondary-900 flex items-center justify-center">
                        10
                      </span>
                      <b class="flex items-center justify-center h-5 px-2 py-1 text-xs font-medium leading-none bg-gray-300 rounded-full text-penitentiary-900">
                        #39850
                      </b>
                    </div>
                  </div>
                  <p class="text-sm leading-4 text-penitentiary-400 line-clamp-2">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
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
        <?php
        // include 'components/dashboard/footer.php';
        ?>
      </div>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/d3.min.js"></script>
  <script src="assets/js/charts.js"></script>
</body>

</html>
