import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.category-filter');
    const courseCards = document.querySelectorAll('.course-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove active class from all buttons
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
                // Reset button styles
                const bgSpan = btn.querySelector('.absolute.inset-0.bg-linear-to-r');
                if (bgSpan) {
                    bgSpan.style.opacity = '0';
                }
            });

            // Add active class to clicked button
            this.classList.add('active');
            const activeBg = this.querySelector('.absolute.inset-0.bg-linear-to-r');
            if (activeBg) {
                activeBg.style.opacity = '1';
            }

            const category = this.dataset.category;

            // Filter courses
            courseCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Trigger click on "All Courses" button by default
    const allCoursesBtn = document.querySelector('.category-filter[data-category="all"]');
    if (allCoursesBtn) {
        allCoursesBtn.click();
    }
});