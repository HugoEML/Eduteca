@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacto</div>

                <div class="card-body">
                    <div class="container">
                        <form
                            class="form-group"
                            method="POST"
                            action="{{ route('contact.store') }}"
                        >
                            @csrf
                            <div class="form-group">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="name"
                                    placeholder="Nombre..."
                                    value="{{ old('name') }}"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control"
                                    type="email"
                                    name="email"
                                    placeholder="E-mail..."
                                    value="{{ old('email') }}"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="subject"
                                    placeholder="Asunto..."
                                    value="{{ old('subject') }}"
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    class="form-control"
                                    name="content"
                                    placeholder="Mensaje..."
                                    >{{ old("content") }}</textarea
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
