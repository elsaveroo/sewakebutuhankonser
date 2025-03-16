<html>
<div>
    <h1>Daftar Item</h1>
    <ul>
        @foreach($items as $item)
            <li>ID: {{ $item['id'] }} - Nama: {{ $item['nama'] }}</li>
        @endforeach
    </ul>
</div>
</html>
