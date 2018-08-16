

<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Über</h4>
        <p>Das ist <em>ein Blog</em> für alle über alles</p>
    </div>
    <div class="sidebar-module">
        <h4>Archiv</h4>
        <ol class="list-unstyled">
            @foreach ($archives as $stats)
                <li>
                    <a href="/?month={{ $stats['month']}}&year={{$stats['year']}}">
                        {{ $stats['month'].' '. $stats['year']}}
                    </a>
                </li>
            @endforeach

        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Links</h4>
        <ol class="list-unstyled">
            <li><a href="https://www.wikipedia.de/">Wikipedia</a></li>
            <li><a href="https://twitter.com/?lang=de">Twitter</a></li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
        </ol>
        <img src="/images/zeus.jpg" height="150" width="150">
    </div>
</div>