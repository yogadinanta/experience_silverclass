  const openBtn = document.getElementById('openPopup');
  const closeBtn = document.getElementById('closePopup');
  const popup = document.getElementById('popupCard');

  openBtn.addEventListener('click', function (e) {
    e.preventDefault();
    popup.classList.remove('pointer-events-none', 'opacity-0', 'scale-95');
    popup.classList.add('opacity-100', 'scale-100');
  });

  closeBtn.addEventListener('click', function () {
    popup.classList.remove('opacity-100', 'scale-100');
    popup.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
      popup.classList.add('pointer-events-none');
    }, 300);
  });

  window.addEventListener('click', function (e) {
    if (e.target === popup) {
      popup.classList.remove('opacity-100', 'scale-100');
      popup.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        popup.classList.add('pointer-events-none');
      }, 300);
    }
  });