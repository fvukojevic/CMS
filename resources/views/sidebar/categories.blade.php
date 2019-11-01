<div class="sidebar-module">
    <h4>Kategorije</h4>
    <ol class="list-unstyled">
        @foreach($categories as $category)
            <li><a href="/fsr-cms/public/category/{{ $category->name }}"> {{ $category->name }} </a></li>
        @endforeach
    </ol>
</div>