<div>
    <div class="container mt-4 mb-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Movimentações Recentes</h5>
            </div>
            <div class="card-body mb-4 ">
                <div class="table-responsive ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                                <th>Usuário</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimentacoes as $movimentacao)
                                <tr>
                                    <td>{{ $movimentacao->produto->nome }}</td>
                                    <td>{{ ($movimentacao->tipo) }}</td>    
                                    <td>{{ $movimentacao->quantidade }}</td>
                                    <td>{{ $movimentacao->data_movimentacao }}</td>
                                    <td>{{$movimentacao->user->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
