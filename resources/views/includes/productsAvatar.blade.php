<div class="products-avatar">
    <picture class="products-avatar__img">
        @foreach(config('mock.avatarPet') as $avatarPetItem)
        <img class="lozad" data-src="{{$avatarPetItem['img']}}" alt="">
        @endforeach
    </picture>
    Товары с аватаром животного – наиболее подходящие для данного питомца
</div>
