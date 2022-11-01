<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @for($i = 2; $i< count($dir_sitemaps); $i++)
    <sitemap>
        <loc>{{route('index')}}/sitemap/{{$dir_sitemaps[$i]}}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
    </sitemap>
    @endfor
</sitemapindex>
