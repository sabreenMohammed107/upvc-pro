
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://upvcp.com/</loc>
    </url>
    <url>
        <loc>https://upvcp.com/about</loc>
    </url>
    <url>
        <loc>https://upvcp.com/products</loc>
    </url>
    <url>
        <loc>https://upvcp.com/gallery</loc>
    </url>
    <url>
        <loc>https://upvcp.com/blogs</loc>
    </url>
    <url>
        <loc>https://upvcp.com/contact</loc>
    </url>
    @foreach($blogs as $blog)
        <url>
            <loc>https://upvcp.com/single-blog/{{ $blog->id }}</loc>
        </url>
    @endforeach

    @foreach($products as $product)
    <url>
        <loc>https://upvcp.com/single-product/{{ $product->id }}</loc>
    </url>
@endforeach
</urlset>
