<!-- Participate -->
<div class="row slick-row tribe-search" id="searchTribe">
    <div class="col text-center">
        <h2 class="font-weight-bold">Participate Now</h2>
        <p>You can join one of our many ongoing projects</p>
     </div>
</div>
<div class="row slick-row equal-height">
   <div class="col-12">
       <div class="slick-projects card-deck text-center">
           @foreach ($projects as $project)


           <div class="card" style="max-width:278px;">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22278%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20278%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_161fa01f27f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_161fa01f27f%22%3E%3Crect%20width%3D%22278%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22103.203125%22%20y%3D%2296.3%22%3E278x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
            <div class="card-body">
              <h5 class="card-title">{{ $project->title }}</h5>
            </div>
            <div class="card-footer">
              <a href="{{ route('front.viewProject', ["projectId" => $project->id]) }}" class="btn btn-outline-primary">Learn more</a>
            </div>
        </div>
           @endforeach

       </div>
   </div>
</div>
<!-- /. Participate -->
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
