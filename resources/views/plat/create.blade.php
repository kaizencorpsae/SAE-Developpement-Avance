<form action="{{route('plats.store')}}" method="post">
     @csrf
    <input type="text" name="nom"> Titre
    <br>
    <input type="text" name="description" id=""> Description
    <br>
    <input type="submit" value="">Envoyer
</form>
