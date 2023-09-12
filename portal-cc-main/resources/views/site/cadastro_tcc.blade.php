@extends('site/menu')
@section('title', 'Cadastro TCC')
@section('content')

<div class="custom-container">
    <div>
        <div>
            <i class="fas fa-graduation-cap fa-2x"></i>
            <h3 class="smaller-font">Cadastro do TCC</h3>
        </div>
    </div>
</div>

<div class="container mt-4">
    <form>
        <div class="mb-3">
            <label for="titulo" class="form-label"> <br>Título*:</label>
            <input type="text" class="form-control" id="titulo" placeholder="Digite o título" required>
        </div>
        <div class="mb-3">
            <label for="resumo" class="form-label"><br>Resumo*:</label>
            <textarea class="form-control" id="resumo" rows="4" placeholder="Digite o resumo" required></textarea>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label"><br>Link para Download:</label>
            <input type="url" class="form-control" id="link" placeholder="Insira o link">
        </div>
        <div class="row">
            <div class="mb-3">
                <label for="aluno" class="form-label"> <br>Aluno*:</label>
                <select class="form-select" id="aluno" required>
                    <option value="" disabled selected>Selecione um aluno</option>
                </select>
            </div>
            <div class="col-md-3 mb-3 d-flex align-items-end">
                <a href="#" class="btn custom-button">Cadastrar Aluno</a>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn custom-button">Cadastrar TCC</button>
        </div>
    </form>
</div>

<script>
    var selectAluno = document.getElementById('aluno');
    var alunos = ['Aluno 1', 'Aluno 2', 'Aluno 3'];

    for (var i = 0; i < alunos.length; i++) {
        var option = document.createElement('option');
        option.value = 'aluno' + (i + 1);
        option.text = alunos[i];
        selectAluno.appendChild(option);
    }
</script>

@endsection
