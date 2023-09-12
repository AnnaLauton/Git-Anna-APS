@extends('site/menu')
@section('title', 'TCCs')
@section('content')

<div class="custom-container">
    <div>
        <div>
            <i class="fas fa-graduation-cap fa-2x"></i>
            <h3 class="smaller-font">TCCs</h3>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h4 class="h4_filtro">Filtro: </h4>
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar">
            </div>
        </div>
        <div class="col-md-4">
            <h4 class="h4_filtro">Filtrar por: </h4> <!-- Título Filtrar por -->
            <div class="input-group">
                <select id="filterField" class="form-select">
                    <option value="titulo">Título</option>
                    <option value="aluno">Aluno</option>
                    <option value="orientador">Orientador</option>
                    <option value="data">Data</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Espaço entre o filtro e a listagem -->
    <div class = "div_filtro"></div>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Aluno</th>
                <th>Orientador</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <!-- Linhas da tabela serão geradas pelo JavaScript -->
        </tbody>
    </table>
</div>

<!-- Bloco de script JavaScript para gerar os dados de exemplo e funcionalidade de busca -->
<script>
    const tccs = [
        {
            titulo: 'Titulo1',
            aluno: 'Aluno1',
            orientador: 'Orientador1',
            data: '01/01/2023'
        },
        {
            titulo: 'Titulo2',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        {
            titulo: 'Titulo3',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        {
            titulo: 'Titulo4',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        {
            titulo: 'Titulo5',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        {
            titulo: 'Titulo6',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        {
            titulo: 'Titulo7',
            aluno: 'Aluno2',
            orientador: 'Orientador1',
            data: '02/01/2023'
        },
        // Adicione mais dados de exemplo conforme necessário
    ];

    document.addEventListener('DOMContentLoaded', function () {
        const tbody = document.querySelector('tbody');
        const searchInput = document.getElementById('searchInput');
        const filterField = document.getElementById('filterField');
        
        // Função para preencher a tabela com dados iniciais
        function populateTable(data) {
            tbody.innerHTML = '';
            data.forEach(tcc => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${tcc.titulo}</td>
                    <td>${tcc.aluno}</td>
                    <td>${tcc.orientador}</td>
                    <td>${tcc.data}</td>
                `;
                tbody.appendChild(row);
            });
        }

        // Função para filtrar as linhas da tabela
        function filterTable() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedField = filterField.value;
            
            const filteredTccs = tccs.filter(tcc => {
                const fieldValue = tcc[selectedField].toLowerCase();
                return fieldValue.includes(searchTerm);
            });
            
            populateTable(filteredTccs);
        }

        // Chame a função de filtro sempre que o texto de pesquisa ou o campo de seleção for alterado
        searchInput.addEventListener('input', filterTable);
        filterField.addEventListener('change', filterTable);

        // Preencha a tabela com dados iniciais
        populateTable(tccs);
    });
</script>

@endsection
