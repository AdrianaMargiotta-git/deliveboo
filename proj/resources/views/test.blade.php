
<ul>

  @foreach ($users as $user)

    <li>

      Name: {{ $user -> name}}

      @foreach ($user -> typologies as $typology)

        <ul>

          <li>Typology: {{ $typology -> type }} </li>

        </ul>

      @endforeach

      <br> <br>

      <ol>

       @foreach ($user -> dishes as $dish)

         <li>Dish: {{ $dish -> name}}  <button type="button" class="btn btn-primary">Aggiungi al carrello</button> </li>

       @endforeach

      </ol>
    </li>

  @endforeach

</ul>
