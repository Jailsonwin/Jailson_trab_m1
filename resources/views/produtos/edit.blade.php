@extends('produtos.layout')

@section('title',__('Editar (CRUD Laravel)'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg mb-5 bg-black rounded">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                    <span class="text-info">Editando Item: {{$produto->tipo}}</span>
                        <a href="{{ url('produtos') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => ['ProdutoController@update',$produto->id], 'method' => 'PUT'])!!}

                    <div class="form-group">
                        {!! Form::label(__('Tipo do Produto:')) !!}
                        {!! Form::text("tipo", $produto->tipo ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Modelo:')) !!}
                        {!! Form::text("modelo", $produto->modelo ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Marca:')) !!}
                        {!! Form::text("marca", $produto->marca ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Preço de venda:')) !!}
                        {!! Form::text("precoVenda", $produto->precoVenda ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Cor:')) !!}
                        {!! Form::text("cor", $produto->cor ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Peso:')) !!}
                        {!! Form::text("peso", $produto->peso ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Descrição:')) !!}
                        {!! Form::text("descricao", $produto->descricao ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="well well-sm clearfix">
                        <button class="btn btn-success pull-right" title="@lang('Salvar')"
                            type="submit">@lang('Adicionar')</button>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script language='JavaScript'>
    $(".mmss").focusout(function () {
        var id = $(this).attr('id');
        var vall = $(this).val();
        var regex = /[^0-9]/gm;
        const result = vall.replace(regex, ``);
        $('#' + id).val(result);
    });
</script>
@endpush