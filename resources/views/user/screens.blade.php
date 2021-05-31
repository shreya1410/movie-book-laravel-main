
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<link href="{{ asset('user/screenlayout.css') }}" rel="stylesheet">


<script src="jquery.js"></script>




<div class="demo">
    <div id="seat-map">
        <div class="front">SCREEN</div>
      <div class="row">
          <button>A1</button>
          <button>A2</button>
          <button>A3</button>
          <button>A4</button>
      </div>
        <div class="row">
            <button>B1</button>
            <button>B2</button>
            <button>B3</button>
            <button>B4</button>
        </div>
        <div class="row">
            <button>C1</button>
            <button>C2</button>
            <button>C3</button>
            <button>C4</button>
        </div>
        <div class="row">
            <button>D1</button>
            <button>D2</button>
            <button>D3</button>
            <button>D4</button>
        </div>
        <div class="row">
            <button>E1</button>
            <button>E2</button>
            <button>E3</button>
            <button>E4</button>
        </div>
    </div>
    <div class="booking-details">
        <p>Movie: <span>  {{$id->title}}</span></p>
        <p>Overview: <span>{{$id->overview}}</span></p>
        <p>Seat: </p>
        <ul id="selected-seats"></ul>
        <p>Tickets: <span id="counter">0</span></p>
        <p>Total: <b>$<span id="total">0</span></b></p>

        <button class="checkout-button">BUY</button>

        <div id="legend"></div>
    </div>
    <div style="clear:both"></div>
</div>


<script src="{{asset('user/js/shows.js')}}"></script>
<script src="{{asset('user/js/jquery.seat-charts.min.js')}}"></script>
