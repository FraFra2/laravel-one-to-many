@extends('layouts.projectsLayout')


@section('title', 'Updating Progetto N.' . $project->id)


@section('main_content')
         <div class = "w-[50%] mx-auto">
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            {{-- END DATE NULLABLE --}}
            <form class = "flex flex-col bg-slate-200 p-4 rounded-md" method = "POST" action="{{ route('projects.update', ['project'=>$project->id  ]) }}">
                @csrf
                @method('PATCH')
                <label class = "text-xl" for="titolo">Titolo Progetto</label>
                <input value="{{ $project->title }}" name = "title" class = "p-0" id = "titolo" type="text">
                <label class = "text-xl" for="desc">Decrizione Progetto</label>
                <input value="{{ $project->description }}" name = "description" class = "p-0" id = "desc" type="text">
                <label class = "text-xl" for="lang">Linguaggi Progetto</label>
                <input value="{{ $project->languages }}" name = "languages" class = "p-0" id = "lang" type="text">
                <label class = "text-xl" for="categoria">Categoria Progetto</label>
                <input value="{{ $project->category }}" name = "category" class = "p-0" id = "categoria" type="text">
                <label class = "text-xl" for="stato">Stato Progetto</label>
                <input value="{{ $project->project_status }}" name = "project_status" class = "p-0" id = "stato" type="text">
                <label class = "text-xl" for="titolo">Data Inizio Progetto</label>
                <input value="{{ $project->start_date }}" name = "start_date" class = "p-0" id = "titolo" type="date">
                <label class = "text-xl" for="titolo">Data Fine Progetto <span>(Optional)</span></label>
                <input value="{{ $project->end_date}}" name = "end_date" class = "p-0" id = "titolo" type="date">
                <button class = "mt-2 p-2 bg-green-500 text-white text-xl" type="submit">SUBMIT +</button>
            </form>
         </div>
@endsection