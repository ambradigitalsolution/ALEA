// Main Javascript File for Alea Computer Theme
console.log("Alea Computer Theme JS Loaded");

// Simple mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.mobile-menu-toggle');
    const navigation = document.querySelector('.main-navigation');
    
    if (toggleButton && navigation) {
        toggleButton.addEventListener('click', function() {
            const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', !expanded);
            
            if (!expanded) {
                navigation.style.display = 'block';
                navigation.style.position = 'absolute';
                navigation.style.top = '100%';
                navigation.style.left = '0';
                navigation.style.width = '100%';
                navigation.style.backgroundColor = 'var(--bg-dark)';
                navigation.style.padding = '20px';
                navigation.style.borderTop = '1px solid rgba(255,255,255,0.1)';
                
                const ul = navigation.querySelector('ul');
                if(ul) {
                    ul.style.flexDirection = 'column';
                    ul.style.gap = '15px';
                }
            } else {
                navigation.style.display = 'none';
                navigation.style.position = '';
                navigation.style.top = '';
                navigation.style.left = '';
                navigation.style.width = '';
                navigation.style.backgroundColor = '';
                navigation.style.padding = '';
                navigation.style.borderTop = '';
                
                const ul = navigation.querySelector('ul');
                if(ul) {
                    ul.style.flexDirection = '';
                    ul.style.gap = '';
                }
            }
        });
    }
    
    // Fix native search input 'x' clear button getting stuck
    const searchInputs = document.querySelectorAll('input[type="search"]');
    searchInputs.forEach(function(input) {
        // The 'search' event fires when the 'x' button is clicked in Chrome/Edge
        input.addEventListener('search', function() {
            if (this.value === '') {
                // When cleared, redirect back to the home/blog page
                window.location.href = window.location.origin + '/'; 
            }
        });
    });
});
