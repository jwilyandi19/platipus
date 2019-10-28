@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
            <div class="img-big-wrap">
              <div> <a href="#"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></a></div>
            </div> <!-- slider-product.// -->
            <div class="img-small-wrap">
              <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
              <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
              <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
              <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
            </div> <!-- slider-nav.// -->
            </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
            <article class="card-body p-5">
                <h3 class="title mb-3">Kemeja Putih Bapel</h3>
            
            <p class="price-detail-wrap"> 
                <span class="price h3 text-secondary"> 
                    <span class="currency">Rp.</span><span class="num">35000</span>
                </span> 
                {{-- <span>/per kg</span>  --}}
            </p> <!-- price-detail-wrap .// -->
            <dl class="item-property">
              <dt>Description</dt>
              <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco </p></dd>
            </dl>
            <dl class="param param-feature">
              <dt>Model#</dt>
              <dd>12345611</dd>
            </dl>  <!-- item-property-hor .// -->
            <dl class="param param-feature">
              <dt>Color</dt>
              <dd>Black and white</dd>
            </dl>  <!-- item-property-hor .// -->
            <dl class="param param-feature">
              <dt>Delivery</dt>
              <dd>Keputih Sukolilo</dd>
            </dl>  <!-- item-property-hor .// -->
            
            <hr>
                <div class="row">
                    <div class="col-sm-5">
                        <dl class="param param-inline">
                          <dt>Available</dt>
                          <dd>
                              <input type="text" readonly value="4" class="form-control">
                          </dd>
                        </dl>  <!-- item-property .// -->
                    </div> <!-- col.// -->
                    <div class="col-sm-7">
                        <dl class="param param-inline">
                              <dt>Size: </dt>
                              <dd>
                                  <label class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <span class="form-check-label">SM</span>
                                </label>
                                <label class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <span class="form-check-label">MD</span>
                                </label>
                                <label class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <span class="form-check-label">XXL</span>
                                </label>
                              </dd>
                        </dl>  <!-- item-property .// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
                <hr>
                <a href="#" class="btn btn-lg btn-primary text-uppercase"> Contact Now </a>
            </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
            
</div>
@endsection
