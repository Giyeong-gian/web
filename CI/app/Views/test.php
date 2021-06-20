<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hello World!</title>
    <script type="text/javascript" src="/smarteditor2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
  <h1>반갑습니다.</h1>
    <textarea id="ir1" row="10" cols="100" style="width:100%;"></textarea>
    <script>
        var oEditors = [];
        $(document).ready(function(){
            nhn.husky.EZCreator.createInIFrame({
                oAppRef:oEditors,
                elPlaceHolder: 'ir1',
                sSkinURI: '/smarteditor2/SmartEditor2Skin.html',
                fCreater: 'createSEditor2'
            });            
        });
    </script>
</body>
</html>
