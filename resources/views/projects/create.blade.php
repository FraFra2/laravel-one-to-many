@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


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
            <form class = "flex flex-col bg-slate-200 p-4 rounded-md" method = "POST" action="{{ route('projects.store') }}">
                @csrf
                <label class = "text-xl" for="titolo">Titolo Progetto</label>
                <input name = "title" class = "p-0" id = "titolo" type="text">
                <label class = "text-xl" for="desc">Decrizione Progetto</label>
                <input name = "description" class = "p-0" id = "desc" type="text">
                <label class = "text-xl" for="lang">Linguaggi Progetto</label>
                <input name = "languages" class = "p-0" id = "lang" type="text">
                <label class = "text-xl" for="categoria">Categoria Progetto</label>
                <input name = "category" class = "p-0" id = "categoria" type="text">
                <label class = "text-xl" for="stato">Stato Progetto</label>
                <input name = "project_status" class = "p-0" id = "stato" type="text">
                <label class = "text-xl" for="titolo">Data Inizio Progetto</label>
                <input name = "start_date" class = "p-0" id = "titolo" type="date">
                <label class = "text-xl" for="titolo">Data Fine Progetto <span>(Optional)</span></label>
                <input name = "end_date" class = "p-0" id = "titolo" type="date">
                <button class = "mt-2 p-2 bg-green-500 text-white text-xl" type="submit">SUBMIT +</button>
            </form>
         </div>
@endsection