@include('begin')

<h3>SAE - TEST - Liste des Images</h3>
<ul>
    @foreach ($images as $image)
        <li>
            <img src="{{ $image->url }}" alt="Image" style="max-width: 200px;">
        </li>
    @endforeach
</ul>
</body>
<style>
    html{
        background-color: #333;
        color: white;
        a {
            color: dodgerblue;
            text-decoration: none;
            &:hover{
                text-decoration: underline;
            }
        }
    }
</style>
</html>
