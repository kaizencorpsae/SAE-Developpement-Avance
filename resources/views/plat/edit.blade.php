<form action="{{route('plats.update', $plat->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="nom" value="{{$plat->nom}}"> Titre
    <br>
    <input type="text" name="description" id="" value="{{$plat->description}}"> Description
    <br>
    <input type="submit" value="">Modifier
</form>
