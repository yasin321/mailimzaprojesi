<form action="" id="formmm2">
<div class="list-group">
    <input type="hidden" id="tema_id">
    @foreach($personeller as $list)
        <a href="javascript:void(0);" onclick="$.tema_goster({{$list->id}})" class="list-group-item list-group-item-action">{{$list->personel_adsoyad}}</a>
    @endforeach
</div>
</form>
