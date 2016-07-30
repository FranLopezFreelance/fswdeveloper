@inject('countries', 'App\Http\Utilities\Country')

	{{ csrf_field() }}

		<div class="form-group">
			<label for="street">Street:</label>
			<input type="text" name="street" id="street" class="form-control"
			value="{{ old('street') }}" placeholder="Street" required/>
		</div>

		<div class="form-group">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" class="form-control"
			value="{{ old('city') }}" placeholder="City" required/>
		</div>

		<div class="form-group">
			<label for="zip">Zip Code:</label>
			<input type="text" name="zip" id="zip" class="form-control"
			value="{{ old('zip') }}" placeholder="Zip Code" required/>
		</div>

		<div class="form-group">
			<label for="country">Country:</label>

			<select name="country" id="country" class="form-control">
				<option value="0">Select...</option>

				@foreach($countries::all() as $country => $code)
					<option value="{{ $code }}">{{ $country }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="state">State:</label>

			<select name="state" id="state" class="form-control">
				<option value="0">Select...</option>
			</select>
		</div>

		<hr />

		<div class="form-group">
			<label for="price">Sale Price:</label>
			<input type="text" name="price" id="price" class="form-control"
			value="{{ old('price') }}" placeholder="Price" required/>
		</div>

		<div class="form-group">
			<label for="description">Home Description:</label>
			<textarea name="description" id="description" class="form-control" rows="10"
			value="{{ old('description') }}" placeholder="Description" required></textarea>
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Create Flyer</button>
		</div>
	</div>