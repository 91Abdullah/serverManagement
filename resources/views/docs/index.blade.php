@include('docs.header')
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder mr-2">
                                        <i class="fas fa-map-signs"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">{{ $blog->title }}</span>
                                </h5>
                                <div class="card-text">
                                    {!! $blog->content !!}
                                </div>
                                <a class="card-link-mask" href="{{ route('single-doc.index', [$blog->id]) }}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {!! $blogs->render() !!} --}}

        </div>
    </div>
</div>
@include('docs.footer')
