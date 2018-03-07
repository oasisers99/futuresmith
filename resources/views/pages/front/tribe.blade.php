<!-- Participate -->
<div class="row slick-row tribe-search pt-3" id="searchTribe">
   <div class="col-12 text-center">
       <h2 class="font-weight-bold">Join a tribe</h2>
                       <p>Meet like-minded eople in 'Tribes' or groups around you</p>
   </div>
   <div class="col-12">
       <div class="slick-tribe text-center">
           @foreach ($tribes as $tribe)
           <div class="pl-3 pr-3" style="max-width: 150px;">
                <a href="{{ route('tribe.main', ["tribe_id" => $tribe->id]) }}" href="//google.com">
                    <img class="rounded-circle img-fluid" src="//via.placeholder.com/150x150" alt="Category" width="100%" height="100%"/>
                    <p class="font-weight-bold mt-1">{{ $tribe->name }}</p>
                </a>
            </div>
           @endforeach
       </div>
   </div>
</div>
<!-- /. Participate -->
<div class="row pt-3 pb-3">
    <div class="col-12">
        <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <a href="{{ route('tribe.searchTribeFull') }}" class="btn btn-primary btn-lg">Find More Tribes</a>
        </div>
    </div>
</div>
<script>
    $('document').ready(function(){
        //getFrontTribes();
        /**
         *  Retrieve tribes
         *
         */
        function getFrontTribes(){
            $.ajax({
                method: "GET",
                url: '{{ Route("front.getFrontTribes") }}'
            })
            .done(function(tribes){
                display(tribes);
            });
        }

        /**
         * Display results in the Tribes search section
         *
         * @param tribes
         */
        function display(tribes){
            if(tribes.length == 0){
                $("#search-message").text("Result not found.")
                return;
            }
        }
    });
</script>
