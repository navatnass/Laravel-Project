<label>{{$tagname}}</label>
<select id="" name="{{$tagname}}[]" multiple class="form-control select2bs4">

    @foreach($relationItems as $relationItem)
        <option {{ ($selected($relationItem) ? 'selected' : '') }} value="{{$relationItem->id}}">
          {{$relationItem->$optionName}}
        </option>
    @endforeach

</select>
{{-- {{dd($model, $relationItems, $tagname)}} --}}