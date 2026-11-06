<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thực hành TinyMCE</title>
    
    
    <script src="https://cdn.tiny.cloud/1/ncynn0ykbrzf1ewnd1y1mkdv5kkxjj5v8ikq77h90r3tbapx/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    
</head>
<body>

    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Premium features
        'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'tinymceai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | tinymceai-chat tinymceai-quickactions tinymceai-review | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
        ],
        tinymceai_token_provider: async () => {
        await fetch(`https://demo.api.tiny.cloud/1/ncynn0ykbrzf1ewnd1y1mkdv5kkxjj5v8ikq77h90r3tbapx/auth/random`, { method: "POST", credentials: "include" });
        return { token: await fetch(`https://demo.api.tiny.cloud/1/ncynn0ykbrzf1ewnd1y1mkdv5kkxjj5v8ikq77h90r3tbapx/jwt/tinymceai`, { credentials: "include" }).then(r => r.text()) };
        },
        uploadcare_public_key: '3eb21363200d3b38f515',
    });
    </script>
    
    <form action="xuly.php" method="post">
        <textarea name="tomtat" id="tomtat"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Gửi dữ liệu">
    </form>

</body>
</html>