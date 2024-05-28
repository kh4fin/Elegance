<footer class="footer">
    <div class="container">
        <p class="copyright">
            @foreach ($header as $item)
            &copy; {{date('Y')}} All Rights Reserved by
                <a href="#" class="copyright-link">{{$item->companny_name}}</a>
            @endforeach
        </p>
    </div>
</footer>