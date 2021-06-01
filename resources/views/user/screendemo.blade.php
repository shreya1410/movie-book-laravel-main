

<div class="demo">
    <div id="seat-map">
<body>
<button id="btnSeating" >Fill Seating</button>
<div id="messagePanel" class="messagePanel"></div>

</body>
    </div>

    <div class="booking-details">
        <p>Movie: <span>  {{$id->title}}</span></p>
        <p>Overview: <span>{{$id->overview}}</span></p>
        <p>Release year: <span>{{$id->release_year  }}</span></p>

        <p>Seat: </p>
        <ul id="selected-seats"></ul>
        <p>Tickets: <span id="counter">0</span></p>
        <p>Total: <b>$<span id="total">0</span></b></p>

        <button class="checkout-button">BUY</button>

        <div id="legend"></div>
    </div>
    <div style="clear:both"></div>
</div>



<style>
    .messagePanel { border: solid 1px black; width: 320px; height: 330px; }

    .seat {
        width: 20px;
        height: 20px;
        margin: 5px;
        border: solid 1px black;
        float: left;
    }

    .clearfix { clear: both;}
    .available {
        background-color: #96c131;
    }

    .hovering{
        background-color: #ae59b3;
    }
    .selected{
        background-color: red;
    }

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function(){

        $('#btnSeating').on('click', createseating);


    });

    function createseating(){
        var seatingValue = [];
        for ( var i = 0; i < 10; i++){
            for (var j=0; j<10; j++){
                var seatingStyle = "<div class='seat available'></div>";
                seatingValue.push(seatingStyle);
                if ( j === 9){
                    var seatingStyle = "<div class='clearfix'></div>";
                    seatingValue.push(seatingStyle);
                }
            }
        }
        $('#messagePanel').html(seatingValue);

        $(function(){
            $('.seat').on('click',function(){
                if($(this).hasClass( "selected" )){

                    $( this ).removeClass( "selected" );
                    console.log('clicke')
                }else{
                    $( this ).addClass( "selected" );
                }
            });

            $('.seat').mouseenter(function(){
                $( this ).addClass( "hovering" );
                $('.seat').mouseleave(function(){
                    $( this ).removeClass( "hovering" );
                });
            });
        });
    }
</script>



