document.addEventListener('DOMContentLoaded', function() {
    const options = {
        placeholder: 'Hello, World!',
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, false] }],
                ['bold', 'italic', 'underline', 'image'],
                ['clean']
            ]
        }
    };

    const quill = new Quill('#editor', options);

    // Set content to hidden input on form submission
    const form = document.querySelector('form');
    form.onsubmit = () => {
        const content = quill.root.innerHTML;
        document.getElementById('editor-content').value = content;
    };

    // Image upload handler
    const toolbar = quill.getModule('toolbar');
    toolbar.addHandler('image', () => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.click();

        input.onchange = () => {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onloadend = () => {
                const range = quill.getSelection();
                quill.insertEmbed(range.index, 'image', reader.result);
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        };
    });
});
