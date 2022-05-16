/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import "../css/components/editor.css";
import EasyMDE from "easymde";

const editor = new EasyMDE({
    autoDownloadFontAwesome: true,
    element: document.getElementById('editor'),
    initialValue: 'Hello',
    width: '500px',
    toolbar: ["bold", "italic", "strikethrough", "|",
            "table", "link", "image", "|",
            "code", "quote", "|",
            "ordered-list", "unordered-list", "|",
            "heading-1", "heading-2", "heading-3", "|",
            "horizontal-rule", "preview", "fullscreen"
            ],
    tabSize: 4,
    autosave: {
        enabled: true,
        delay: 1000,
        timeFormat: {
            locale: "ru-RU",
        }
    }

});

document.querySelector('#createPostForm').addEventListener('submit', e => {
    e.preventDefault();
    document.querySelector('#text_markdown').value = editor.value();
    e.target.submit();
});

document.querySelector('#editPostForm').addEventListener('submit', e => {
    e.preventDefault();
    document.querySelector('#text_markdown').value = editor.value();
    e.target.submit();
});
