document.addEventListener("DOMContentLoaded", () => {
  // Dropdown toggle logic
  document.querySelectorAll('.dropdown-btn').forEach(button => {
      button.addEventListener('click', function (e) {
          e.preventDefault();
          const dropdownMenu = this.nextElementSibling;

          // Close all other dropdowns
          document.querySelectorAll('.dropdown-menu').forEach(menu => {
              if (menu !== dropdownMenu) menu.classList.add('hidden');
          });

          // Reset all toggle icons
          document.querySelectorAll('.dropdown-btn .toggle-icon i').forEach(icon => {
              icon.classList.remove('fa-angle-up', 'text-yellow-400');
              icon.classList.add('fa-angle-down');
          });

          // Toggle current dropdown and icon
          const isOpen = !dropdownMenu.classList.contains('hidden');
          dropdownMenu.classList.toggle('hidden');
          const icon = this.querySelector('.toggle-icon i');
          if (!isOpen) {
              icon.classList.remove('fa-angle-down');
              icon.classList.add('fa-angle-up', 'text-yellow-400');
          }
      });
  });
});

// jQuery-based logic
$(document).ready(function () {
  const currentRoute = window.location.pathname;
  const isCampusRoute = ["/skt-riverside-campus", "/skt-city-campus"].includes(currentRoute);

  // Campus switch button
  $('#MobileSwitchCampusBtn').on('click', function () {
      const currentUrl = window.location.href;
      let newUrl = currentUrl;

      const cityBranch = 'skt-city-campus';
      const riversideBranch = 'skt-riverside-campus';

      if (currentUrl.includes('/event/event-detail/') || currentUrl.includes('/student_life/news-detail/')) {
          return alert('You Cannot Switch Campus at that Page');
      }

      if (currentUrl.includes(cityBranch)) {
          newUrl = currentUrl.replace(cityBranch, riversideBranch);
      } else if (currentUrl.includes(riversideBranch)) {
          newUrl = currentUrl.replace(riversideBranch, cityBranch);
      } else {
          const branchRegex = /\/(SKT-[A-Z]+)\b/;
          if (branchRegex.test(currentUrl)) {
              newUrl = currentUrl.replace(branchRegex, (_, branch) =>
                  branch === 'SKT-CC' ? '/SKT-RC' : '/SKT-CC'
              );
          }

          if (currentUrl.includes('/about_us/head_of_school_message/')) {
              newUrl = currentUrl.replace('about_us/head_of_school_message/2', 'about_us/head_of_school_message/1');
          }
      }

      window.location.href = newUrl;
  });

  // Mobile menu toggle
  let isMenuOpen = false;

  $('#open-menu').on('click', function (e) {
      e.stopPropagation();
      $('#mobile-wrapper').css('width', isMenuOpen ? '0' : '300px');
      $('#menuIcon').toggleClass('text-yellow-400', !isMenuOpen);
      isMenuOpen = !isMenuOpen;
  });

  $('#close-menu').on('click', function () {
      $('#mobile-wrapper').css('width', '0');
      $('#menuIcon').removeClass('text-yellow-400');
      isMenuOpen = false;
  });

  $(document).on('click', function (e) {
      const menu = $('#mobile-wrapper');
      const openBtn = $('#open-menu');
      if (!menu.is(e.target) && menu.has(e.target).length === 0 &&
          !openBtn.is(e.target) && openBtn.has(e.target).length === 0) {
          menu.css('width', '0');
          $('#menuIcon').removeClass('text-yellow-400');
          isMenuOpen = false;
      }
  });
});