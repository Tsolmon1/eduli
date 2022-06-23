<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>TinyMce 4 With Jquery</title>
   
     <!-- JavaScript -->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/plugin/tiny/tinymce/tinymce.min.js"></script>
    <script src="/plugin/tiny/jquery.tinymce.js"></script>
    <script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",width: 680,height: 120, language : "mn_MN",
    plugins: [

           "advlist autolink link image lists charmap print preview hr anchor pagebreak",
           "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
           "table contextmenu directionality emoticons paste textcolor responsivefilemanager youtube code", "template"

     ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
     toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code youtube",
     image_advtab: true ,



      convert_urls: false,
     external_filemanager_path:"/plugin/tiny/filemanager/",
     filemanager_title:"файл оруулах хэсэг" ,
     external_plugins: { "filemanager" : "/plugin/tiny/filemanager/plugin.min.js"},
     style_formats: [
      {title: "Headers", items: [
          {title: "Header 1", format: "h1"},
          {title: "Header 2", format: "h2"},
          {title: "Header 3", format: "h3"},
          {title: "Header 4", format: "h4"},
          {title: "Header 5", format: "h5"},
          {title: "Header 6", format: "h6"}

      ]},

      {title: "Inline", items: [
          {title: "Bold", icon: "bold", format: "bold"},
          {title: "Italic", icon: "italic", format: "italic"},
          {title: "Underline", icon: "underline", format: "underline"},
          {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
          {title: "Superscript", icon: "superscript", format: "superscript"},
          {title: "Subscript", icon: "subscript", format: "subscript"},
          {title: "Code", icon: "code", format: "code"}

      ]},

      {title: "Blocks", items: [
          {title: "Paragraph", format: "p"},
          {title: "Blockquote", format: "blockquote"},
          {title: "Div", format: "div"},
          {title: "Pre", format: "pre"}
      ]},

      {title: "Alignment", items: [
          {title: "Left", icon: "alignleft", format: "alignleft"},
          {title: "Center", icon: "aligncenter", format: "aligncenter"},
          {title: "Right", icon: "alignright", format: "alignright"},
          {title: "Justify", icon: "alignjustify", format: "alignjustify"}
      ]},

      {title: "Зүүн шахах", selector: "img", styles: {
          "float" : "left", 
          "margin": "5px"
      }},

      {title: "Баруу шахах", selector: "img", styles: {
          "float" : "right", 
          "margin": "5px"

      }}]
});
</script>

  </head>
  <body >
      text<br>
      <textarea name="test" id="test" cols="30" rows="10"></textarea>
  </body>
</html>