/* Скрипт для приховання/відображення паролю */

document.addEventListener('DOMContentLoaded', function() {
    const togglePasswordIcons = document.querySelectorAll('.authorization-password-iconhide, .authorization-password-icon');

    togglePasswordIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            const isPasswordHidden = passwordInput.type === 'password';

            passwordInput.type = isPasswordHidden ? 'text' : 'password';
            this.classList.toggle('authorization-password-iconhide', !isPasswordHidden);
            this.classList.toggle('authorization-password-icon', isPasswordHidden);
        });
    });
});