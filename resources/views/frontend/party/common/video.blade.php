<input type="text" name="strDataID" hidden value="{{ $strDataID }}" ID="strDataID">
<input type="text" name="strKey" hidden value="{{ $strKey }}" ID="strKey">
{{--                        <iframe src="http://dxsupload.enetedu.com?strDataId={{ $strDataID }}&strKey={{ $strKey }}&strType=1&ResUrl={{ route('frontend.course.callback') }}"--}}
<iframe src="http://dxsupload.enetedu.com?strDataId={{ $strDataID }}&strKey={{ $strKey }}&strType=1&ResUrl=http://q.nichospace.com/callback"
        width="900" height="300" frameborder="none"></iframe>