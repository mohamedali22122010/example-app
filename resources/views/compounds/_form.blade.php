<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="tab-content">
	<div class="tab-content">
		@foreach(config('translatable.languages') as $language=>$name)
            <div class="form-group">
				<label > Name ({{$name}})</label>
				<input class="form-control" name="name[{{$language}}]" value="{{ old('name.'.$language, $compound->getTranslation('name',$language)) }}" type="text" data-parsley-required="true"  placeholder="Input Placeholder Goes Here ..." data-parsley-required="true" data-parsley-error-message="This field is required">    
            </div>
		@endforeach
		<div class="form-group">
                <label> District </label>
                <select class="form-control"  data-parsley-required="true" name="district_id">
                    @if($districtsArray && !empty($districtsArray))
                        @foreach($districtsArray as $id=>$value)
                        <option value="{{$id}}" {{ old('district_id' , $compound->district_id) == $id ? 'selected' : '' }} >{{$value}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        <div class="submit">
            <input class="btn btn-block btn-primary btn-lg pull-right" type="submit" value="Submit">
        </div>
	</div>
</div>
