<p style="color: red">视频格式为 MP4,wmv,flv,f4v格式视频文件，文件大小不限，只能上传一个视频文件。请使用火狐浏览器上传视频</p>
<input type="text" name="strDataID" hidden value="{{ $strDataID }}" ID="strDataID">
<input type="text" name="strKey" hidden value="{{ $strKey }}" ID="strKey">
<iframe src="http://dxsupload.enetedu.com?strDataId={{ $strDataID }}&strKey={{ $strKey }}&strType=1&ResUrl={{ route('frontend.course.callback') }}"
        width="900" height="300" frameborder="none"></iframe>