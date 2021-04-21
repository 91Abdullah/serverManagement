@include('single-doc.header')
<div class="docs-wrapper">
    @include('single-doc.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">{{ $blog->title }} <span class="docs-time">Last updated: {{$blog->updated_at}}</span></h1>
                    <section class="docs-intro">
                        <p>{!! $blog->content !!}</p>
                    </section>
                    <!--//docs-intro-->

                    {{-- <h5>Github Code Example:</h5>
                    <p>You can <a class="theme-link" href="#" target="_blank">embed your code
                            snippets using Github gists</a></p>
                    <div class="docs-code-block">
                        <!-- ** Embed github code starts ** -->
                        <script src="#"></script>
                        <!-- ** Embed github code ends ** -->
                    </div>
                    <!--//docs-code-block-->

                    <h5>Highlight.js Example:</h5>
                    <p>You can <a class="theme-link" href="#"
                            target="_blank">embed your code snippets using highlight.js</a> It supports <a
                            class="theme-link" href="#" target="_blank">185 languages
                            and 89 styles</a>.</p>
                    <p>This template uses 
                    </p>
                    <div class="docs-code-block">

                    </div> --}}
                </header>
            </article>

            @include('single-doc.footer')
