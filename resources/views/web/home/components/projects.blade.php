<div id="fh5co-work-section" class="fh5co-light-grey-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Ultimele Proiecte</h2>
                <p>Ultimele proiecte realizate de echipa JustSolution.</p>
            </div>
        </div>
        <div class="row">
            @foreach($projects as $project)
            {!! Html::projectPanel($project->title, $project->link, $project->image, $project->category) !!}
            @endforeach

            <div class="col-md-12 text-center animate-box">
                <p><a href="{{route('web.projects.index')}}" class="btn btn-primary with-arrow">Vedeti Toate Proiectele<i class="icon-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>