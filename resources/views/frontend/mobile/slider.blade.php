<style>
    ul, ol {
        padding: 0;
    }

    #slider {
        width: 100%;
        height: 195px;
        z-index: 1000;
    }

    #slider img{
        width: 100%;
    }

    #slider li {
        list-style: none;
    }

    #slider ul li {
        float: left;
    }

    #slider .dots li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 0 4px;
        text-indent: -999em;
        border: 2px solid #fff;
        border-radius: 6px;
        cursor: pointer;
        opacity: .4;
        -webkit-transition: background .5s, opacity .5s;
        -moz-transition: background .5s, opacity .5s;
        transition: background .5s, opacity .5s;
    }
    
    #slider .arrow {
        position: absolute;
        top: 200px;
    }

    #slider img {
        width: 100% !important;
    }

    #slider #al {
        left: 15px;
        vertical-align: middle;
    }

    #slider #ar {
        right: 15px;
        vertical-align: middle;
    }
</style>
<div id="slider">
    <ul>
        @foreach($sliders as $slider)
            <li><a href="{{ $slider->link }}">{!! $slider->path !!}</a></li>
        @endforeach
    </ul>
</div>
<script>
    $(function () {
        $("#slider").unslider({
            fluid:true,
            nav:false,
            infinite: true,
            animation:'fade',
            arrows: false
        })
    })
</script>