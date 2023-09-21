@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
        <div class = "flex items-center justify-items-center pb-6">
            <div class = "text-white">
                <a class = "bg-green-500 p-4 rounded-xl drop-shadow-xl border border-green-600" href="{{ route('projects.create') }}">Aggiungi +</a>
            </div>
        </div>
        <div class = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-x-2 gap-y-4">
        @foreach ($projects as $project)
                <div class = "p-4 m-1 border-2 border-slate-500 drop-shadow-2xl rounded-xl">
                    <div class = "flex items-center justify-between gap-x-2"> 
                        <h2 class = "text-2xl">
                            {{ $project->title }}
                        </h2>
                        <div class = " text-white p-2">

                            <a class = "bg-green-500 px-2 py-3 rounded-md" href="{{ route('projects.show', ['project' => $project->id]) }}">Vedi</a>
                            <a class = "bg-orange-500 px-2 py-3 rounded-md" href="{{ route('projects.show', ['project' => $project->id]) }}">Modifica</a>
                            <a class = "bg-red-500 px-2 py-3 rounded-md" href="{{ route('projects.show', ['project' => $project->id]) }}">Elimina</a>

                        </div>
                    </div>
                    
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