@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
        <div class = "flex justify-stretch text-center py-4">
            <a class = "bg-green-500 text-white text-xl w-full p-4 rounded-xl drop-shadow-xl border border-green-600" href="{{ route('projects.create') }}">Aggiungi +</a>
        </div>
        <div class = "grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-2 gap-y-4">
        @foreach ($projects as $project)
                <div class = "project-card">
                    <div class="project-card-body">
                        <div> 
                            <h2 class = "text-2xl">
                                {{ $project->title }}
                            </h2>  
                        </div>
                        
                        <p>
                            Description: {{ $project->description }}
                        </p>
                        <h4>
                            Type: <span class = "text-xl">{{ $project->type->name }}</span> 
                        </h4>
                        <h4s>
                            Languages: {{ $project->languages }}
                        </h4s>
                        <h4>
                            Status: {{ $project->project_status }}
                        </h4>
                        <div class = "flex justify-between p-1 my-1">
                            <h4>
                                Starting Date: {{ $project->start_date }}
                            </h4>
                            <h4>
                                End Date: {{ $project->end_date }}
                            </h4>
                        </div>
                    </div>
                    

                    <div class = "text-white flex items-center justify-evenly py-4">
                        <div>
                            <a class = "bg-green-500 px-2 py-3 rounded-md" href="{{ route('projects.show', ['project' => $project->id]) }}"><i class="fa-solid fa-eye"></i> Vedi</a>
                        </div>
                        <div>
                            <a class = "bg-orange-500 px-2 py-3 rounded-md" href="{{ route('projects.edit', ['project' => $project->id]) }}"><i class="fa-solid fa-pencil"></i> Modifica</a>
                        </div>
                        <div>
                            <form method = "POST" action="{{ route('projects.destroy', ['project'=>$project->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Sei sicuro di voler eliminare il progetto {{ $project->title }}?')" class = "bg-red-500 px-2 py-3 rounded-md" type = "submit">
                                    <i class="fa-solid fa-trash"></i> Elimina
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- <div class = "text-right">
                        <small>id: {{ $project->id }}</small>
                    </div> --}}
                </div>  
        @endforeach
         </div>
@endsection