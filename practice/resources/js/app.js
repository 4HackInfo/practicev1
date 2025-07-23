import './bootstrap';

// Store & apply background
window.changeBackground = function(imageFile) {
    const body = document.getElementById('main-body');
    if (body) {
        body.style.backgroundImage = `url('/${imageFile}')`;
        localStorage.setItem('backgroundImage', imageFile); // ✅ Save to localStorage
    }
};

// On page load, apply saved background
window.addEventListener('DOMContentLoaded', () => {
    const savedBackground = localStorage.getItem('backgroundImage');
    const body = document.getElementById('main-body');
    if (savedBackground && body) {
        body.style.backgroundImage = `url('/${savedBackground}')`;
    }
});
