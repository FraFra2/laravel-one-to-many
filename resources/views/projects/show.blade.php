@extends('layouts.projectsLayout')


@section('title', 'Progetto '.$project->id)


@section('main_content')
        <div class = "grid grid-cols-1  gap-x-2 gap-y-4">
            
                <div class = "project-card">
                    <div class = "flex gap-4 text-white p-2">

                        <a class = "bg-orange-500 px-2 py-3 rounded-md" href="{{ route('projects.edit', ['project' => $project->id]) }}"><i class="fa-solid fa-pencil"></i> Modifica</a>
                        <form method = "POST" action="{{ route('projects.destroy', ['project'=>$project->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Sei sicuro di voler eliminare il progetto {{ $project->title }}?')" class = "bg-red-500 px-2 py-3 rounded-md" type = "submit">
                                <i class="fa-solid fa-trash"></i> Elimina
                            </button>
                        </form>
                    </div>
                    <div class = "project-card-body"> 
                        <h2 class = "text-2xl">
                            {{ $project->title }}
                        </h2>
                        <p>
                            Description: {{ $project->description }}
                        </p>
                        <h4>
                            Type: <span class = "text-xl">{{ $project->type->name }}</span> 
                        </h4>
                        <h4 class = "border-b-2 border-red-600">
                            Languages: {{ $project->languages }}
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
                </div>  
         </div>
@endsection