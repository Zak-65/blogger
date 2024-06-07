document.addEventListener('DOMContentLoaded', function() {
    const newBlogButton = document.getElementById('newBlog');
    const modal = document.getElementById('new-blog-modal');
    const cancelButton = document.getElementById('cancel-button');

    newBlogButton.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });

    cancelButton.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
});

