@extends('produtos.layout')

@section('title',__('Visualizando: ' . $produto->tipo))

@push('css')
<style>
table{
font-family: Verdana,sans-serif;
border: 1px solid #ccc;
margin: 20px 0;
}
table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span class="text-info">Infomações do Item: {{$produto->tipo}}</span>
                        <a href="{{ url('produtos') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="notranslate table table-striped"  width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$produto->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Tipo do Produto')</strong>:</th>
                            <th align="left">{{$produto->tipo}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('modelo')</strong>:</th>
                            <th align="left">{{$produto->modelo}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Marca')</strong>:</th>
                            <th align="left">{{$produto->marca}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Preço de venda')</strong>:</th>
                            <th align="left">{{$produto->precoVenda}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Cor')</strong>:</th>
                            <th align="left">{{$produto->cor}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Peso')</strong>:</th>
                            <th align="left">{{$produto->peso}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Descrição')</strong>:</th>
                            <th align="left">{{$produto->descricao}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$produto->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$produto->updated_at}}</th>
                          </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush