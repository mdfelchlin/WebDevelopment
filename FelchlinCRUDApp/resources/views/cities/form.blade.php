<label for="name" class="form-label">Name</label>
<input type="text" class="form-input" id="name" name="name" value="{{ old('name', $city->name) }}">
<label for="state" class="form-label">State</label>
<input type="text" class="form-input" id="state" name="state" value="{{ old('state', $city->state) }}">
<label for="population_2010" class="form-label">Population</label>
<input type="integer" class="form-input" id="population_2010" name="population_2010" value="{{ old('population_2010', $city->population_2010) }}">
<label for="population_rank" class="form-label">Population Rank</label>
<input type="integer" class="form-input" id="population_rank" name="population_rank" value="{{ old('population_rank', $city->population_rank) }}">