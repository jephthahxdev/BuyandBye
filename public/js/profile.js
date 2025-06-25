// Profile Details Page JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // Handle file upload preview
    const avatarInput = document.getElementById('avatar');
    if (avatarInput) {
        avatarInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const avatarContainer = document.querySelector('.relative');
                    if (avatarContainer) {
                        const existingImg = avatarContainer.querySelector('img');
                        const existingDiv = avatarContainer.querySelector('div');
                        
                        if (existingImg) {
                            existingImg.src = e.target.result;
                        } else if (existingDiv) {
                            existingDiv.innerHTML = `<img src="${e.target.result}" alt="Preview" class="w-20 h-20 rounded-full object-cover">`;
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    }

    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const allDropdowns = document.querySelectorAll('[id^="dropdown-"]');

        // Close all other dropdowns
        allDropdowns.forEach(dd => {
            if (dd.id !== id) {
                dd.classList.add('hidden');
            }
        });

        // Toggle current dropdown
        dropdown.classList.toggle('hidden');
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('[onclick*="toggleDropdown"]')) {
            const allDropdowns = document.querySelectorAll('[id^="dropdown-"]');
            allDropdowns.forEach(dd => {
                dd.classList.add('hidden');
            });
        }
    });
});