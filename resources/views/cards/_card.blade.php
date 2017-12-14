<article class="Card">
    <h3> {{ $card->title }} </h3> 
    <ul>
        @foreach ($card->notes as $note) 
            @include ('cards/_note') 
        @endforeach 
    </ul> 
</article>
