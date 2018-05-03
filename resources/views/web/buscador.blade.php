<section class="module no-padding-top filter">

  <div class="tabs">

    <div class="filter-header">
      <div class="container">
          <ul>
            <li><a href="#tabs-1">All</a></li>
            <li><a href="#tabs-2">For Sale</a></li>
            <li><a href="#tabs-3">For Rent</a></li>
          </ul>
      </div><!-- end container -->
    </div><!-- end filter header -->

    <div class="container">

      <div id="tabs-1" class="ui-tabs-hide">
        <form method="get">
          
          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
              <option value="villa">Villa</option>
              <option value="office">Office</option>
              <option value="retail">Retail</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="baltimore">Baltimore</option>
              <option value="annapolis">Annapolis</option>
              <option value="nyc">New York City</option>
              <option value="miami">Miami</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label>Beds</label>
            <select name="beds" id="property-beds">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Baths</label>
            <select name="baths" id="property-baths">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Area</label>
            <input type="number" name="areaMin" class="area-filter" placeholder="Min" />
            <input type="number" name="areaMax" class="area-filter" placeholder="Max" />
            <div class="clear"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label class="label-submit">Submit</label><br/>
            <input type="submit" class="button alt" value="Find Properties" />
          </div>

        </form>
      </div><!-- end tab 1 -->

      <div id="tabs-2" class="ui-tabs-hide">
        <form method="get">
          
          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
            <div class="price-slider-values">
              <span class="price-range-num" id="price-low-value-1"></span>
              <span class="price-range-num right" id="price-high-value-1"></span>
            </div>
          </div>

          <div class="filter-item filter-item-7">
            <label>Beds</label>
            <select name="beds" id="property-beds">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Baths</label>
            <select name="baths" id="property-baths">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Area</label>
            <input type="number" name="areaMin" class="area-filter" placeholder="Min" />
            <input type="number" name="areaMax" class="area-filter" placeholder="Max" />
            <div class="clear"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label class="label-submit">Submit</label><br/>
            <input type="submit" class="button alt" value="Find Properties" />
          </div>

        </form>
      </div><!-- end tab 2 -->

      <div id="tabs-3" class="ui-tabs-hide">
        <form method="get">
          
          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
            <div class="price-slider-values">
              <span class="price-range-num" id="price-low-value-2"></span>
              <span class="price-range-num right" id="price-high-value-2"></span>
            </div>
          </div>

          <div class="filter-item filter-item-7">
            <label>Beds</label>
            <select name="beds" id="property-beds">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Baths</label>
            <select name="baths" id="property-baths">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Area</label>
            <input type="number" name="areaMin" class="area-filter" placeholder="Min" />
            <input type="number" name="areaMax" class="area-filter" placeholder="Max" />
            <div class="clear"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label class="label-submit">Submit</label><br/>
            <input type="submit" class="button alt" value="Find Properties" />
          </div>

        </form>
      </div><!-- end tab 3 -->

    </div><!-- end container -->
  </div><!-- end tabs -->
</section>