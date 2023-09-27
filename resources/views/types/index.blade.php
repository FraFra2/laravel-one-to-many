@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
            
    <div>
        <ul>
            @foreach ($types as $type)
                <li class = "flex flex-col gap-y-2 border border-slate-500 p-4">
                    <div>
                        ID: {{ $type->id }}
                    </div>
                    <div>
                        NOME: {{ $type->name }}
                    </div>
                    <div>
                        CREATO: {{ $type->created_at }}
                    </div>
                    <div>
                        AGGIORNATO: {{ $type->updated_at }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
            
@endsection