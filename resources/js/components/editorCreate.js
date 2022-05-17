import EasyMDE from "easymde";
const editorCreate = new EasyMDE({
    autoDownloadFontAwesome: true,
    element: document.querySelector('#editorCreate'),
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

if (document.querySelector('#createPostForm') !== null) {
    document.querySelector('#createPostForm').addEventListener('submit', (e) => {
        e.preventDefault();
        document.querySelector('#text_markdown').value = editorCreate.value();
        e.target.submit();
    });

}
