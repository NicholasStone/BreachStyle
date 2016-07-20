@extends("frontend.layouts.master")

@section("content")
    <!-- createDepart -->
    <div class="create">
        <div class="content">
            <div class="crtDepart">
                <form>
                    <p>党支部名称<span>*</span> :</p>
                    <input type="text" name="name" id="name" class="name" placeholder="请输入党支部名称" />
                    <div class="radioBox">
                        <p>党支部类型:</p>
                        <div class="radioitem">
                            <input type="radio" name="show" id="teashow" value="tea"/><label for="teashow">教师党支部</label>
                        </div>
                        <div class="radioitem">
                            <input type="radio" name="show" id="stushow" value="stu"/><label for="stushow">学生党支部</label>
                        </div>
                    </div>
                    <p>党支部情况介绍<span>*</span> :</p>
                    <div id="editor">
                        <div id="edit">

                        </div>
                    </div>
                    <div class="uploadFile" id="imgFile">
                        <p>党支部认证资料<span>*</span> :</p>
                        <div class="uploadBtn">
                            <input type="file" name="certify" id="certify0" onchange="loadVedioFile()" accept="image/*"/>
                            <label for="certify0"><span>上传认证资料</span></label>
                        </div>
                    </div>
                    <div class="uploadFile" id="vedioFile">
                        <p>党支部视频介绍<span>*</span> :</p>
                        <div class="uploadBtn">
                            <input type="file" name="vedioInfo" id="vedioInfo"   onchange="loadVedioFile()" accept="video/*"/>
                            <label for="vedioInfo"><span>上传宣传视频</span></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- createDepart -->

@endsection