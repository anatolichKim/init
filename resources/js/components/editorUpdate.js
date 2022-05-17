import EasyMDE from "easymde";
const editorUpdate = new EasyMDE({
    autoDownloadFontAwesome: true,
    element: document.querySelector('#editorUpdate'),
    initialValue: 'Hello',
    toolbar: ["bold", "italic", "strikethrough", "|",
        "table", "link", "image", "|",
        "code", "quote", "|",
        "ordered-list", "unordered-list", "|",
        "heading-1", "heading-2", "heading-3", "|",
        "horizontal-rule", "preview", "fullscreen",
    ],
    tabSize: 4,
});

if (document.querySelector('#editPostForm') !== null) {
    editorUpdate.value(document.getElementById('text_display').value);

    document.querySelector('#editPostForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#text_markdown').value = editorUpdate.value();
        e.target.submit();
    });
}


