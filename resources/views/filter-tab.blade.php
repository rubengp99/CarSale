@section('filters')
<div class="filters">
		<a style="vertical-align:middle;"class="cd-filter-trigger" id="trigger-filter"><i style="vertical-align:middle;" class="material-icons">assignment</i>&nbsp;Filters</a>
		<em></em>
	</div>
	<div class="cd-filter">
		<a style="vertical-align:middle;"class="cd-filter-trigger" id='trigger-disabled'><i style="vertical-align:middle;" class="material-icons">assignment</i>&nbsp;Filters</a>

			<form>
        
        <div class="cd-filter-block adjust ">
					<h4 >Sort by Price</h4>

					<ul class="cd-filter-content cd-filters list adjust" id="radios">
						<li>
							<input class="filter" data-filter="*" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All Prices</label>
						</li>

						<li>
							<input class="filter" data-filter="asc" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Lowest to Highest</label>
						</li>

						<li>
							<input class="filter" data-filter="desc" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Highest to Lowest</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
        
				<div class="cd-filter-block adjust">
					<h4>Find a Car</h4>
					
					<div class="cd-filter-content adjust">
						<input type="text" placeholder="Look something specific" id="quicksearch">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Sort by Condition</h4>

					<ul class="cd-filter-content cd-filters list adjust" id="checkboxes">
						<li>
							<input class="filter" data-filter="*" type="checkbox" id="checkbox5" checked=true>
			    			<label class="checkbox-label" for="checkbox5">All</label>
						</li>
						<li>
							<input class="filter" data-filter=".new" type="checkbox" id="checkbox1">
			    			<label  class="checkbox-label" for="checkbox1">New</label>
						</li>

						<li>
							<input class="filter" data-filter=".used" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">Used</label>
						</li>

						<li>
							<input class="filter" data-filter=".unew" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Used but New</label>
						</li>
            						<li>
							<input class="filter" data-filter=".defect" type="checkbox" id="checkbox4">
							<label class="checkbox-label" for="checkbox4">Used with Defects</label>
						</li>
            					
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Sort by Brand</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" id="select">
								<option value="*">All Brands</option>
								<option value=".toyota">Toyota</option>
								<option value=".hyundai">Hyundai</option>
								<option value=".ford">Ford</option>
								<option value=".chevrolet">Chevrolet</option>
								<option value=".kia">Kia</option>
								<option value=".nissan">Nissan</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				
			</form>

      <a class="cd-close"><i style="vertical-align:middle;" class="material-icons">close</i></a>
		</div> <!-- cd-filter -->
@endsection