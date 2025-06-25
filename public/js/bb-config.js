// Mobile menu logic from header.tpl
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}

document.addEventListener('click', function(event) {
    const menu = document.getElementById('mobile-menu');
    const button = event.target.closest('button');
    if (!menu.contains(event.target) && !button) {
        menu.classList.add('hidden');
    }
});

// Close mobile menu when window resizes to desktop
window.addEventListener('resize', function() {
    if (window.innerWidth >= 768) {
        document.getElementById('mobile-menu').classList.add('hidden');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleButtons = document.querySelectorAll('.toggle-password-button');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            if (!passwordInput || passwordInput.tagName !== 'INPUT') {
                return;
            }

            const eyeIcon = this.querySelector('svg');
            if (!eyeIcon) {
                return;
            }

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                `;
            }
        });
    });
});