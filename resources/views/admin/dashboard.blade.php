

@extends('admin.components.layout')
@section('title')
    Dashboard | School-M-System
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Dashboard</li>
            </ol>

@includeIf('message.message')
        </div>
    </main>
@endsection

