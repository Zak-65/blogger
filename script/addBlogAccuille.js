    // Get the modal, open button and close button
    const modal = document.getElementById('blogModal');
    const openButton = document.getElementById('addBlog');
    const closeButton = document.getElementById('closeModalButton');

    // Function to open the modal
    openButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Function to close the modal
    closeButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    });

    // Handle form submission
    document.getElementById('newBlogForm').addEventListener('submit', (event) => {
        event.preventDefault();
        const title = document.getElementById('blogTitle').value;
        const content = document.getElementById('blogContent').value;
        const image = document.getElementById('blogImage').value;

        // Close the modal after submission
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });