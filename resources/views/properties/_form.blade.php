<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="tab-content">
	<div class="tab-content">
		@foreach(config('translatable.languages') as $language=>$name)
            <div class="form-group">
				<label > Name ({{$name}})</label>
				<input class="form-control" name="name[{{$language}}]" value="{{ old('name.'.$language, $property->getTranslation('name',$language)) }}" type="text" data-parsley-required="true"  placeholder="Input Placeholder Goes Here ..." data-parsley-required="true" data-parsley-error-message="This field is required">    
            </div>
		@endforeach
		    <div class="form-group">
                <label> Building </label>
                <select class="form-control"  data-parsley-required="true" name="building_id">
                    @if($buildingsArray && !empty($buildingsArray))
                        @foreach($buildingsArray as $id=>$value)
                        <option value="{{$id}}" {{ old('building_id' , $property->building_id) == $id ? 'selected' : '' }} >{{$value}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
				<label > No Of Bathrooms </label>
				<input class="form-control" name="no_of_bathrooms" value="{{ old('no_of_bathrooms' , $property->no_of_bathrooms) }}" type="number" data-parsley-required="true"  placeholder="Input Placeholder Goes Here ..." data-parsley-error-message="This field is required">    
            </div>
            <div class="form-group">
				<label > No Of Bedrooms </label>
				<input class="form-control" name="no_of_bedrooms" value="{{ old('no_of_bedrooms' , $property->no_of_bedrooms) }}" type="number" data-parsley-required="true"  placeholder="Input Placeholder Goes Here ..." data-parsley-error-message="This field is required">    
            </div>
            <div class="form-group">
				<label > No Of Guest Rooms </label>
				<input class="form-control" name="no_of_guestrooms" value="{{ old('no_of_guestrooms' , $property->no_of_guestrooms) }}" type="number" data-parsley-required="true"  placeholder="Input Placeholder Goes Here ..." data-parsley-error-message="This field is required">    
            </div>
		    <div class="form-group">
                <label> Promotions </label>
                <select class="form-control"  multiple data-parsley-required="true" name="promotions[]">
                    @if($promotionsArray && !empty($promotionsArray))
                        @foreach($promotionsArray as $id=>$value)
                        <option value="{{$id}}"  @if(in_array($id, old('promotions', $selected_promotions) )) selected @endif >{{$value}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        <div class="submit">
            <input class="btn btn-block btn-primary btn-lg pull-right" type="submit" value="Submit">
        </div>
	</div>
</div>
