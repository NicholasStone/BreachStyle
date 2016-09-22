<div class="click" id="click">
    <a href="javascript:void(0);" id="fancy" role="button"><span class="icon iconfont">&#xe604;</span> 点赞</a>
    <p>
        <d id="fancy-total">{{ $application->fancy }}</d>次赞
    </p>
</div>
@section('after-scripts-end')
    <script type="text/javascript">
        $(function () {
            var end = null;
            var date = new Date();
            $("#fancy").click(function () {
                if (end - date.getTime() < 0) {
                    $.ajax({
                        url: "{{ route('frontend.fancy', $application->id) }}",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        method: "get",
                        success: function (data) {
                            var fancy = $('#fancy-total');
                            fancy.text(data.total);
                            end = date.getTime() + 60000;
                        },
                        error: function () {
                            sweetAlert('点赞失败', '请重试', 'error');
                        }
                    })
                } else {
                    sweetAlert('您还不能进行下一次点赞')
                }
            });
        })
    </script>
@endsection