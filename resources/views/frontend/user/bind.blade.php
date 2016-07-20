@extends("frontend.layouts.master")

@section("content")
<!-- bindinfo -->
<div class="bindinfo">
    <div class="content">
        <div class="headImg">
            <div class="headImgBox">
                <img src="img/summer_beach.jpg"/>
            </div>
        </div>
        <div class="infoList">
            <form>
                <p>请输入真实姓名 *<input type="type" name="realName" id="realName" value="" /></p>
                <p for="telephone">请输入办公电话 *<input type="type" name="telephone" id="telephone" value="" /></p>
                <input type="submit" name="sub" id="sub" class="submitBtn" value="提交" />
            </form>
        </div>
    </div>
</div>
<!-- bindinfo -->
@endsection