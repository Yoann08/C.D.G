tinymce.init({
    selector: '#writecode',
    branding: false,
    plugins: 'codesample code',
    codesample_languages: [
        { text: 'HTML', value: 'markup' },
        { text: 'JavaScript', value: 'javascript' },
        { text: 'CSS', value: 'css' },
        { text: 'PHP', value: 'php' },
    ],
    toolbar: 'codeSample',
    menubar: false,
    tabfocus_elements: ':prev,:next',
});