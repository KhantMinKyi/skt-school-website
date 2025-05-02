     // Dropdown Toggle Handler
     document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.dropdown-btn').forEach(button => {
          button.addEventListener('click', function(event) {
              event.preventDefault();

              const dropdownMenu = this.nextElementSibling;

              // Close all other dropdowns
              document.querySelectorAll('.dropdown-menu').forEach(menu => {
                  if (menu !== dropdownMenu) {
                      menu.classList.add('hidden');
                  }
              });

              // Reset icons
              document.querySelectorAll('.dropdown-btn .toggle-icon i').forEach(icon => {
                  icon.classList.remove('fa-angle-up');
                  icon.classList.add('fa-angle-down');
                  icon.classList.remove('text-yellow-400');
              });

              // Toggle current dropdown
              const isOpen = !dropdownMenu.classList.contains('hidden');
              dropdownMenu.classList.toggle('hidden');

              // Toggle icon
              const icon = this.querySelector('.toggle-icon i');
              if (!isOpen) {
                  icon.classList.remove('fa-angle-down');
                  icon.classList.add('fa-angle-up');
                  icon.classList.add('text-yellow-400');
              }
          });
      });

      // Mobile Switch Campus Handler
      const currentRoute = window.location.pathname;
      const isCampusRoute = ["/skt-riverside-campus", "/skt-city-campus"].includes(currentRoute);
      const cityBranch = 'skt-city-campus';
      const riversideBranch = 'skt-riverside-campus';

      $('#MobileSwitchCampusBtn').on('click', function() {
          const currentUrl = window.location.href;
          let newUrl = currentUrl;

          if (currentUrl.includes('/event/event-detail/') || currentUrl.includes(
                  '/student_life/news-detail/') ||
              currentUrl.includes('/admission/career-detail/') || currentUrl.includes(
                  '/education/ib/')) {
              return alert('You Cannot Switch Campus at that Page');
          }

          if (currentUrl.includes(cityBranch)) {
              newUrl = currentUrl.replace(cityBranch, riversideBranch);
          } else if (currentUrl.includes(riversideBranch)) {
              newUrl = currentUrl.replace(riversideBranch, cityBranch);
          } else {
              const branchRegex = /\/(SKT-[A-Z]+)\b/;
              if (branchRegex.test(currentUrl)) {
                  newUrl = currentUrl.replace(branchRegex, (match, branch) =>
                      branch === 'SKT-CC' ? '/SKT-RC' : '/SKT-CC'
                  );
              }

              if (currentUrl.includes('/about_us/head_of_school_message/')) {
                  newUrl = currentUrl.replace('about_us/head_of_school_message/1',
                      'about_us/head_of_school_message/2');
              }
          }

          window.location.href = newUrl;
      });

      // Mobile Side Menu Toggle
      let isOpen = false;

      $("#open-menu").on("click", function(e) {
          e.stopPropagation();
          if (!isOpen) {
              $("#mobile-wrapper").css("width", "300px");
              $('#menuIcon').addClass('text-yellow-400');
          } else {
              $("#mobile-wrapper").css("width", "0");
              $('#menuIcon').removeClass('text-yellow-400');
          }
          isOpen = !isOpen;
      });

      $("#close-menu").on("click", function() {
          $("#mobile-wrapper").css("width", "0");
          $('#menuIcon').removeClass('text-yellow-400');
          isOpen = false;
      });

      $(document).on("click", function(e) {
          const menuWrapper = $("#mobile-wrapper");
          const openBtn = $("#open-menu");

          if (
              !menuWrapper.is(e.target) &&
              menuWrapper.has(e.target).length === 0 &&
              !openBtn.is(e.target) &&
              openBtn.has(e.target).length === 0
          ) {
              menuWrapper.css("width", "0");
              isOpen = false;
              $('#menuIcon').removeClass('text-yellow-400');
          }
      });
  });