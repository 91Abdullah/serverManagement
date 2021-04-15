<div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">
            <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span
                        class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>Blogs</a></li>

            @foreach ($blogs as $blog)

                <li class="nav-item"><a class="nav-link" href="{{ route('single-doc.index', [$blog->id]) }}">{{$blog->title}}</a></li>

            @endforeach
        </ul>

    </nav>
    <!--//docs-nav-->
</div>
