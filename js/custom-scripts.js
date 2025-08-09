/**
 * Custom JavaScript functions for XED Cornell CHRO theme
 */

(function($) {
    'use strict';

    // Toggle Read More functionality
    window.toggleReadMore = function(button) {
        const target = button.getAttribute('data-target');
        const content = document.querySelectorAll('.readmore-content')[target];
        
        if (content) {
            const isHidden = content.style.display === 'none';
            content.style.display = isHidden ? 'block' : 'none';
            button.innerText = isHidden ? xedData.i18n.readLess : xedData.i18n.readMore;
        }
    };

    // Modal functionality with improved event handling
    window.showModal = function(modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;

        // Hide other modals
        document.querySelectorAll('.modal-custom').forEach(m => {
            if (m !== modal) m.style.display = 'none';
        });

        // Setup backdrop click handler with cleanup
        const backdrop = modal.querySelector('.c-backdrop');
        if (backdrop) {
            const closeModal = () => {
                if (modal.style.display === 'block') {
                    modal.style.display = 'none';
                    document.body.style.overflowY = 'auto';
                    document.documentElement.style.overflowY = 'auto';
                    backdrop.removeEventListener('click', closeModal);
                }
            };
            backdrop.addEventListener('click', closeModal);
        }

        // Show modal
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    };

    // Lazy load video with error handling
    window.lazyLoadVideo = function(videoId, triggerRef) {
        if (!videoId || !triggerRef) return;

        try {
            const videoHtml = `<iframe 
                src="https://www.youtube.com/embed/${videoId}?autoplay=1" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen 
                autoplay 
                class="w-full h-full">
            </iframe>`;

            triggerRef.style.display = 'none';
            triggerRef.insertAdjacentHTML('afterend', videoHtml);
        } catch (e) {
            console.error('Error loading video:', e);
        }
    };

})(jQuery); 