        <div class="main-slide">
        <div class="container-slide">
            <div class="cloud1"><a href="#" class="btn-link">Нийт онцлох</a></div>
            <div class="owl-carousel" style="position: relative;">
                <div class="slide01" >
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 50px; bottom: 50px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/niseh.jpg')}}">
                </div>
                <div class="slide02">
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 50px; bottom: 50px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/usa-study.jpg')}}">
                </div>
                <div class="slide03">
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 50px; bottom: 50px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/slide01.png')}}"></div>
                <div class="slide04" >
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 50px; bottom: 50px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/America.jpg')}}">
                </div>
                <div class="slide04" >
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 50px; bottom: 50px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/Korea-tulbur.jpg')}}">
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        center: true,
                        items: 1,
                        merge:true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsive:{
                            0:{
                                items:1
                            }
                        }
                    });
                })
            </script>
        </div>
    </div>