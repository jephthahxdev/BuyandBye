// Password toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    // Handle password visibility toggle
    const toggleButtons = document.querySelectorAll('.toggle-password');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const passwordInput = document.getElementById(targetId);
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Change icon to show eye
                icon.className = 'fa-solid fa-eye text-gray-400 text-md';
            } else {
                passwordInput.type = 'password';
                // Change icon to show eye-slash
                icon.className = 'fa-solid fa-eye-slash text-gray-400 text-md';
            }
        });
    });
}); 