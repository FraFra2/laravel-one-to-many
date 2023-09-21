@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
        <div class = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5">
        @foreach ($projects as $project)
                <div class = "p-4 m-1 border border-slate-500 drop-shadow-xl">
                    <h2 class = "text-2xl">
                        {{ $project->title }}
                    </h2>
                    <p>
                        Description: {{ $project->description }}
                    </p>
                    <h4 class = "border-b-2 border-red-600">
                        Languages: {{ $project->languages }}
                    </h4>
                    <h4>
                        Category: <span class = "text-xl">{{ $project->category }}</span> 
                    </h4>
                    <h4>
                        Status: {{ $project->project_status }}
                    </h4>
                    <div class = "flex justify-between border border-slate-300 p-1 my-1">
                        <h4>
                            Starting Date: {{ $project->start_date }}
                        </h4>
                        <h4>
                            End Date: {{ $project->end_date }}
                        </h4>
                    </div>
                    <div class = "text-right">
                        <small>id: {{ $project->id }}</small>
                    </div>
                </div>  
        @endforeach
         </div>
@endsection