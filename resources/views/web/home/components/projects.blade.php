<div id="fh5co-work-section" class="fh5co-light-grey-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Latest Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>
        <div class="row">
            @foreach($projects as $project)
            {!! Html::projectPanel($project->title, $project->link, $project->image, $project->category) !!}
            @endforeach

            <div class="col-md-12 text-center animate-box">
                <p><a href="#" class="btn btn-primary with-arrow">View More Projects <i class="icon-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>