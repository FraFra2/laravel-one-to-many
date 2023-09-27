@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
         <div class = "w-[60%] mx-auto">
            <div class ="my-4">
                @if ($errors->any())
                <div class = "pb-4 h-32 overflow-y-scroll">
                    <ul class = "flex flex-col gap-y-2">
                        @foreach ($errors->all() as $error)
                            <li class = "p-1 bg-red-300 border border-red-500 rounded-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            {{-- END DATE NULLABLE --}}
            <form class = "flex flex-col bg-slate-200 p-4 rounded-md gap-y-4" method = "POST" action="{{ route('projects.store') }}">
                @csrf
                <label class = "text-xl" for="titolo">Titolo Progetto</label>
                <input name = "title" class = "p-0" id = "titolo" type="text">

                <label class = "text-xl" for="desc">Decrizione Progetto</label>
                <input name = "description" class = "p-0" id = "desc" type="text">

                <label class = "text-xl" for="lang">Linguaggi Progetto</label>
                <input name = "languages" class = "p-0" id = "lang" type="text">

                <label class = "text-xl" for="type">Tipo</label>
                <select name="type_id" id="type">
                    <option value="1">Front-End</option>
                    <option value="2">Back-End</option>
                    <option value="3">Full-Stack</option>
                </select>

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